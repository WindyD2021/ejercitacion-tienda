<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Mostrar lista de books
     */
    public function index(Request $request)
    {
        $query = Book::query();

        // Define los breadcrumbs
        $breadcrumbs = [
            ['url' => route('home'), 'title' => __('Start')],
            ['url' => route('book.index'), 'title' => __('Panini Book')], // Ruta actual
        ];

        if ($request->filled('collection')) {
            $query->where('collection', $request->input('collection'));
        }
        if ($request->filled('title')) {
            $query->where('title', $request->input('title'));
        }
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->input('min_price'));
        }
        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->input('max_price'));
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

        $books = $query->get();

        return view('books/index', compact('books', 'breadcrumbs'));
    }
    /**
     * Mostrar un Book
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);

        $breadcrumbs = [
            ['url' => route('home'), 'title' => __('Start')],
            ['url' => route('book.index'), 'title' => __('Panini Book')],
            ['url' => route('book.show', $book->id), 'title' => __($book->title)]
        ];

        return view('books/show', compact('book', 'breadcrumbs'));
    }
}
