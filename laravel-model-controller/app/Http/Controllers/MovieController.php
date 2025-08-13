<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function movie() {
        $movie = Movie::all();

        dd($movie);


        return view("movie", compact('movie'));

    }
}
