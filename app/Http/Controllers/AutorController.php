<?php

namespace App\Http\Controllers;

use App\Models\Autore;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index(){

        $autores = Autore::all();
        return view('autores.index', compact('autores'));
    }

    public function show($id){

        $autor = Autore::find($id);
        return view('autores.show', compact('autor'));
    }

    public function create(){
        return view('autores.create');
    }

    public function store(Request $request){
        //validación de los datos
        $request->validate([
            'nombre' => 'required|min:2|max:40',
            'apellido' => 'required|min:2|max:50',
            'edad' => 'required|min:1|max:3',
            'direccion' => 'required|max:150',
            'telefono' => 'required|min:5|max:11',
        ]);
        try{
            $autor = new Autore();
            $autor->nombre = $request->nombre;
            $autor->apellido = $request->apellido;
            $autor->edad = $request->edad;
            $autor->direccion = $request->direccion;
            $autor->telefono = $request->telefono;
            $autor->save();
        } catch(\Exception $ex) {
            return redirect()->back()->withErrors(['errors'=> 'Ocurrió un error al guardar el autor.']);
        }

        return redirect()->route('autor.index');
    }
    
   

    public function edit($id){
        $autor = Autore::find($id);
        return view('autores.edit', compact('autor'));
    }

    public function update(Request $request, $id){
       
        //validación de los datos
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'edad' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
        ]);

        try{
            $autor = Autore::find($id);
            $autor->nombre = $request->nombre;
            $autor->apellido = $request->apellido;
            $autor->edad = $request->edad;
            $autor->direccion = $request->direccion;
            $autor->telefono = $request->telefono;

            $autor->save();

        } catch(\Exception $ex) {
            return redirect()->back()->withErrors(['errors'=> 'Ocurrió un error al modificar el autor.']);
        }
        return redirect()->route('autor.index');
    }

    public function destroy($id){

        $autor = Autore::find($id);

        $autor->delete();

        return redirect()->route('autor.index');
    }
}
