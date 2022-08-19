<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayananProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan_programs', function (Blueprint $table) {
            $table->id();
            $table->integer('id_layanan');
            $table->string('nama');
            $table->longText('desc')->nullable();
            $table->string('foto')->nullable();
            $table->string('link_tombol')->nullable();
            $table->string('nama_tombol')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('layanan_programs');
    }
}
