<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lengkap_ayah', 100);
            $table->string('agama_ayah', 30);
            $table->string('pekerjaan_ayah', 100);
            $table->string('umur_ayah', 100);
            $table->string('provinsi_ayah', 100);
            $table->string('kabupaten_ayah', 100);
            $table->string('kecamatan_ayah', 100);
            $table->string('kelurahan_ayah', 100);
            $table->string('alamat_ayah', 250);
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
        Schema::dropIfExists('ayahs');
    }
}
