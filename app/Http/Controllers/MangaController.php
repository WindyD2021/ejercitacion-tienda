<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga;

class MangaController extends Controller
{
    /**
     * Mostrar lista de mangas
     */
    public function index(Request $request)
    {
        //Esto es lo mismo que Manga::all();
        $query = Manga::query();

        // Define los breadcrumbs
        $breadcrumbs = [
            ['url' => route('home'), 'title' => __('Start')],
            ['url' => route('manga.index'), 'title' => __('Panini Manga')],
        ];

        /**
         * *****$request->filled('title'):
         * -$request: Este es un objeto de la clase Request que representa la solicitud HTTP que se está
         * procesando. Contiene todos los datos enviados por el cliente, como los parámetros de la URL 
         * y los datos del formulario.
         * -filled('title'): Este método verifica si el campo 'title' está presente en la solicitud y no
         * está vacío. Retorna true si el campo tiene un valor (es decir, si no está vacío o no es null),
         * y false si está vacío o no existe.
         */

        /**
         * *******$query->where('title', $request->input('title')):
         * --$query: Esta variable se supone que es una instancia de un constructor de consultas 
         * (Query Builder) que se ha creado previamente usando Manga::query(). Se está utilizando 
         * para construir una consulta SQL de manera dinámica.
         * --where('title', ...): Este método se utiliza para agregar una condición a la consulta. En 
         * este caso, se está diciendo que queremos que el campo title de la base de datos sea igual al
         * valor que se pasa en la solicitud.
         * --$request->input('title'): Aquí, estamos recuperando el valor del campo 'title' que se envió
         * en la solicitud. Este valor se usará para filtrar los registros de la tabla mangas.
         *
         * $query->where('nombre_columna', 'valor');
         * nombre_columna: El nombre del campo (atributo) en la base de datos que deseas comparar.
         * valor: El valor con el que deseas comparar ese campo.
         * Igualdad exacta: La condición que se evalúa en este caso es "si el valor en la columna es 
         * igual al valor especificado, entonces devuelve el registro".
         */

        if ($request->filled('collection')) {
            $query->where('collection', $request->input('collection'));
        }
        /**
         * "Si el campo 'title' está presente y tiene un valor en la solicitud (es decir, el usuario
         * ha proporcionado un título para filtrar), entonces agrega una condición a la consulta 
         * para que busque los registros en la tabla mangas donde el campo title sea igual al valor
         * proporcionado por el usuario."
         */
        if ($request->filled('title')) {
            $query->where('title', $request->input('title'));
        }
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->input('min_price'));
        }
        if ($request->filled('max_price')) {
            $query->where('price','<=', $request->input('max_price'));
        }
        if ($request->filled('year_publication')) {
            $query->where('year_publication', $request->input('year_publication'));
        }
        if ($request->filled('month_publication')) {
            $query->where('month_publication', $request->input('month_publication'));
        }
        if ($request->filled('author')) {
            $query->where('author', $request->input('author'));
        }

        $mangas = $query->get();

        return view('mangas/index', compact('mangas', 'breadcrumbs'));
    }
    /**
     * Mostrar un manga
     */
    public function show($id)
    {
        $manga = Manga::findOrFail($id);


        $breadcrumbs = [
            ['url' => route('home'), 'title' => __('Start')],
            ['url' => route('manga.index'), 'title' => __('Panini Manga')],
            ['url' => route('manga.show', $manga->id), 'title' => __($manga->title)]
        ];

        return view('mangas/show', compact('manga', 'breadcrumbs'));
    }
    /**
     * Crear un manga
     */
    public function create(Request $request)
    {
        return view('create');
    }
    /**
     * Procesar un manga
     */
    public function store(Request $request)
    {
        return view('index');
    }
    /**
     * Editar un manga
     */
    public function edit(Request $request)
    {
        return view('edit');
    }
    /**
     * Procesar manga editado
     */
    public function update(Request $request)
    {
        return view('show');
    }
    /**
     * Eliminar un manga
     */
    public function destroy(Request $request)
    {
        return view('index');
    }
}
