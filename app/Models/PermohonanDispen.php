<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class PermohonanDispen extends Model
{

    use HasFactory;

    protected $table = 'permohonan_dispen';



    // 'nama_pemohonI' => 'required',
    //         'umur_pemohonI' => 'required|integer',
    //         'pekerjaan_pemohonI' => 'required',
    //         'pendidikan_pemohonI' => 'required',
    //         'alamat_pemohonI' => 'required',
    //         'nama_pemohonII' => 'required',
    //         'umur_pemohonII' => 'required|integer',
    //         'pekerjaan_pemohonII' => 'required',
    //         'pendidikan_pemohonII' => 'required',
    //         'alamat_pemohonII' => 'required',
    //         'kecamatan' => 'required',
    //         'kabupaten' => 'required',
    //         'surat_keterangan' => 'required',
    //         'nomor_surat' => 'required|integer',
    //         'tahun' => 'required|integer',
    //         'bulan' => 'required|integer',
    //         'penghasilan' => 'required|integer',
    //         'nama_calon' => 'required',
    //         'umur_calon' => 'required|integer',
    //         'pekerjaan_calon' => 'required',
    //         'pendidikan_calon' => 'required',
    //         'alamat_calon' => 'required',
    //         'nama_calonII' => 'required',
    //         'umur_calonII' => 'required|integer',
    //         'pekerjaan_calonII' => 'required',
    //         'pendidikan_calonII' => 'required',
    //         'alamat_calonII' => 'required',

    protected $fillable = [
        'nama_pemohonI',
        'umur_pemohonI',
        'pekerjaan_pemohonI',
        'pendidikan_pemohonI',
        'alamat_pemohonI',
        'nama_pemohonII',
        'umur_pemohonII',
        'pekerjaan_pemohonII',
        'pendidikan_pemohonII',
        'alamat_pemohonII',
        'nama_calon',
        'umur_calon',
        'pekerjaan_calon',
        'pendidikan_calon',
        'alamat_calon',
        'nama_calonII',
        'umur_calonII',
        'pekerjaan_calonII',
        'pendidikan_calonII',
        'alamat_calonII',
        'kecamatan',
        'kabupaten',
        'surat_keterangan',
        'nomor_surat',
        'tanggal_surat',
        'tahun',
        'bulan',
        'penghasilan',
        'nama_mertua_laki',
        'umur_mertua_laki',
        'pekerjaan_mertua_laki',
        'pendidikan_mertua_laki',
        'alamat_mertua_laki',
        'nama_mertua_perempuan',
        'umur_mertua_perempuan',
        'pekerjaan_mertua_perempuan',
        'pendidikan_mertua_perempuan',
        'alamat_mertua_perempuan',

    ];
}
