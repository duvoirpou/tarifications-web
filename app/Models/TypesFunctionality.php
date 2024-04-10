<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypesFunctionality extends Model
{
    use HasFactory;
    protected $table = "types_functionalities"; // Table pivot
    public function functionality(){
        return $this->belongsTo(Functionality::class, 'functionality_id', 'id');
    }

    public function type(){
        return $this->belongsTo(Type::Class,'type_id','id');
    }
}
