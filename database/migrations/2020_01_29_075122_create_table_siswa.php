<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nis')->unique();
            $table->string('nama',100);
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->string('jenis_kelamin',10);
            $table->string('alamat');
            $table->string('HP_siswa',15);
            $table->string('nama_wali');
            $table->string('HP_wali');
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
        Schema::dropIfExists('siswa');
    }
}
