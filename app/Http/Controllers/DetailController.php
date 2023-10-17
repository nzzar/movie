<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class DetailController extends Controller
{
    public function index($id) {
        return $movie = Movie::getDetails($id);
    }
}
