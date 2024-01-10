<?php

namespace App\Http\Controllers;

use App\Models\GugatanCerai;

use Illuminate\Http\Request;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\TemplateProcessor;
use App\Exports\GugatanCeraiExport;
use Maatwebsite\Excel\Facades\Excel;

class GugatanCeraiController extends Controller
{
    public function create()
    {
        return view('gugatan_cerai');
    }

    public function store(Request $request)
    {
        // Validasi data jika diperlukan

        $request->validate([
            'nama_penggugat' => 'required',
            'binti_penggugat' => 'required',
            'umur_penggugat' => 'required|integer',
            'pekerjaan_penggugat' => 'required',
            // 'pendidikan_penggugat' => 'required',
            'pendidikan_penggugat' => [
                'required',
                function ($attribute, $value, $fail) use ($request) {
                    // Check if 'pendidikan_penggugat' is 'lain-lain'
                    if ($value == 'lain-lain') {
                        // If 'lain-lain', check if 'other_pendidikan_penggugat' is provided
                        if (!$request->filled('pendidikan_penggugat')) {
                            $fail('The ' . $attribute . ' field is required when "Lain-lain" is selected.');
                        }
                    }
                },
            ],
            'alamat_penggugat' => 'required',
            'nama_tergugat' => 'required',
            'bin_tergugat' => 'required',
            'umur_tergugat' => 'required|integer',
            'pekerjaan_tergugat' => 'required',
            'pendidikan_tergugat' => 'required',
            'alamat_tergugat' => 'required',
            'alasan_cerai' => 'required',
            'tempat_menikah' => 'required',

            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Simpan data ke database
        $gugatanCerai = GugatanCerai::create($request->all());

        // Redireksi atau tindakan lainnya setelah penyimpanan
        // return redirect()->route('gugatan_cerai.form')->with('success', 'Gugatan Cerai berhasil diajukan!');
        return redirect()->route('gugatan_cerai.detail', ['id' => $gugatanCerai->id])->with('success', 'Gugatan Cerai berhasil disimpan!');
    }
    public function show($id)
    {


        $gugatanCerai = GugatanCerai::find($id);
        // $gugatanCerai = GugatanCerai::distinct()->get();

        // return view('gugatan_cerai_detail', ['gugatanCerai' => $gugatanCerai]);


        return view('gugatan_cerai_detail', compact('gugatanCerai'));
    }


    public function generateWordDocument($id)
    {
        $gugatanCerai = GugatanCerai::find($id);

        // Pastikan bahwa nama file template benar dan sesuai
        $templatePath = resource_path('templates/Form Pendaftaran CG Bain (Simple).docx');

        // Pastikan bahwa file template memang ada di path yang ditentukan
        if (!file_exists($templatePath)) {
            return redirect()->back()->with('error', 'File template tidak ditemukan!');
        }

        // Buat variabel baru untuk menyimpan hasil replace
        $templateProcessor = new TemplateProcessor($templatePath);



        // Replace variabel di template word dengan data yang diinputkan
        $bulanIndonesia = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];
        $bulan = $bulanIndonesia[date('n') - 1]; // Mengambil nama bulan dari array berdasarkan bulan saat ini
        $templateProcessor->setValue('tanggal', date('d') . ' ' . $bulan . ' ' . date('Y'));
        $templateProcessor->setValue('nama_penggugat', $gugatanCerai->nama_penggugat);
        $templateProcessor->setValue('binti_penggugat', $gugatanCerai->binti_penggugat);
        $templateProcessor->setValue('umur_penggugat', $gugatanCerai->umur_penggugat);
        $templateProcessor->setValue('agama_penggugat', $gugatanCerai->agama_penggugat);
        $templateProcessor->setValue('pekerjaan_penggugat', $gugatanCerai->pekerjaan_penggugat);
        $templateProcessor->setValue('pendidikan_penggugat', $gugatanCerai->pendidikan_penggugat);
        $templateProcessor->setValue('alamat_penggugat', $gugatanCerai->alamat_penggugat);
        $templateProcessor->setValue('nama_tergugat', $gugatanCerai->nama_tergugat);
        $templateProcessor->setValue('umur_tergugat', $gugatanCerai->umur_tergugat);
        $templateProcessor->setValue('bin_tergugat', $gugatanCerai->bin_tergugat);
        $templateProcessor->setValue('agama_tergugat', $gugatanCerai->agama_tergugat);
        $templateProcessor->setValue('pekerjaan_tergugat', $gugatanCerai->pekerjaan_tergugat);
        $templateProcessor->setValue('pendidikan_tergugat', $gugatanCerai->pendidikan_tergugat);
        $templateProcessor->setValue('alamat_tergugat', $gugatanCerai->alamat_tergugat);
        $templateProcessor->setValue('alasan_cerai', $gugatanCerai->alasan_cerai);


        // Buat nama file hasil replace yang baru
        $filename = 'gugatan_cerai_' . $gugatanCerai->nama_penggugat . '.docx';

        // Tentukan lokasi penyimpanan file hasil replace
        $destinationFolder = 'C:\\Users\\user\\Documents\\uji coba\\';

        // Membuat path lengkap ke file
        $filepath = $destinationFolder . $filename;


        // Simpan hasil TemplateProcessor sebagai file Word
        $templateProcessor->saveAs($filepath);

        // Kembalikan file untuk diunduh
        return response()->download($filepath, $filename)->deleteFileAfterSend(true);
    }
    public function exportGugatanCerai()
    {
        return Excel::download(new GugatanCeraiExport, 'gugatan_cerai.xlsx');
    }

    public function edit($id)
    {
        $gugatanCerai = GugatanCerai::find($id);
        return view('gugatan_cerai.edit', compact('gugatanCerai'));
    }
    public function update(Request $request, $id)
    {
        $gugatanCerai = GugatanCerai::find($id);
        $gugatanCerai->update($request->all());

        return redirect()->route('gugatan_cerai.detail', ['id' => $gugatanCerai->id])
            ->with('success', 'Gugatan Cerai berhasil diupdate!');
    }
    public function index()
    {
        $gugatanCerai = GugatanCerai::all();
        return view('gugatan_cerai.index', compact('gugatanCerai'));
    }
}
