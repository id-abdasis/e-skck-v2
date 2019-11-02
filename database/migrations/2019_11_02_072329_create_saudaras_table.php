<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaudarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saudaras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lengkap_saudara', 100);
            $table->string('agama_saudara', 30);
            $table->string('pekerjaan_saudara', 100);
            $table->string('umur_saudara', 100);
            $table->string('provinsi_saudara', 100);
            $table->string('kabupaten_saudara', 100);
            $table->string('kecamatan_saudara', 100);
            $table->string('alamat_saudara', 250);
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
        Schema::dropIfExists('saudaras');
    }
}
