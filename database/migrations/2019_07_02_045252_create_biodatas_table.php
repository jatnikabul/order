<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('tempat');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            
            $table->string('nama_instansi');
            $table->text('alamat_instansi');
            $table->string('jabatan');
            $table->string('email');
            $table->string('telepon');
            
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
        Schema::dropIfExists('biodatas');
    }
}
