<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class PageController extends Controller
{

    public function index()
    {
        // accedo al db
        $movies = Movie::all();
        // dd($movies);

        return view('home', compact('movies'));
    }
}
