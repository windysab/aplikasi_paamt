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
            'umur_penggugat' => 'required|integer',
            'pekerjaan_penggugat' => 'required',
            'pendidikan_penggugat' => 'required',
            'alamat_penggugat' => 'required',
            'nama_tergugat' => 'required',
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




        return view('gugatan_cerai_detail', compact('gugatanCerai'));
    }

    // public function generateWordDocument($id)
    // {
    //     $gugatanCerai = GugatanCerai::find($id);

    //     // Create a new PhpWord instance

    //     $phpWord = new PhpWord();

    //     // Add a section to the document
    //     $section = $phpWord->addSection();

    //     // Add content to the section
    //     // $section->addText('Detail Gugatan Cerai', ['size' => 16, 'bold' => true]);
    //     // $section->addText('Nama Penggugat: ' . $gugatanCerai->nama_penggugat);
    //     // $section->addText('Umur Penggugat: ' . $gugatanCerai->umur_penggugat);
    //     $bulanIndonesia = [
    //         'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
    //         'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    //     ];
    //     $bulan = $bulanIndonesia[date('n') - 1]; // Mengambil nama bulan dari array berdasarkan bulan saat ini
    //     $section->addText('Amuntai, ' . date('d') . ' ' . $bulan . ' ' . date('Y'), ['size' => 12, 'name' => 'Times New Roman']);
    //     $section->addText('Kepada', ['size' => 12]);
    //     $section->addText('Yth.Ketua Pengadilan Agama Amuntai', ['size' => 12]);
    //     $section->addText('di-', ['size' => 12]);
    //     $section->addText('Amuntai', ['size' => 12]);
    //     $section->addText('Assalamu\'alaikum wr.wb.', ['size' => 12]);
    //     $section->addText('Saya yang bertandatangan di bawah ini :', ['size' => 12]);
    //     $section->addText('Nama      : ' . $gugatanCerai->nama_penggugat, ['size' => 12, 'name' => 'Times New Roman']);
    //     $section->addText('(ISTRI) : binti .............................................................', ['size' => 12]);

    //     $section->addText('Umur      : ' .$gugatanCerai->umur_pengggugat, ['size' => 12, 'name' => 'Times New Roman']);
    //     $section->addText('Agama : .............................', ['size' => 12]);
    //     $section->addText('Pekerjaan : ........................................................', ['size' => 12]);
    //     $section->addText('Pendidikan : / ........................................................', ['size' => 12]);
    //     // Add more text as needed...

    //     // Then add the details from the lawsuit
    //     $section->addText('Detail Gugatan Cerai', ['size' => 16, 'bold' => true]);
    //     $section->addText('Nama Penggugat: ' . $gugatanCerai->nama_penggugat);
    //     $section->addText('Umur Penggugat: ' . $gugatanCerai->umur_penggugat);
    //     $section->addText('Pekerjaan Penggugat: ' . $gugatanCerai->pekerjaan_penggugat);
    //     $section->addText('Pendidikan Penggugat: ' . $gugatanCerai->pendidikan_penggugat);
    //     $section->addText('Alamat Penggugat: ' . $gugatanCerai->alamat_penggugat);
    //     $section->addText('Nama Tergugat: ' . $gugatanCerai->nama_tergugat);
    //     $section->addText('Umur Tergugat: ' . $gugatanCerai->umur_tergugat);
    //     $section->addText('Pekerjaan Tergugat: ' . $gugatanCerai->pekerjaan_tergugat);
    //     $section->addText('Pendidikan Tergugat: ' . $gugatanCerai->pendidikan_tergugat);
    //     $section->addText('Alamat Tergugat: ' . $gugatanCerai->alamat_tergugat);
    //     $section->addText('Alasan Cerai: ' . $gugatanCerai->alasan_cerai);

    //     $section->addText('Demikianlah surat gugatan ini saya buat dengan sebenarnya untuk dipergunakan sebagaimana mestinya.', ['size' => 12]);
    //     $section->addText('Hormat saya,', ['size' => 12]);
    //     $section->addText('Istri', ['size' => 12]);
    //     $section->addText('(........................................................)', ['size' => 12]);
    //     $section->addText('Alamat : ..........................................................................', ['size' => 12]);
    //     $section->addText('No. HP : ..........................................................................', ['size' => 12]);
    //     $section->addText('Saksi I', ['size' => 12]);
    //     $section->addText('(........................................................)', ['size' => 12]);
    //     $section->addText('Alamat : ..........................................................................', ['size' => 12]);
    //     $section->addText('No. HP : ..........................................................................', ['size' => 12]);

    //     // Add more fields as needed
    //     // Save the document
    //     $filename = 'gugatan_cerai_' . $id . '.docx';
    //     // $filepath = storage_path('app/public/' . $filename);
    //     $destinationFolder = 'C:\\Users\\user\\Documents\\uji coba\\';

    //     // Membuat path lengkap ke file
    //     $filepath = $destinationFolder . $filename;

    //     $writer = IOFactory::createWriter($phpWord, 'Word2007');
    //     $writer->save($filepath);

    //     return response()->download($filepath, $filename)->deleteFileAfterSend(true);
    // }
    public function generateWordDocument($id)
    {
        $gugatanCerai = GugatanCerai::find($id);

        // Pastikan bahwa nama file template benar dan sesuai
        $templatePath = resource_path('templates/Blanko Pendaftaran CG Bain (Simple).docx');

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
        $templateProcessor->setValue('umur_penggugat', $gugatanCerai->umur_penggugat);
        $templateProcessor->setValue('pekerjaan_penggugat', $gugatanCerai->pekerjaan_penggugat);
        $templateProcessor->setValue('pendidikan_penggugat', $gugatanCerai->pendidikan_penggugat);
        $templateProcessor->setValue('alamat_penggugat', $gugatanCerai->alamat_penggugat);
        $templateProcessor->setValue('nama_tergugat', $gugatanCerai->nama_tergugat);
        $templateProcessor->setValue('umur_tergugat', $gugatanCerai->umur_tergugat);
        $templateProcessor->setValue('pekerjaan_tergugat', $gugatanCerai->pekerjaan_tergugat);
        $templateProcessor->setValue('pendidikan_tergugat', $gugatanCerai->pendidikan_tergugat);
        $templateProcessor->setValue('alamat_tergugat', $gugatanCerai->alamat_tergugat);
        $templateProcessor->setValue('alasan_cerai', $gugatanCerai->alasan_cerai);


        // Buat nama file hasil replace yang baru
        $filename = 'gugatan_cerai_' . $id . $gugatanCerai->nama_penggugat. '.docx';

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

}
