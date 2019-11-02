<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasangans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status_pasangan', 20);
            $table->string('nama_lengkap_pasangan', 100);
            $table->string('umur_pasangan', 4);
            $table->string('agama_pasangan', 100);
            $table->string('pekerjaan_pasangan', 100);
            $table->string('jenis_kelamin_pasangan', 20);
            $table->string('provinsi_pasangan', 100);
            $table->string('kabupaten_pasangan', 100);
            $table->string('kecamatan_pasangan', 100);
            $table->string('kelurahan_pasangan', 100);
            $table->string('alamat_pasangan', 100);
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
        Schema::dropIfExists('pasangans');
    }
}
