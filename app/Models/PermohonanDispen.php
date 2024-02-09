<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class PermohonanDispen extends Model
{

    use HasFactory;

    protected $table = 'permohonan_dispen';

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
        'slug'

    ];




    public function getRouteKeyName()
    {
        return 'slug';
    }
}
