<?php

use App\Models\Libro;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libro = new Libro();

        $libro->autor_id = 1;
        $libro->codigo = 'l-001';
        $libro->titulo = 'Clean code';
        $libro->ano_publicacion = '2002-08-22';
        $libro->ubicacion_librero = 'sección 3, estante nro 5';
        $libro->prologo = 'Cards include a few options for working with images. Choose from appending “image caps” at either end of a card, overlaying images with card content, or simply embedding the image in a card. Similar to headers and footers, cards can include top and bottom “image caps”—images at the top or bottom of a card.';
        $libro->numero_copias = 30;

        $libro->save();


        $libro2 = new Libro();

        $libro2->autor_id = 2;
        $libro2->codigo = 'l-002';
        $libro2->titulo = 'OOP Programming';
        $libro2->ano_publicacion = '2000-08-22';
        $libro2->ubicacion_librero = 'Sección 4, estante nro 1';
        $libro2->prologo = 'Similar to headers and footers, cards can include top and bottom “image caps”—images at the top or bottom of a card. Cards include a few options for working with images. Choose from appending “image caps” at either end of a card, overlaying images with card content, or simply embedding the image in a card.';
        $libro2->numero_copias = 50;

        $libro2->save();


        $libro3 = new Libro();

        $libro3->autor_id = 3;
        $libro3->codigo = 'l-003';
        $libro3->titulo = 'Ingles for beginers';
        $libro3->ano_publicacion = '2000-12-25';
        $libro3->ubicacion_librero = 'sección 10, estante nro 9';
        $libro3->prologo = "Using a combination of grid and utility classes, cards can be made horizontal in a mobile-friendly and responsive way. In the example below, we remove the grid gutters with .g-0 and use .col-md-* classes to make the card horizontal at the md breakpoint. Further adjustments may be needed depending on your card content. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.";
        $libro3->numero_copias = 100;

        $libro3->save();

        $libro4 = new Libro();

        $libro4->autor_id = 2;
        $libro4->codigo = 'l-004';
        $libro4->titulo = 'Ingles';
        $libro4->ano_publicacion = '2000-12-25';
        $libro4->ubicacion_librero = 'sección 10, estante nro 10';
        $libro4->prologo = "Using a combination of grid and utility classes, cards can be made horizontal in a mobile-friendly and responsive way. In the example below, we remove the grid gutters with .g-0 and use .col-md-* classes to make the card horizontal at the md breakpoint. Further adjustments may be needed depending on your card content. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.";
        $libro4->numero_copias = 200;

        $libro4->save();


        $libro5 = new Libro();

        $libro5->autor_id = 4;
        $libro5->codigo = 'l-005';
        $libro5->titulo = 'Frances';
        $libro5->ano_publicacion = '2000-12-25';
        $libro5->ubicacion_librero = 'sección 20, estante nro 10';
        $libro5->prologo = "Using a combination of grid and utility classes, cards can be made horizontal in a mobile-friendly and responsive way. In the example below, we remove the grid gutters with .g-0 and use .col-md-* classes to make the card horizontal at the md breakpoint. Further adjustments may be needed depending on your card content. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.";
        $libro5->numero_copias = 200;

        $libro5->save();


        $libro6 = new Libro();

        $libro6->autor_id = 1;
        $libro6->codigo = 'l-006';
        $libro6->titulo = 'Aleman';
        $libro6->ano_publicacion = '2000-12-25';
        $libro6->ubicacion_librero = 'sección 20, estante nro 9';
        $libro6->prologo = "Using a combination of grid and utility classes, cards can be made horizontal in a mobile-friendly and responsive way. In the example below, we remove the grid gutters with .g-0 and use .col-md-* classes to make the card horizontal at the md breakpoint. Further adjustments may be needed depending on your card content. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.";
        $libro6->numero_copias = 20;

        $libro6->save();


        $libro7 = new Libro();

        $libro7->autor_id = 3;
        $libro7->codigo = 'l-007';
        $libro7->titulo = 'Mandarin';
        $libro7->ano_publicacion = '2000-12-25';
        $libro7->ubicacion_librero = 'sección 20, estante nro 7';
        $libro7->prologo = "Using a combination of grid and utility classes, cards can be made horizontal in a mobile-friendly and responsive way. In the example below, we remove the grid gutters with .g-0 and use .col-md-* classes to make the card horizontal at the md breakpoint. Further adjustments may be needed depending on your card content. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.";
        $libro7->numero_copias = 20;

        $libro7->save();

        $libro8 = new Libro();

        $libro8->autor_id = 4;
        $libro8->codigo = 'l-008';
        $libro8->titulo = 'Español';
        $libro8->ano_publicacion = '2000-12-25';
        $libro8->ubicacion_librero = 'sección 20, estante nro 15';
        $libro8->prologo = "Using a combination of grid and utility classes, cards can be made horizontal in a mobile-friendly and responsive way. In the example below, we remove the grid gutters with .g-0 and use .col-md-* classes to make the card horizontal at the md breakpoint. Further adjustments may be needed depending on your card content. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.";
        $libro8->numero_copias = 25;

        $libro8->save();



        $libro9 = new Libro();

        $libro9->autor_id = 4;
        $libro9->codigo = 'l-009';
        $libro9->titulo = 'Latin';
        $libro9->ano_publicacion = '2000-12-25';
        $libro9->ubicacion_librero = 'sección 20, estante nro 12';
        $libro9->prologo = "Using a combination of grid and utility classes, cards can be made horizontal in a mobile-friendly and responsive way. In the example below, we remove the grid gutters with .g-0 and use .col-md-* classes to make the card horizontal at the md breakpoint. Further adjustments may be needed depending on your card content. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.";
        $libro9->numero_copias = 25;

        $libro9->save();
        

        $libro10 = new Libro();

        $libro10->autor_id = 2;
        $libro10->codigo = 'l-010';
        $libro10->titulo = 'Aprendiendo a leer';
        $libro10->ano_publicacion = '2000-12-25';
        $libro10->ubicacion_librero = 'sección 22, estante nro 15';
        $libro10->prologo = "Using of grid and utility classes, cards can be made horizontal in a mobile-friendly and responsive way. In the example below, we remove the grid gutters with .g-0 and use .col-md-* classes to make the card horizontal at the md breakpoint. Further adjustments may be needed depending on your card content. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.";
        $libro10->numero_copias = 40;

        $libro10->save();


        $libro11 = new Libro();

        $libro11->autor_id = 2;
        $libro11->codigo = 'l-010';
        $libro11->titulo = 'Aprendiendo ingles';
        $libro11->ano_publicacion = '2000-12-25';
        $libro11->ubicacion_librero = 'sección 22, estante nro 15';
        $libro11->prologo = "Using of grid and utility classes, cards can be made horizontal in a mobile-friendly and responsive way. In the example below, we remove the grid gutters with .g-0 and use .col-md-* classes to make the card horizontal at the md breakpoint. Further adjustments may be needed depending on your card content. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.";
        $libro11->numero_copias = 40;

        $libro11->save();

        
    }
}
