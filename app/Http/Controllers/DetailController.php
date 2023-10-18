<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class DetailController extends Controller
{
    public function index($id) 
    {
        $movie = Movie::getDetails($id);
        return view('page.detail', [
            'title' => $movie['title'],
            'active' => 'playing',
            'movie' => $movie,
        ]);
    }
}
