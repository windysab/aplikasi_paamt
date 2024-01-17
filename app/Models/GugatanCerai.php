<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GugatanCerai extends Model
{

    use HasFactory;

    protected $table = 'gugatan_cerai';

    // app/Models/GugatanCerai.php

    protected $fillable = ['nama_penggugat','binti_penggugat', 'umur_penggugat','agama_penggugat', 'pekerjaan_penggugat', 'pendidikan_penggugat', 'alamat_penggugat', 'nama_tergugat','bin_tergugat',  'umur_tergugat', 'agama_tergugat', 'pekerjaan_tergugat', 'pendidikan_tergugat', 'alamat_tergugat', 'alasan_cerai','alasan_cerai2','alasan_cerai3','separation_details', 'tempat_menikah'];

}
