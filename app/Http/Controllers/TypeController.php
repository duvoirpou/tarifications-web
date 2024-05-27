<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        $categories = Category::all();
        return view('admin.types.index', compact('types', 'categories'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:types',
            'category_id'=> 'required',
            'description'=> 'required',
            'price'=> 'required',
        ], [
            'name'=> 'Ce champ est obligatoire',
            'name.unique'=> 'Ce nom existe déjà',
            'category_id'=> 'Ce champ est obligatoire',
            'description'=> 'Ce champ est obligatoire',
            'price'=> 'Ce champ est obligatoire',
        ]);
        $type = new Type();
        $type->category_id = $request->category_id;
        $type->name = $request->name;
        $type->description = $request->description;
        $type->price = $request->price;
        $query = $type->save();
        if($query) {
            return back()->with('success', 'Type ajouté avec succès');
        } else {
            return back()->with('fail', 'Une erreur s\'est produite');
        }
    }

}
