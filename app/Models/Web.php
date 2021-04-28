<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Web extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'Webs'; //tableName
    protected $primaryKey = 'web_id';
    protected $fillable =  [ 
                                'length_mm', //
                                'height_mm', 
                                'width_mm', //
                                'thickness_mm', 
                                'length_inches', //
                                'height_inches', 
                                'width_inches', //
                                'thickness_inches', 
                                'preffered_unit' 
                            ]; //columnds

    public function girder()
    {
        return $this->belongsTo(Girder::class, "girder_id", "girder_id");
    }
}
