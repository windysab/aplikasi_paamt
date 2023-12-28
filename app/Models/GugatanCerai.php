<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GugatanCerai extends Model
{

    use HasFactory;

    protected $table = 'gugatan_cerai';

    // app/Models/GugatanCerai.php

    protected $fillable = ['nama_penggugat', 'umur_penggugat', 'pekerjaan_penggugat', 'pendidikan_penggugat', 'alamat_penggugat', 'nama_tergugat', 'umur_tergugat', 'pekerjaan_tergugat', 'pendidikan_tergugat', 'alamat_tergugat', 'alasan_cerai', 'tempat_menikah'];
}
