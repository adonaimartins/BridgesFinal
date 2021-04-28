<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cp extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'CPs'; //tableName
    protected $primaryKey = 'cp_id';
    protected $fillable =   [ 
                                'position', 
                                'location', 
                                'stiffener_start', 
                                'start_distance_mm', 
                                'start_distance_inches', 
                                'stiffener_end', 
                                'end_distance_mm', 
                                'end_distance_inches', 
                                'width_mm', 
                                'thickness_mm', 
                                'width_inches', 
                                'thickness_inches',
                                'preffered_unit' 
                            ]; //columnds

    public function girder()
    {
        return $this->belongsTo(Girder::class, "girder_id", "girder_id");
    }

}
