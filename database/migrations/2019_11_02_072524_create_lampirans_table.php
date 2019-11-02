<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLampiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampirans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ktp', 100)->nullable()->default('Belum upload');
            $table->string('paspor', 100)->nullable()->default('Belum upload');
            $table->string('kartu_keluarga', 100)->nullable()->default('Belum upload');
            $table->string('akte', 100)->nullable()->default('Belum upload');   
            $table->string('sidik_jari', 100)->nullable()->default('Belum upload');
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
        Schema::dropIfExists('lampirans');
    }
}
