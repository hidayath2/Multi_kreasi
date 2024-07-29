<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenispercetakansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenispercetakans', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id');
            $table->string('namabarang')->nullable();
            $table->string('hargasatuan')->nullable();
            $table->string('satuan')->nullable();
            $table->string('jumlahdipesan')->nullable();
            $table->timestamps();
            // $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenispercetakans');
    }
}
