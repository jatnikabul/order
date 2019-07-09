<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_proyek');
            $table->string('programmer_proyek');
            $table->string('perihal');
            $table->string('peserta_rapat');
            $table->string('lokasi_rapat');
            //lokasi rapat dibuat oleh
            $table->string('lr_dibuat_oleh');
            $table->date('tanggal');
            $table->text('diskusi');
            $table->string('rencana_kegiatan');
            $table->date('mulai');
            $table->date('selesai');
            $table->string('dibuat_oleh');
            //nama
            //jabatan
            //tanggal
            $table->string('diketahui_oleh');
            //nama
            //jabatan
            //tanggal
            $table->string('disetujui_oleh');
            //nama
            //jabatan
            //tanggal
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
        Schema::dropIfExists('poms');
    }
}
