<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_abilities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('content_id')->unsigned();
            $table->bigInteger('ability_id')->unsigned();
            $table->timestamps();
            $table->foreign('content_id')->references('id')->on('contents')->onDelete('cascade');
            $table->foreign('ability_id')->references('id')->on('abilities')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_abilities');
    }
}
