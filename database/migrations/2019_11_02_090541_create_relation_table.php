<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('satwils', function (Blueprint $table) {
            $table->bigInteger('pribadi_id')->unsigned();
            $table->foreign('pribadi_id')->references('id')->on('pribadis')->onDelete('cascade');
        });

        Schema::table('pasangans', function (Blueprint $table) {
            $table->bigInteger('pribadi_id')->unsigned();
            $table->foreign('pribadi_id')->references('id')->on('pribadis')->onDelete('cascade');
        });

        Schema::table('ayahs', function (Blueprint $table) {
            $table->bigInteger('pribadi_id')->unsigned();
            $table->foreign('pribadi_id')->references('id')->on('pribadis')->onDelete('cascade');
        });

        Schema::table('ibus', function (Blueprint $table) {
            $table->bigInteger('pribadi_id')->unsigned();
            $table->foreign('pribadi_id')->references('id')->on('pribadis')->onDelete('cascade');
        });


        Schema::table('saudaras', function (Blueprint $table) {
            $table->bigInteger('pribadi_id')->unsigned();
            $table->foreign('pribadi_id')->references('id')->on('pribadis')->onDelete('cascade');
        });

        Schema::table('pendidikans', function (Blueprint $table) {
            $table->bigInteger('pribadi_id')->unsigned();
            $table->foreign('pribadi_id')->references('id')->on('pribadis')->onDelete('cascade');
        });

        Schema::table('fisiks', function (Blueprint $table) {
            $table->bigInteger('pribadi_id')->unsigned();
            $table->foreign('pribadi_id')->references('id')->on('pribadis')->onDelete('cascade');
        });

        Schema::table('lampirans', function (Blueprint $table) {
            $table->bigInteger('pribadi_id')->unsigned();
            $table->foreign('pribadi_id')->references('id')->on('pribadis')->onDelete('cascade');
        });

        Schema::table('keterangans', function (Blueprint $table) {
            $table->bigInteger('pribadi_id')->unsigned();
            $table->foreign('pribadi_id')->references('id')->on('pribadis')->onDelete('cascade');
        });

        Schema::table('pidanas', function (Blueprint $table) {
            $table->bigInteger('pribadi_id')->unsigned();
            $table->foreign('pribadi_id')->references('id')->on('pribadis')->onDelete('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relation');
    }
}
