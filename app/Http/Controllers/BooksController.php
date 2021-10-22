<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index')
            ->with('books', $books);
    }

    public function show(Book $book)
    {
        return view('books.show')
            ->with(compact('book'));
    }
}
