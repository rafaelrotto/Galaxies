<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galaxy extends Model
{
    use HasFactory;

    protected $table = "galaxies";

    protected $fillable = [
        'user_id',
        'name',
        'dimension',
        'number_of_solar_systems',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
