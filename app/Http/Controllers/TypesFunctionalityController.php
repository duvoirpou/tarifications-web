<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypesFunctionalityController extends Controller
{
    public function index()
    {
        return view('types_functionality.index');
    }

    public function create()
    {
        return view('types_functionality.create');

    }

    public function store(Request $request)
    {
        //
    }
}
