<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\DayResource;
use App\Models\Day;
use Illuminate\Http\Request;

class DayController extends Controller
{
    public function getDay(Request $request)
    {
        if ($request->id) {
            return ['result' => DayResource::collection(Day::where('id', $request->id)->get())];
        }
        return ['result' => DayResource::collection(Day::all())];
    }
}
