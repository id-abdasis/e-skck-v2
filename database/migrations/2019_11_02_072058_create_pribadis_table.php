<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePribadisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pribadis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lengkap_pendaftar', 100);
            $table->string('tempat_lahir_pendaftar', 100);
            $table->string('tanggal_lahir_pendaftar', 100);
            $table->string('jenis_kelamin_pendaftar', 100);
            $table->string('status_perkawinan_pendaftar', 100);
            $table->string('kewarganegaraan_pendaftar', 100);
            $table->string('agama_pendaftar', 100);
            $table->string('pekerjaan_pendaftar', 100);
            $table->string('telepon_pendaftar', 14);
            $table->string('provinsi_pendaftar', 100);
            $table->string('kabupaten_pendaftar', 100);
            $table->string('kecamatan_pendaftar', 100);
            $table->string('kelurahan_pendaftar', 100);
            $table->string('alamat_pendaftar', 250);
            $table->string('jenis_identitas_pendaftar', 20);
            $table->string('nomor_identitas_pendaftar', 100);
            $table->string('nomor_paspor_pendaftar', 100)->nullable()->default('tidak ada');
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
        Schema::dropIfExists('pribadis');
    }
}
