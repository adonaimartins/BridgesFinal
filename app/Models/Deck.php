<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'Decks'; //tableName
    protected $primaryKey = 'deck_id';
    //protected $fillable = [ 'deck_number']; //columnds


    public function girders()
    {
        return $this->hasMany(Girder::class, "deck_id", "deck_id");
    }


    public function bridge()
    {
        return $this->belongsTo(Bridge::class, "bridge_id", "bridge_id");
    }
}
        
