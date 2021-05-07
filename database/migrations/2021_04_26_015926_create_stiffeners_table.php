<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStiffenersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stiffeners', function (Blueprint $table) {
            $table->id('stiffener_id');
            $table->unsignedBigInteger('bay_id');
            $table->foreign('bay_id')->references('bay_id')->on('Bays')->onDelete('cascade');
            $table->integer('stiffener_number');
            $table->integer('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stiffeners');
    }
}
