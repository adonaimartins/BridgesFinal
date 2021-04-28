<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webs', function (Blueprint $table) {
            $table->id('web_id');
            $table->foreign('girder_id')->references('girder_id')->on('Girders')->onDelete('cascade');

            $table->integer('length_mm');
            $table->integer('height_mm');
            $table->integer('width_mm');
            $table->integer('thickness_mm');

            $table->double('length_inches', 5, 2);
            $table->double('height_inches', 5, 2);
            $table->double('width_inches', 5, 2);
            $table->double('thickness_inches', 5, 2);

            $table->string('preffered_unit', 255);

        });

        DB::statement('ALTER TABLE girders ADD CONSTRAINT CHK_PREFFERED_UNIT CHECK (preffered_unit='MM' OR preffered_unit='INCHES')');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webs');
    }
}
