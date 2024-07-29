<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            // $table->string('name')->unique()->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            // $table->date('tanggallahir')->nullable(); 
            $table->string('tanggallahir')->nullable(); 
            $table->string('alamat')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('notelpon')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->unique()->nullable();
            // $table->string('password')->nullable();
            $table->enum('role', ['admin','pelanggan'])->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
