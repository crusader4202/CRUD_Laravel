<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function addBook(Request $request) {
        Book::create([
            'name' => $request->book_name,
            'author' => $request->book_author,
            'year' => $request->book_year,
        ]);
        return redirect('/');
    }

}
