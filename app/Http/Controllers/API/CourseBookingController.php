<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseBookingResource;
use App\Models\Course;
use App\Models\CourseBooking;
use Illuminate\Http\Request;

class CourseBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function getCourseBooking(Request $request)
    {
        // id orphanage != user id
        if ($request->id) {
            return ['result' => CourseBookingResource::collection(CourseBooking::where('id', $request->id)->get())];
        }

        if ($request->tutor_id) {
            $getCourseFromTutor = Course::where('tutor_id', $request->tutor_id)->pluck('id');
        }

        if ($request->course_id && $request->orphanage_id) {
            return ['result' => CourseBookingResource::collection(CourseBooking::where('course_id', $request->course_id)
            ->where('orphanage_id', $request->orphanage_id)->get())];
        }
        if ($request->tutor_id && $request->orphanage_id) {
            return ['result' => CourseBookingResource::collection(CourseBooking::where('orphanage_id', $request->orphanage_id)
            ->whereIn('course_id', $getCourseFromTutor)->get())];
        }
        if ($request->course_id){
            return ['result' => CourseBookingResource::collection(CourseBooking::where('course_id', $request->course_id)->get())];
        }
        if ($request->orphanage_id) {
            return ['result' => CourseBookingResource::collection(CourseBooking::where('orphanage_id', $request->orphanage_id)->get())];
        }
        if ($request->tutor_id) {
            return ['result' => CourseBookingResource::collection(CourseBooking::whereIn('course_id', $getCourseFromTutor)->get())];
        }
        
        return ['result' => CourseBookingResource::collection(CourseBooking::all())];
        

    }
}
