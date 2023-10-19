<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class OrderAjaxController extends Controller
{
    public function cities(Request $request)
    {
        $type = Movie::getTheaters($request->cityid)->keys(0);
        return $type;
    }
}
