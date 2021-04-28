<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flanges', function (Blueprint $table) {
            $table->id('flange_id');
            $table->foreign('girder_id')->references('girder_id')->on('Girders')->onDelete('cascade');

            $table->string('position', 255);
            $table->integer('width_mm');
            $table->integer('thickness_mm');
 
            $table->double('width_inches', 5, 2);
            $table->double('thickness_inches', 5, 2);
            $table->string('preffered_unit', 255);

        });
        DB::statement('ALTER TABLE girders ADD CONSTRAINT CHK_PREFFERED_UNIT CHECK (preffered_unit='MM' OR preffered_unit='INCHES')');
        DB::statement('ALTER TABLE girders ADD CONSTRAINT CHK_POSITION CHECK (position='TOP' OR position='BOTTOM')');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flanges');
    }
}