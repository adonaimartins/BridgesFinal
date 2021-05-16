<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
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
            $table->unsignedBigInteger('girder_id');
            $table->foreign('girder_id')->references('girder_id')->on('girders')->onDelete('cascade');

            $table->integer('length_mm')->nullable();
            $table->integer('height_mm')->nullable();
            $table->integer('width_mm')->nullable();
            $table->integer('thickness_mm')->nullable();

            $table->double('length_inches', 5, 2)->nullable();
            $table->double('height_inches', 5, 2)->nullable();
            $table->double('width_inches', 5, 2)->nullable();
            $table->double('thickness_inches', 5, 2)->nullable();

            $table->string('preffered_unit', 255);

        });

        DB::statement("ALTER TABLE webs ADD CONSTRAINT CHK_PREFFERED_UNIT CHECK (preffered_unit='MM' OR preffered_unit='INCHES')");
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
