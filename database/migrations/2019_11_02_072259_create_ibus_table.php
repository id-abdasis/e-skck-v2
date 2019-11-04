<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIbusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lengkap_ibu', 100);
            $table->string('agama_ibu', 30);
            $table->string('pekerjaan_ibu', 100);
            $table->string('umur_ibu', 100);
            $table->string('provinsi_ibu', 100);
            $table->string('kabupaten_ibu', 100);
            $table->string('kecamatan_ibu', 100);
            $table->string('kelurahan_ibu', 100);
            $table->string('alamat_ibu', 250);
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
        Schema::dropIfExists('ibus');
    }
}
