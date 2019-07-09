<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal');
            $table->string('nama_konsumen');
            $table->string('alamat');
            $table->integer('no_surat');
            $table->string('no_telp');
            $table->string('produk');
            $table->string('deskripsi');
            $table->integer('harga');
            $table->integer('total');
            $table->integer('uang_muka');
            $table->integer('sisa_tagihan');
            $table->string('pemesanan');
            $table->string('marketing');
            $table->string('mengetahui');

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
        Schema::dropIfExists('spks');
    }
}
