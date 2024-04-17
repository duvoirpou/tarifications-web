<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name'=> 'Ce champ est obligatoire',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $query = $category->save();

        if ($query) {
            return back()->with('success', 'Category created successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('category.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }
}
