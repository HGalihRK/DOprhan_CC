<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseBookingResource;
use App\Models\Course;
use App\Models\CourseBooking;
use App\Models\Orphanage;
use App\Models\Tutor;
use App\Models\User;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getAllCourseBooking = CourseBooking::findOrFail($id);
        return ['result' => new CourseBookingResource($getAllCourseBooking)];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getCourseBooking(Request $request){
        // id orphanage != user id
        if(!empty($request->orphanage_id)){
            if(!empty($request->tutor_id)){
                $getCourseFromTutor = Course::where('tutor_id', $request->tutorId)->pluck('id');

                $getCourseFromTutorAndOrphanage = CourseBooking::where('orphanage_id', $request->orphanage_id)->whereIn('course_id',$getCourseFromTutor)->get();

                return ['result' => CourseBookingResource::collection($getCourseFromTutorAndOrphanage)];

            } else if(empty($request->tutor_id)){
                $getUserFromOrphanageTable = Orphanage::findOrFail($request->orphanage_id)->user;
                $getAllCourseBookingFromOrphanage = $getUserFromOrphanageTable->orphanage->courseBookings;

                return ['result' => CourseBookingResource::collection($getAllCourseBookingFromOrphanage)];
            }
            
        } else if (!empty($request->tutor_id)){
            if(!empty($request->orphanage_id)){
                $getCourseFromTutor = Course::where('tutor_id', $request->tutorId)->pluck('id');
                $getCourseFromTutorAndOrphanage = CourseBooking::where('orphanage_id', $request->orphanage_id)->whereIn('course_id',$getCourseFromTutor)->get();

                return ['result' => CourseBookingResource::collection($getCourseFromTutorAndOrphanage)];
            } else if(empty($request->orphanage_id)){
                $getUserFromTutorTable = Tutor::findOrFail($request->tutor_id)->user;
                $getAllCourseBookingFromTutor = $getUserFromTutorTable->tutor->courseBookings;

                return ['result' => CourseBookingResource::collection($getAllCourseBookingFromTutor)];
            }
        } else {
            $getAllCourseBooking = CourseBooking::all();
            return ['result' => CourseBookingResource::collection($getAllCourseBooking)];
        }
        
    }


}
