<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cps', function (Blueprint $table) {
            $table->id('cp_id');

            $table->unsignedBigInteger('girder_id');

            $table->foreign('girder_id')->references('girder_id')->on('Girders')->onDelete('cascade');

            $table->string('position', 255);

            $table->integer('location');
            $table->integer('stiffener_start');
            $table->integer('start_distance_mm');
            $table->double('start_distance_inches', 5, 2);
            $table->integer('stiffener_end');
            $table->integer('end_distance_mm');
            $table->double('end_distance_inches', 5, 2);
            $table->integer('width_mm');
            $table->integer('thickness_mm');
            $table->double('width_inches', 5, 2);
            $table->double('thickness_inches', 5, 2);

            $table->string('preffered_unit', 255);


        });
        DB::statement("ALTER TABLE cps ADD CONSTRAINT CHK_PREFFERED_UNIT CHECK (preffered_unit='MM' OR preffered_unit='INCHES')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cps');
    }
}
