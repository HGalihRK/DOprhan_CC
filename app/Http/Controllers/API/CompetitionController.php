<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\CompetitionResource;
use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->id) {
            return ['result' => CompetitionResource::collection(Competition::where('id', $request->id)->get())];
        }

        return ['result' => CompetitionResource::collection(Competition::all())];
    }
}
