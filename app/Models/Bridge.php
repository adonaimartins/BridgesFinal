<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bridge extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'Bridges'; //tableName
    protected $primaryKey = 'bridge_id';
    protected $fillable = [ 'surveyor_name', 'surveyor_lastName', 'structure_name', 'structure_location', 'structure_number', 'mileageMiles', 'mileageYards' ]; //columns


    public function decks()
    {
        return $this->hasMany(Deck::class, "bridge_id", "bridge_id");
    }






    
    //$decks = Bridge::find(1)->comments; this is to find the children. finds all data

    //accessing the data
    /*
    $decks = Bridge::find(1)->comments;

	foreach ($comments as $comment) {
    //
	}
	*/

	/*
	$comment = Post::find(1)->comments()
                    ->where('title', 'foo')
                    ->first(); 
	


	 */


	/*
	 Like the hasOne method, you may also override the foreign and local keys by passing additional arguments to the hasMany method:


	return $this->hasMany(Comment::class, 'foreign_key');

	return $this->hasMany(Comment::class, 'foreign_key', 'local_key');


	 */

}
