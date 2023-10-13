<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('welcome', compact('movies'));
    }

    public function filmDetail($id)
    {
        $movie = Movie::findOrFail($id);
        return view('details', compact('movie'));
    }
}