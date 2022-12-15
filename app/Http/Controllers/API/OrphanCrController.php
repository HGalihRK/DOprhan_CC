<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrphanCrResource;
use App\Models\OrphanCr;
use Illuminate\Http\Request;

class OrphanCrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->id) {
            return ['result' => OrphanCrResource::collection(OrphanCr::findOrFail('id', $request->id))];
        }
        if ($request->competition_recommendation_id && $request->orphan_id) {
            return ['result' => OrphanCrResource::collection(OrphanCr::where('competition_recommendation_id', $request->competition_recommendation_id)->where('orphan_id', $request->orphan_id)->get())];
        }
        if ($request->competition_recommendation_id) {
            return ['result' => OrphanCrResource::collection(OrphanCr::where('competition_recommendation_id', $request->competition_recommendation_id)->get())];
        }
        if ($request->orphan_id) {
            return ['result' => OrphanCrResource::collection(OrphanCr::where('orphan_id', $request->orphan_id)->get())];
        }

        return ['result' => OrphanCrResource::collection(OrphanCr::all())];
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
