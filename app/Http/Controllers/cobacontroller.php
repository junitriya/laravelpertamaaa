<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
     public function index()
    {
        $friends = friends::paginate(2);

        return view('index', compact('friends'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        // Validate the request...
 
        $friends = new friends;
 
        $friends->nama = $request->nama;
        $friends->no_hp = $request->no_hp;
        $friends->alamat = $request->alamat;
 
        $friends->save();
    }
}