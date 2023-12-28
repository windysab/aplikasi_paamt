<?php

namespace App\Http\Controllers;

use App\Models\GugatanCerai;
use Illuminate\Http\Request;


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GugatanCerai;

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
        GugatanCerai::create($request->all());

        // Redireksi atau tindakan lainnya setelah penyimpanan
        return redirect()->route('gugatan_cerai.form')->with('success', 'Gugatan Cerai berhasil diajukan!');
    }
    // public function show($id)
    // {
    //     $gugatanCerai = GugatanCerai::find($id);

    //     return view('gugatan_cerai_detail', ['gugatanCerai' => $gugatanCerai]);
    //     // return redirect()->route('gugatan_cerai.detail', ['id' => $gugatanCerai->id])->with('success', 'Gugatan Cerai berhasil diajukan!');

    // }
}
