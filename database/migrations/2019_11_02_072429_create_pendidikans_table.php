<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tingkat_pendidikan', 100);
            $table->string('nama_sekolah', 100);
            $table->string('tahun_lulus', 100);
            $table->string('provinsi_pendidikan', 100);
            $table->string('kabupaten_pendidikan', 100);
            $table->string('kecamatan_pendidikan', 100);
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
        Schema::dropIfExists('pendidikans');
    }
}
