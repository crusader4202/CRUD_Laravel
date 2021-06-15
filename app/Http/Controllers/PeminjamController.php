<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjam;

class PeminjamController extends Controller
{

    public function index(){
        $peminjams = Peminjam::all();
        return view('peminjam.list',compact('peminjams'));
    }
    
    public function insert(){
        return view('peminjam.welcome');
    }

    public function add(Request $request) {
        Peminjam::create([
            'name' => $request->name,
            'NIM' => $request->NIM,
            'employee' => $request->employee
        ]);
        return back();
    }

}
