<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tour_id');
            $table->integer('sex');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('job');
            $table->string('passport_number');
            $table->date('passport_expire');
            $table->string('nationality');
            $table->date('birthday');
            $table->string('hometown');
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
        Schema::dropIfExists('travelers');
    }
}
