<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
     public function index()
    {
        $friends = friends::orderBy('id', 'desc')->paginate(2);

        return view('friends.index', compact('friends'));
    }
    public function create()
    {
        return view('friends.create');
    }
    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'nama' => 'required|unique:friens|max:255',
            'no_hp' => 'required|numeric',
            'alamat' => 'required',
        ]);
        $friends = new friends;
 
        $friends->nama = $request->nama;
        $friends->no_hp = $request->no_hp;
        $friends->alamat = $request->alamat;
 
        $friends->save();

        return redirect('/');
    }
    public function show($id)
    {
        $friend = Friends::where('id', $id)->frist();
        return view('friends.show', ['friends'=> $friend]);
    }
    public function edit($id)
    {
        $friend = Friends::where('id', $id)->frist();
        return view('friends.edit', ['friend'=> $friend]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:friens|max:255',
            'no_hp' => 'required|numeric',
            'alamat' => 'required',
        ]);

        Friends::find($id)->update([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect('/');
    }
    public function destroy($id)
    {
        Friends::find($id)->delete();
        return redirect('/');
    }
}