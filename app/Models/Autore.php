<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Autore extends Model
{
    use SoftDeletes;
    
    public function libros(){
        return $this->hasMany('App\Models\Libro');
    }
}
