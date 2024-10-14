<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Mostrar lista de comic
     */
    public function index(Request $request){

        $query = Comic::query();

        // Define los breadcrumbs
        $breadcrumbs = [
            ['url' => route('home'), 'title' => __('Start')],
            ['url' => route('comic.index'), 'title' => __('Panini Comic')], // Ruta actual
        ];

        if($request->filled('collection')){
            $query->where('collection', $request->input('collection'));
        }
        if($request->filled('title')){
            $query->where('title', $request->input('title'));
        }
        if($request->filled('min_price')){
            $query->where('price', '>=', $request->input('min_price'));
        }
        if($request->filled('max_price')){
            $query->where('price', '<=', $request->input('max_price'));
        }
        if($request->filled('year_publication')){
            $query->where('year_publication', $request->input('year_publication'));
        }
        if($request->filled('month_publication')){
            $query->where('month_publication', $request->input('month_publication'));
        }
        if($request->filled('author')){
            $query->where('author', $request->input('author'));
        }

        $comics = $query->get();

        return view('comics/index', compact('comics', 'breadcrumbs'));
    }
    /**
     * Mostrar un comic
     */
    public function show($id){
        $comic = Comic::findOrFail($id);

        $breadcrumbs = [
            ['url' => route('home'), 'title' => __('Start')],
            ['url' => route('comic.index'), 'title' => __('Panini Comic')],
            ['url' => route('comic.show', $comic->id), 'title' => __($comic->title)] 
        ];

        return view('comics/show', compact('comic', 'breadcrumbs'));
    }
    /**
     * Crear un comic
     */
    public function create(Request $request){
        return view('create');
    }
    /**
     * Procesar comic creado
     */
    public function store(Request $request){
        return view('create');
    }
    /**
     * Editar un comic
     */
    public function edit(Request $request){
        return view('edit');
    }
    /**
     * Procesar comic editado
     */
    public function update(Request $request){
        return view('index');
    }
    /**
     * Eliminar un comic
     */
    public function destroy(Request $request){
        return view('index');
    }
}
