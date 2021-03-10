<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblKaryawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_karyawan', function (Blueprint $table) {
            $table->id('id')->primary()->autoIncrement();
            $table->string('name_depan',255);
            $table->string('nama_belakang',255);
            $table->string('tag_line',255);
            $table->string('description',255);
            $table->string('foto',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_karyawan');
    }
}
