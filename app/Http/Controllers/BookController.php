<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function add(Request $request) {
        Book::create([
            'name' => $request->name,
            'author' => $request->author,
            'year' => $request->year
        ]);
        return redirect('/');
    }

}
