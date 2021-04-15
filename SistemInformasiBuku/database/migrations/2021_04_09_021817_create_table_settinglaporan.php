<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSettinglaporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_settinglaporan', function (Blueprint $table) {
            $table->id();
            $table->string('id_setting');
            $table->string('nama_perusahaan');
            $table->string('alamat');
            $table->string('no_telepon');
            $table->string('web');
            $table->string('logo');
            $table->string('email');
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
        Schema::dropIfExists('table_settinglaporan');
    }
}
