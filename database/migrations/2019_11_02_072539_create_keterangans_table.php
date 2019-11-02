<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeterangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keterangans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('riwayat_pekerjaan', 250)->nullable()->default('Belum Pernah Kerja');
            $table->string('hobi', 100)->nullable()->default('Tidak Punya Hobi');
            $table->string('alamat_keterangan', 100)->nullable()->default('-');
            $table->string('email', 100)->nullable()->default('Tidak Punya Email');
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
        Schema::dropIfExists('keterangans');
    }
}
