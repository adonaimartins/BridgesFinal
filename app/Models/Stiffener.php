<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stiffener extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'Stiffener'; //tableName
    protected $primaryKey = 'stiffener_id';
    protected $fillable =   [ 
                                'stiffener_number', 
                                'type', 
                            ]; //columnds

    public function bay()
    {
        return $this->belongsTo(Bay::class, "bay_id", "bay_id");
    }

}
