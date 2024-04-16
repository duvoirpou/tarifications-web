<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
        return view('index');
    }

    public function tarifications() {
        return view('tarifications');
    }

    public function contact() {
        return view('contact');
    }
}
