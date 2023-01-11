<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relawan', function (Blueprint $table) {
            $table->id();

            $table->integer('nik');
            $table->string('nama');
            $table->string('domisili');
            $table->integer('nohp');
            $table->string('email');
            $table->string('status')->default('Belum di Acc');
            $table->string('image');

            
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
        Schema::dropIfExists('relawan');
    }
}
