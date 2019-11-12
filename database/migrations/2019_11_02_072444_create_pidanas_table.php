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
            $table->string('perkara', 250)->nullable()->default('tidak pernah');
            $table->string('vonis', 100)->nullable()->default('tidak pernah');
            $table->string('proses_perkara', 200)->nullable()->default('tidak pernah');
            $table->string('hukuman', 100)->nullable()->default('tidak pernah');
            $table->string('perkara_pelanggaran', 100);
            $table->string('jenis_pelanggaran', 100)->nullable()->default('tidak pernah');
            $table->string('proses_pelanggaran', 100)->nullable()->default('tidak pernah');
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
