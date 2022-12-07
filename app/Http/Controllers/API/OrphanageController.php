<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrphanageResource;
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
        // return all orphanage if id not exist
        return ['result' => OrphanageResource::collection(Orphanage::all())];
    }
}
