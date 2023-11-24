<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class PageController extends Controller
{
    public function index(){

        $comics = Comic::all();

        return view('home', compact('comics'));
    }
}
