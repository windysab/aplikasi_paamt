<?php

namespace App\Http\Controllers;


use App\Models\PermohonanDispen;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class PermohonanDispenController extends Controller
{

    public function create()
    {
        return view('permohonan_dispen');
    }

    public function store(Request $request)
    {
        // Validasi data jika diperlukan

        $request->validate([
            'nama_pemohonI' => 'required',
            'umur_pemohonI' => 'required|integer',
            'pekerjaan_pemohonI' => 'required',
            'pendidikan_pemohonI' => 'required',
            'alamat_pemohonI' => 'required',
            'nama_pemohonII' => 'required',
            'umur_pemohonII' => 'required|integer',
            'pekerjaan_pemohonII' => 'required',
            'pendidikan_pemohonII' => 'required',
            'alamat_pemohonII' => 'required',
            'kecamatan' => 'required',
            'surat_keterangan' => 'required',
            'nomor_surat' => 'required|integer',
            'tahun' => 'required|integer',
            'bulan' => 'required|integer',
            'penghasilan' => 'required|integer',
            'nama_calon' => 'required',
            'umur_calon' => 'required|integer',
            'pekerjaan_calon' => 'required',
            'pendidikan_calon' => 'required',
            'alamat_calon' => 'required',
            'nama_calonII' => 'required',
            'umur_calonII' => 'required|integer',
            'pekerjaan_calonII' => 'required',
            'pendidikan_calonII' => 'required',
            'alamat_calonII' => 'required',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Simpan data ke database
        $permohonan = PermohonanDispen::create($request->all());


        return redirect()->route('permohonan_dispen.detail', ['id' => $permohonan->id])
            ->with('success', 'Permohonan berhasil diajukan!');
    }
    public function show($id)
    {

        $permohonan = PermohonanDispen::find($id);
        return view('permohonan_dispen.detail', compact('permohonan'));
    }

    public function generateWordDocument($id)
    {
        $permohonan = PermohonanDispen::find($id);

        // Pastikan bahwa nama file template benar dan sesuai
        $templatePath = resource_path('templates/Form Permohonan Dispensasi Kawin, Ortu sbg Pemohon.docx');

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
        $templateProcessor->setValue('nama_pemohonI', $permohonan->nama_pemohonI);
        $templateProcessor->setValue('umur_pemohonI', $permohonan->umur_pemohonI);
        $templateProcessor->setValue('pekerjaan_pemohonI', $permohonan->pekerjaan_pemohonI);
        $templateProcessor->setValue('pendidikan_pemohonI', $permohonan->pendidikan_pemohonI);
        $templateProcessor->setValue('alamat_pemohonI', $permohonan->alamat_pemohonI);
        $templateProcessor->setValue('nama_pemohonII', $permohonan->nama_pemohonII);
        $templateProcessor->setValue('umur_pemohonII', $permohonan->umur_pemohonII);
        $templateProcessor->setValue('pekerjaan_pemohonII', $permohonan->pekerjaan_pemohonII);
        $templateProcessor->setValue('pendidikan_pemohonII', $permohonan->pendidikan_pemohonII);
        $templateProcessor->setValue('alamat_pemohonII', $permohonan->alamat_pemohonII);
        $templateProcessor->setValue('kecamatan', $permohonan->kecamatan);
        $templateProcessor->setValue('surat_keterangan', $permohonan->surat_keterangan);
        $templateProcessor->setValue('nomor_surat', $permohonan->nomor_surat);
        $templateProcessor->setValue('tahun', $permohonan->tahun);
        $templateProcessor->setValue('bulan', $permohonan->bulan);
        $templateProcessor->setValue('penghasilan', $permohonan->penghasilan);
        $templateProcessor->setValue('nama_calon', $permohonan->nama_calon);
        $templateProcessor->setValue('umur_calon', $permohonan->umur_calon);
        $templateProcessor->setValue('pekerjaan_calon', $permohonan->pekerjaan_calon);
        $templateProcessor->setValue('pendidikan_calon', $permohonan->pendidikan_calon);
        $templateProcessor->setValue('alamat_calon', $permohonan->alamat_calon);
        $templateProcessor->setValue('nama_calonII', $permohonan->nama_calonII);
        $templateProcessor->setValue('umur_calonII', $permohonan->umur_calonII);
        $templateProcessor->setValue('pekerjaan_calonII', $permohonan->pekerjaan_calonII);
        $templateProcessor->setValue('pendidikan_calonII', $permohonan->pendidikan_calonII);
        $templateProcessor->setValue('alamat_calonII', $permohonan->alamat_calonII);

        // Replace certain characters in the name with a hyphen
        // $filename = 'gugatan_cerai_' . str_replace(['/', '\\', ':', '*', '?', '«', '<', '>', '|'], '-', $gugatanCerai->nama_penggugat) . '.docx';

        $filename = 'permohonan_dispen_' . preg_replace("/[^A-Za-z0-9 ]/", '', $permohonan->nama_pemohonI) . '.docx';

        // Tentukan lokasi penyimpanan file hasil replace
        $destinationFolder = 'C:\\Users\\user\\Documents\\uji coba\\';

        // Membuat path lengkap ke file
        $filepath = $destinationFolder . $filename;

        // Simpan hasil TemplateProcessor sebagai file Word
        $templateProcessor->saveAs($filepath);

        // Sanitize the fallback filename
        $fallbackFilename = str_replace(['/', '\\', ':', '*', '?', '«', '<', '>', '|'], '-', $filename);

        // Kembalikan file untuk diunduh
        return response()->download($filepath, $fallbackFilename)->deleteFileAfterSend(true);

        // return response()->download($filepath, $fallbackFilename)->deleteFileAfterSend(true);
    }


    public function edit($id)
    {
        $permohonan = PermohonanDispen::find($id);
        return view('permohonan_dispen.edit', compact('permohonan'));
    }

    public function update(Request $request, $id)
    {
        $pendidikan_pemohonI = $request->input('pendidikan_pemohonI');
        if ($pendidikan_pemohonI === 'lain-lain') {
            $pendidikan_pemohonI = $request->input('pendidikan_pemohonI', 'N/A'); // provide a default value
        }

        $pendidikan_pemohonII = $request->input('pendidikan_pemohonII');
        if ($pendidikan_pemohonII === 'lain-lain') {
            $pendidikan_pemohonII = $request->input('pendidikan_pemohonII', 'N/A'); // provide a default value
        }

        $permohonan = PermohonanDispen::find($id);
        $data = $request->all();
        $data['pendidikan_pemohonI'] = $pendidikan_pemohonI;
        $data['pendidikan_pemohonII'] = $pendidikan_pemohonII;
        $permohonan->update($data);

        return redirect()->route('permohonan_dispen.detail', ['id' => $permohonan->id])
            ->with('success', 'Permohonan berhasil diupdate!');
    }
    public function index()
    {
        $permohonan = PermohonanDispen::all();
        return view('permohonan_dispen.index', compact('permohonan'));
    }

    public function destroy($id)
    {
        $permohonan = PermohonanDispen::find($id);
        $permohonan->delete();
        return redirect()->route('permohonan_dispen.index')
            ->with('success', 'Permohonan berhasil dihapus!');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $permohonan = PermohonanDispen::where('nama_pemohonI', 'like', '%' . $search . '%')->paginate(5);
        return view('permohonan_dispen.index', compact('permohonan'));
    }

    public function search2(Request $request)
    {
        $search = $request->get('search');
        $permohonan = PermohonanDispen::where('nama_pemohonII', 'like', '%' . $search . '%')->paginate(5);
        return view('permohonan_dispen.index', compact('permohonan'));
    }


}

