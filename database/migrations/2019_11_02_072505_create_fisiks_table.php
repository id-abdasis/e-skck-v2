<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFisiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fisiks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rambut', 100);
            $table->string('wajah', 100);
            $table->string('kulit', 100);
            $table->string('tandaistimewa', 100)->nullable()->default('Tidak Ada');
            $table->string('tinggi_badan', 100);
            $table->string('berat_badan', 100);
            $table->string('rumus_jari_kiri', 100)->nullable()->default('Belum Scan');
            $table->string('rumus_jari_kanan', 100)->nullable()->default('Belum Scan');
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
        Schema::dropIfExists('fisiks');
    }
}
