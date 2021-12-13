<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autore;

class DatatableController extends Controller
{
    public function autor(){
        $autores = Autore::all();

        return json_encode($autores);
    }
}
