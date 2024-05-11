<?php

namespace App\Http\Controllers;

use App\Models\Functionality;
use App\Models\Type;
use App\Models\TypesFunctionality;
use Illuminate\Http\Request;

class TypesFunctionalityController extends Controller
{
    public function index()
    {
        $types = Type::all();
        $functionalities = Functionality::orderBy( 'name', 'asc' )->get();
        $types_functionalities = TypesFunctionality::with(["functionality","type"])->get();
        return view('admin.types-funtionalities.index', compact('types','functionalities', 'types_functionalities'));
    }

    public function create()
    {
        return view('types_functionality.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'type_id' => 'required',
            'functionality_id'=> 'required',
        ], [
            'type_id'=> 'Ce champ est obligatoire',
            'functionality_id'=> 'Ce champ est obligatoire',
        ]);
        $type_functionality = new TypesFunctionality();
        $type_functionality->type_id = $request->type_id;
        $type_functionality->functionality_id = $request->functionality_id;
        $query = $type_functionality->save();
        if ($query) {
            return back()->with('success', 'Type-Functionality ajouté avec succès');
        } else {
            return back()->with('error', 'Une erreur est survenue');
        }
    }
    public function edit($id)
    {
        $type_functionality = TypesFunctionality::find($id);
        return view('types_functionality.edit', compact('type_functionality'));
    }
    public function update(Request $request, $id)
    {}
    public function destroy($id)
    {
        $type_functionality = TypesFunctionality::find($id);
        $query = $type_functionality->delete();
        if ($query) {
            return back()->with('success', 'Type-Functionality supprimé avec succès');
        } else {
            return back()->with('error', 'Une erreur est survenue');
        }
    }
}
