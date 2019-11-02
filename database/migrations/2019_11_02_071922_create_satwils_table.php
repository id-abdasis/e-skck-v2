<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatwilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satwils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('keperluan', 250);
            $table->string('alamat_satwil', 100);
            $table->string('provinsi_satwil', 100);
            $table->string('kabupaten_satwil', 100);
            $table->string('kecamatan_satwil', 100);
            $table->string('kelurahan_satwil', 100);
            $table->string('pembayaran_satwil', 100);
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
        Schema::dropIfExists('satwils');
    }
}
