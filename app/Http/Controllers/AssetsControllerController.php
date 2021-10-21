<?php

namespace App\Http\Controllers;

use App\Http\Resources\AssetsResource;
use App\Models\Assets;
use Illuminate\Http\Request;

class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.property.dashboard_property');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\AssetsController  $assetsController
     * @return \Illuminate\Http\Response
     */
    public function show(AssetsController $assetsController)
    {
        //
        return new AssetsResource($assetsController);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssetsController  $assetsController
     * @return \Illuminate\Http\Response
     */
    public function edit(AssetsController $assetsController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AssetsController  $assetsController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssetsController $assetsController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssetsController  $assetsController
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssetsController $assetsController)
    {
        //
    }
}
