<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateBaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bays', function (Blueprint $table) {
            $table->id('bay_id');
            $table->unsignedBigInteger('girder_id');
            $table->foreign('girder_id')->references('girder_id')->on('girders')->onDelete('cascade');

            $table->string('bay_position', 255);
            $table->integer('length_mm')->nullable();
            $table->integer('thickness_mm')->nullable();
            $table->double('length_inches', 5, 2)->nullable();
            $table->double('thickness_inches', 5, 2)->nullable();
            $table->string('preffered_unit', 255);
        });

        DB::statement("ALTER TABLE bays ADD CONSTRAINT CHK_PREFFERED_UNIT CHECK (preffered_unit='MM' OR preffered_unit='INCHES')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bays');
    }
}