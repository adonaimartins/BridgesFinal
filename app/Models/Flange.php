<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flange extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'Flanges'; //tableName
    protected $primaryKey = 'flange_id';
    protected $fillable =   [ 
                                'position', 
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

