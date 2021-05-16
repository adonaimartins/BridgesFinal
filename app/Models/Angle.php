<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angle extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'Angles'; //tableName
    protected $primaryKey = 'angle_id';
    protected $fillable = [
                            'position', 
                            'length_mm', 
                            'height_mm', 
                            'width_mm', 
                            'thickness_mm', 
                            'length_inches', 
                            'height_inches', 
                            'width_inches', 
                            'thickness_inches', 
                            'preffered_unit'
                            ]; //columns

     public function girder()
     {
         return $this->belongsTo(Girder::class, "girder_id", "girder_id");
     }

}
