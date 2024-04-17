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

}
