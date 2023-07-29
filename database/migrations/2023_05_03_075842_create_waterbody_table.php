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
        Schema::create('waterbody', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('no_station');
            $table->string('location');
            $table->string('city');
            $table->string('province');
            $table->string('region');
            $table->string('program');
            $table->string('classification');
            $table->date('date_classification');
            $table->string('class_reference');
            $table->string('background');
            $table->string('status');
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
        Schema::dropIfExists('waterbody');
    }
};
