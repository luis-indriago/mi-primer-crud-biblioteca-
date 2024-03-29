<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Libro extends Model
{
    use SoftDeletes;

    public function autor(){
        return $this->belongsTo('App\Models\Autore');
    }
}
