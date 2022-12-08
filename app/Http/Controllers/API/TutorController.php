<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\TutorResource;
use App\Models\Tutor;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return tutor by id
        if ($request->id) {
            return ['result' => TutorResource::collection(Tutor::where('id', $request->id)->get())];
        }
        // return tutor by user id
        if ($request->userId) {
            return ['result' => TutorResource::collection(Tutor::where('user_id', $request->userId)->get())];
        }
        // return all tutor if id not exist
        return ['result' => TutorResource::collection(Tutor::all())];
    }
}
