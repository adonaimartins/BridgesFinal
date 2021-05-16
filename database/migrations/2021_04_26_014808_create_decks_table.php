<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decks', function (Blueprint $table) 
            {
                $table->id('deck_id');
                $table->unsignedBigInteger('bridge_id');
                $table->integer('deck_number');
                $table->foreign('bridge_id')->references('bridge_id')->on('bridges')->onDelete('cascade');

            }

        );
            //this line has some SQL syntax issues
            //DB::statement("FOREIGN KEY (bridge_id) REFERENCES Bridges(bridge_id) ON DELETE CASCADE");
            


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('decks');
    }
}
