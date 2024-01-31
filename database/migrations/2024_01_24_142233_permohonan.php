<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Permohonan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_dispen', function (Blueprint $table) {
            $table->id();
            /*
             Data Pemohon I ( Ayah )
            */

            $table->string('nama_pemohonI');
            $table->integer('umur_pemohonI');
            $table->string('pekerjaan_pemohonI');
            $table->string('pendidikan_pemohonI');
            $table->text('alamat_pemohonI');

            /*
             Data Pemohon II ( Ibu )
            */

            $table->string('nama_pemohonII');
            $table->integer('umur_pemohonII');
            $table->string('pekerjaan_pemohonII');
            $table->string('pendidikan_pemohonII');
            $table->text('alamat_pemohonII');




         /*
             Data calon Mempelai Suami/Isteri
            */

            $table->string('nama_calon');
            $table->integer('umur_calon');
            $table->string('pekerjaan_calon');
            $table->string('pendidikan_calon');
            $table->text('alamat_calon');


            // /*
            //  Data calon Mempelai Suami/Isteri
            // */

            $table->string('nama_calonII');
            $table->integer('umur_calonII');
            $table->string('pekerjaan_calonII');
            $table->string('pendidikan_calonII');
            $table->text('alamat_calonII');

            /*
             Data Calon Suami Isteri
            */

            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('surat_keterangan');
            $table->string('nomor_surat');
            $table->date('tanggal_surat');
            //Lama hubungan calon
            $table->integer('tahun');
            $table->integer('bulan');

            // Penghasilan calon suami
            $table->integer('penghasilan');

            /*
             Data Mertua Laki-laki
            */

            $table->string('nama_mertua_laki');
            $table->integer('umur_mertua_laki');
            $table->string('pekerjaan_mertua_laki');
            $table->string('pendidikan_mertua_laki');
            $table->text('alamat_mertua_laki');

            /*
             Data Mertua Perempuan
            */

            $table->string('nama_mertua_perempuan');
            $table->integer('umur_mertua_perempuan');
            $table->string('pekerjaan_mertua_perempuan');
            $table->string('pendidikan_mertua_perempuan');
            $table->text('alamat_mertua_perempuan');


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
        Schema::dropIfExists('permohonan');
    }
}
