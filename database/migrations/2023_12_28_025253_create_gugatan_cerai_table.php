<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGugatanCeraiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gugatan_cerai', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penggugat');

            $table->integer('umur_penggugat');
            $table->string('agama_penggugat');
            $table->string('pekerjaan_penggugat');
            $table->string('pendidikan_penggugat');
            $table->string('alamat_penggugat');
            $table->string('nama_tergugat');

            $table->integer('umur_tergugat');
           
            $table->string('agama_tergugat');
            $table->string('pekerjaan_tergugat');
            $table->string('pendidikan_tergugat');
            $table->string('alamat_tergugat');
            $table->text('alasan_cerai');
            $table->string('tempat_menikah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gugatan_cerai');
    }
}
