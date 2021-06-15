<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Peminjam;

class BookController extends Controller
{
    public function index() {
        $peminjams = Peminjam::all();
        return view('welcome', compact('peminjams'));
    }

    public function add(Request $request) {
        Book::create([
            'name' => $request->name,
            'author' => $request->author,
            'year' => $request->year
        ]);
        return back();
    }

    public function list(){
        $books = Book::all();
        return view('list', compact('books'));
    }

    public function edit($id) {
        $Book = Book::findOrFail($id);
        return view('edit', compact('Book'));
    }

    public function update($id, Request $request) {
        Book::findOrFail($id)->update([
            'name' => $request->name,
            'author' => $request->author,
            'year' => $request->year
        ]);
        return back();
    }

    public function delete($id) {
        Book::destroy($id);
        return back();
    }
}
