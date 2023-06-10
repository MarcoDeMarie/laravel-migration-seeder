<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('starting', 100);
            $table->string('ending', 100);
            $table->dateTime('departure', $precision = 4);
            $table->dateTime('arrivals', $precision = 4);
            $table->Integer('trainCode');
            $table->tinyInteger('wagon')->nullable();
            $table->boolean('inTime');
            $table->boolean('deleted');
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
        Schema::dropIfExists('trains');
    }
};
