<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\TutorResource;
use App\Models\Course;
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
        if ($request->user_id) {
            return ['result' => TutorResource::collection(Tutor::where('user_id', $request->user_id)->get())];
        }
        // return tutor by skill id
        if ($request->skill_id) {
            $course = Course::where('skill_id', $request->skill_id)->pluck('tutor_id');
            return ['result' => TutorResource::collection(Tutor::whereIn('id', $course)->get())];
        }
        // return all tutor if id not exist
        return ['result' => TutorResource::collection(Tutor::all())];
    }
}
