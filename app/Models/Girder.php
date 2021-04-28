<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Girder extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'Girders'; //tableName
    protected $primaryKey = 'girder_id';
    protected $fillable = [ 'girder_name', 'girder_direction', 'elevation']; //columnds





    public function bays()
    {
        return $this->hasMany(Bay::class, "bay_id", "bay_id");//
    }
        public function webs()//
    {
        return $this->hasMany(Web::class, "web_id", "web_id");//
    }
        public function angles()
    {
        return $this->hasMany(Angle::class, "angle_id", "angle_id");//
    }
        public function cps()
    {
        return $this->hasMany(Cp::class, "cp_id", "cp_id");
    }
        public function flanges()
    {
        return $this->hasMany(Flange::class, "flange_id", "flange_id");
    }



    public function deck()
    {
        return $this->belongsTo(Deck::class, "deck_id", "deck_id");
    }

}