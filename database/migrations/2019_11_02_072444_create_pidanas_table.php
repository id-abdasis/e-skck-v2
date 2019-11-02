<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePidanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pidanas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('perkara_pidana', 100);
            $table->string('perkara', 250);
            $table->string('vonis', 100);
            $table->string('proses_perkara', 200);
            $table->string('hukuman', 100);
            $table->string('perkara_pelanggaran', 100);
            $table->string('jenis_pelanggaran', 100);
            $table->string('proses_pelanggaran', 100);
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
        Schema::dropIfExists('pidanas');
    }
}
