<?php

use App\Models\Autore;
use Illuminate\Database\Seeder;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autor = new Autore();

        $autor->nombre = 'Luis';
        $autor->apellido = 'Indriago';
        $autor->edad = '20';
        $autor->direccion = 'Guayacan, Carúpano, edo-sucre';
        $autor->telefono = '04121139089';

        $autor->save();


        $autor2 = new Autore();

        $autor2->nombre = 'Alfonso';
        $autor2->apellido = 'Guzman';
        $autor2->edad = '25';
        $autor2->direccion = 'charallave, Carúpano, edo-sucre';
        $autor2->telefono = '04121234342';

        $autor2->save();


        $autor3 = new Autore();

        $autor3->nombre = 'Daniel';
        $autor3->apellido = 'Ledezma';
        $autor3->edad = '17';
        $autor3->direccion = 'San martin, Carúpano, edo-sucre';
        $autor3->telefono = '04140821139';

        $autor3->save();

        $autor4 = new Autore();

        $autor4->nombre = 'Maria';
        $autor4->apellido = 'Farias';
        $autor4->edad = '23';
        $autor4->direccion = 'Carallave, Carúpano, edo-sucre';
        $autor4->telefono = '04140234139';

        $autor4->save();
    }
}
