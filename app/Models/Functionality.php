<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Functionality extends Model
{
    use HasFactory;


    public function ranking(){
        return $this->belongsTo(Ranking::Class,'ranking_id','id');
    }

    public function functionalities()
    {
        return $this->hasMany(Functionality::class);
    }
}
