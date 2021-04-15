<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePengguna extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pengguna', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_telepon');
            $table->string('status');
            $table->string('username');
            $table->string('password');
            $table->string('akses');
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
        Schema::dropIfExists('table_pengguna');
    }
}
