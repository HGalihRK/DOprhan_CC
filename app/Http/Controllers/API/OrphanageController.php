<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrphanageResource;
use App\Models\Orphan;
use App\Models\Orphanage;
use Illuminate\Http\Request;

class OrphanageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return orphanage by id
        if ($request->id) {
            return ['result' => OrphanageResource::collection(Orphanage::where('id', $request->id)->get())];
        }
        // return orphanage by user id
        if ($request->user_id) {
            return ['result' => OrphanageResource::collection(Orphanage::where('user_id', $request->user_id)->get())];
        }
        // return orphanage by orphan id
        if ($request->orphan_id) {
            return ['result' => OrphanageResource::collection(Orphan::find($request->orphan_id)->orphanage->get())];
        }
        // return all orphanage if id not exist
        return ['result' => OrphanageResource::collection(Orphanage::all())];
    }
}
