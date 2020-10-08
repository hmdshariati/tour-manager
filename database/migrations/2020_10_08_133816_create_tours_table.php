<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type')->nullable();
            $table->string('code');
            $table->string('relation')->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->integer('travelers')->nullable();
            $table->string('regional')->nullable();//Basedata
            $table->unsignedBigInteger('starter_id')->nullable();
            $table->unsignedBigInteger('guide_id')->nullable();
            $table->unsignedBigInteger('actionboss_id')->nullable();
            $table->unsignedBigInteger('boss_id')->nullable();
            $table->text('services')->nullable();
            $table->string('driver')->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('tours');
    }
}
