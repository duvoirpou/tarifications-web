<?php

namespace App\Http\Controllers;

use App\Models\Functionality;
use App\Models\Ranking;
use App\Models\TypesFunctionality;
use Illuminate\Http\Request;

class FunctionalityController extends Controller
{
    public function index() {
        $rankings = Ranking::all();
        $functionalities = Functionality::all();
        return view('admin.functionalities.index', compact('functionalities', 'rankings'));
        //return view('index', compact('datas'));
    }
    public function create() {
        return view('');
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:functionalities',
            'description'=> 'required',
            'ranking_id'=> 'required',
        ], [
            'name'=> 'Ce champ est obligatoire',
            'name.unique'=> 'Ce nom existe déjà',
            'description'=> 'Ce champ est obligatoire',
            'ranking_id'=> 'Ce champ est obligatoire',
        ]);
        $functionalities = new Functionality();
        $functionalities->name = $request->name;
        $functionalities->description = $request->description;
        $functionalities->ranking_id = $request->ranking_id;
        $query = $functionalities->save();
        if($query) {
            return back()->with('success', 'Fonctionnalité ajoutée avec succès');
        } else {
            return back()->with('fail', 'Une erreur s\'est produite');
        }
    }
}
