<?php

namespace App\Http\Controllers;

use App\Models\TypesFunctionality;
use Illuminate\Http\Request;

class FunctionalityController extends Controller
{
    public function index() {
        $datas = TypesFunctionality::all();
        return view('index', compact('datas'));
    }
}
