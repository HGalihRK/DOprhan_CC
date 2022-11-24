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
      //return course by skillId 
      //return course by tutorId
        if($request->id){
            return ['result' => CourseResource::collection(Course::where('id', $request->id)->get())];
        }
        if($request->skillId && $request->tutorId){
            return ['result' => CourseResource::collection(Course::where('skill_id', $request->skillId)->where('tutor_id', $request->tutorId)->get())];
        }
        if($request->skillId){
            return ['result' => CourseResource::collection(Course::where('skill_id', $request->skillId)->get())];
        }
        if($request->tutorId){
            return ['result' => CourseResource::collection(Course::where('tutor_id', $request->tutorId)->get())];
        }
        return ['result' => CourseResource::collection(Course::all())];
    }
}
