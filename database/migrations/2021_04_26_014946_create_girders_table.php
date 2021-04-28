<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGirdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('girders', function (Blueprint $table) {
            $table->id('girder_id');
            $table->foreign('deck_id')->references('deck_id')->on('Decks')->onDelete('cascade');

            $table->string('girder_name', 255);
            $table->string('girder_direction', 255);
            $table->string('elevation', 255);
        });
        
        DB::statement('ALTER TABLE girders ADD CONSTRAINT CHK_Elevation CHECK (elevation='INTERNALFACE' OR elevation='EXTERNALFACE');');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('girders');
    }
}
