<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //relaciones
    public function tomos(){
        return $this->hasMany('App\Models\Tomo');
    }
}
