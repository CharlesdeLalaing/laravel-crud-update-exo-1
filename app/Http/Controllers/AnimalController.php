<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view('welcome', compact('animals'));
    }

    public function create()
    {
        return view('pages.createAnimal');
    }

    public function store(Request $request)
    {
        $store = new Animal;
        $store->race = $request->race;
        $store->genre = $request->genre;
        $store->age = $request->age;

        $store->save();
        return redirect('/');
    }

    public function show($id)
    {
        $show = Animal::find($id);
        return view('pages.showAnimal', compact('show'));
    }

    public function edit($id)
    {
        $edit = Animal::find($id);
        return view('pages.editAnimal', compact('edit'));
    }

    public function update($id, Request $request)
    {
        $update = Animal::find($id);

        $update->race = $request->race;
        $update->genre = $request->genre;
        $update->age = $request->age;

        $update->save();
        return redirect('/animals/' . $id . '/show');
    }

    public function destroy($id)
    {
        $destroy = Animal::find($id);
        $destroy->delete();
        return redirect('/');
    }
}
