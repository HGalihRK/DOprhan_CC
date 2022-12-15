<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompetitionRecommendationResource;
use App\Models\CompetitionRecommendation;
use Illuminate\Http\Request;

class CompetitionRecommendationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->id) {
            return ['result' => CompetitionRecommendationResource::collection(CompetitionRecommendation::where('id', $request->id)->get())];
        }
        if ($request->tutor_id && $request->orphanage_id) {
            return ['result' => CompetitionRecommendationResource::collection(CompetitionRecommendation::where('tutor_id', $request->tutor_id)->where('orphanage_id', $request->orphanage_id)->get())];
        }
        if ($request->tutor_id && $request->competition_id) {
            return ['result' => CompetitionRecommendationResource::collection(CompetitionRecommendation::where('tutor_id', $request->tutor_id)->where('competition_id', $request->competition_id)->get())];
        }
        if ($request->orphanage_id && $request->competition_id) {
            return ['result' => CompetitionRecommendationResource::collection(CompetitionRecommendation::where('orphanage_id', $request->orphanage_id)->where('competition_id', $request->competition_id)->get())];
        }
        if ($request->tutor_id) {
            return ['result' => CompetitionRecommendationResource::collection(CompetitionRecommendation::where('tutor_id', $request->tutor_id)->get())];
        }
        if ($request->orphanage_id) {
            return ['result' => CompetitionRecommendationResource::collection(CompetitionRecommendation::where('orphanage_id', $request->orphanage_id)->get())];
        }
        if ($request->competition_id) {
            return ['result' => CompetitionRecommendationResource::collection(CompetitionRecommendation::where('competition_id', $request->competition_id)->get())];
        }

        return ['result' => CompetitionRecommendationResource::collection(CompetitionRecommendation::all())];
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
}
