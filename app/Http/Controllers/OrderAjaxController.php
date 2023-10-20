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

    public function theaters(Request $request)
    {
        $theaters = Movie::getTheaters($request->city_id)[$request->type];
        return $theaters;
    }

    public function schedules(Request $request)
    {
        $schedules = Movie::getSchedules($request->theater);
        return $schedules;
    }
}
