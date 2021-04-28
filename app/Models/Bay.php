<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bay extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'Bays'; //tableName
    protected $primaryKey = 'bay_id';
    protected $fillable =   [ 
                                'bay_position', 
                                'length_mm', 
                                'thickness_mm', 
                                'length_inches', 
                                'thickness_inches', 
                                'preffered_unit' 
                            ]; //columnds

    public function girder()
    {
        return $this->belongsTo(Girder::class, "girder_id", "girder_id");
    }

    public function stiffeners()
    {
        return $this->hasMany(Stiffener::class, "stiffener_id", "stiffener_id");
    }

}
