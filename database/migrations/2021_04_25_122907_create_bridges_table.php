<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBridgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bridges', function (Blueprint $table) {
            $table->id('bridge_id');

   //         $table->increments('id');

            $table->string('surveyor_name', 255);
            $table->string('surveyor_lastName', 255);
            $table->string('structure_name', 255);
            $table->string('structure_location', 255);
            $table->string('structure_number', 255);

            $table->integer('mileageMiles');
            $table->integer('mileageYards');

          //  $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bridges');
    }
}
