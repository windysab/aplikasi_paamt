<?php

namespace App\Http\Controllers;

use App\Models\GugatanCerai;

use Illuminate\Http\Request;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
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

    public function generateWordDocument($id)
    {
        $gugatanCerai = GugatanCerai::find($id);




        // Create a new PhpWord instance


        $phpWord = new PhpWord();




        // Add a section to the document
        $section = $phpWord->addSection();




        // Add content to the section
        $section->addText('Detail Gugatan Cerai', ['size' => 16, 'bold' => true]);
        $section->addText('Nama Penggugat: ' . $gugatanCerai->nama_penggugat);


        $section->addText('Umur Penggugat: ' . $gugatanCerai->umur_penggugat);



        // Add more fields as needed

        // Save the document


        $filename = 'gugatan_cerai_' . $id . '.docx';


        // $filepath = storage_path('app/public/' . $filename);
        $destinationFolder = 'C:\\Users\\user\\Documents\\uji coba\\';

        // Membuat path lengkap ke file
        $filepath = $destinationFolder . $filename;




        // Create the Word writer and save the document


        $writer = IOFactory::createWriter($phpWord, 'Word2007');
        $writer->save($filepath);
        // $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        // try {
        //     $objWriter->save(storage_path('helloWorld.docx'));
        // } catch (Exception $e) {
        // }


        // return response()->download(storage_path('helloWorld.docx'));

        // Provide the download link to the user
        return response()->download($filepath, $filename)->deleteFileAfterSend(true);
    }
    public function exportGugatanCerai()
    {
        return Excel::download(new GugatanCeraiExport, 'gugatan_cerai.xlsx');
    }
}
