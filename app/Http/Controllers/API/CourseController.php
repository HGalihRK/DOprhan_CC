<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\StoreCompetitionRequest;
use App\Http\Requests\UpdateCompetitionRequest;
use App\Http\Resources\CompetitionResource;
use App\Http\Resources\CourseResource;
use App\Models\Competition;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //return all course if id exist, 
        //return course by skill_id 
        //return course by tutor_id
        if ($request->id) {
            return ['result' => CourseResource::collection(Course::where('id', $request->id)->get())];
        }
        if ($request->skill_id && $request->tutor_id) {
            return ['result' => CourseResource::collection(Course::where('skill_id', $request->skill_id)->where('tutor_id', $request->tutor_id)->get())];
        }
        if ($request->skill_id) {
            return ['result' => CourseResource::collection(Course::where('skill_id', $request->skill_id)->get())];
        }
        if ($request->tutor_id) {
            return ['result' => CourseResource::collection(Course::where('tutor_id', $request->tutor_id)->get())];
        }
        return ['result' => CourseResource::collection(Course::all())];
    }
}
