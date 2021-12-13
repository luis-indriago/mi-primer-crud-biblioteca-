<?php

namespace App\Http\Controllers;

use App\Models\Autore;
use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{
    public function index(){
        
        $libros = DB::table('libros')
                    ->join('autores', 'autores.id', '=', 'libros.autor_id')
                    ->select('libros.*', 'autores.nombre', 'autores.apellido', 'autores.deleted_at')
                    ->where('libros.deleted_at', '=', null)
                    ->get();
        return view('libros.index', compact('libros'));
    }

    public function show($id){
        
        $libro = Libro::find($id);
        
        if ($libro) {
            $autor = $libro->autor;
            $fullNameAutor = ($autor == null) ? 'Desconocido' : $autor->nombre . ' ' . $autor->apellido;
            
            return view('libros.show', compact('libro', 'fullNameAutor'));
        }else{
            return 'El libro no existe';
        }  
    }

    public function create(){
        $autores = Autore::all();
        return view('libros.create', compact('autores'));
    }

    public function store(Request $request){
        
        //validación de los datos
        $request->validate([
            'titulo' => 'required',
            'codigo' => 'required',
            'autor' => 'required',
            'ano_publicacion' => 'required',
            'ubicacion_librero' => 'required',
            'numero_copias' => 'required',
            'prologo' => 'required',
        ]);

        try{
            $libro = new Libro();
            $libro->titulo = $request->titulo;
            $libro->codigo = $request->codigo;
            $libro->autor_id = $request->autor;
            $libro->ano_publicacion = $request->ano_publicacion;
            $libro->ubicacion_librero = $request->ubicacion_librero;
            $libro->numero_copias = $request->numero_copias;
            $libro->prologo = $request->prologo;
            
            $libro->save();
        }catch(\Exception $ex) {
            return redirect()->back()->withErrors(['errors'=> 'Ocurrió un error al guardar el libro.']);
        }
        return redirect()->route('libro.index');
    }

    public function edit($id){
        $libro = Libro::find($id);
        $autores = Autore::all();
        return view('libros.edit', compact('libro', 'autores'));
    }

    public function update(Request $request, $id){
        //validación de los datos
        $request->validate([
            'titulo' => 'required',
            'codigo' => 'required',
            'ano_publicacion' => 'required',
            'ubicacion_librero' => 'required|max:50',
            'numero_copias' => 'required|min:1|max:10',
            'prologo' => 'required|max:200',
        ]);

        try{
            $libro = Libro::find($id);
            $libro->titulo = $request->titulo;
            $libro->codigo = $request->codigo;
            $libro->autor_id = $request->autor;
            $libro->ano_publicacion = $request->ano_publicacion;
            $libro->ubicacion_librero = $request->ubicacion_librero;
            $libro->numero_copias = $request->numero_copias;
            $libro->prologo = $request->prologo;

            $libro->save();
        }catch(\Exception $ex) {
            return redirect()->back()->withErrors(['errors'=> 'Ocurrió un error al modificar el libro.']);
        }

        return redirect()->route('libro.index');
    }

    public function destroy($id){
        $libro = Libro::find($id);
    
        $libro->delete();

        return redirect()->route('libro.index');
    }

}