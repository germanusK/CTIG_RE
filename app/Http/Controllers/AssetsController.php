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

      // read many 
      public function readMany(Request $request)
      {
          # code...
          return Assets::all();
        //   return AssetsResource::collection(Assets::all());
      }
  
      public function readOne(Request $request)
      {
          # code...
          return new AssetsResource($request);
      }
  
      public function writeMany(Request $request)
      {
          # code...
      }
  
      public function writeOne(Request $request)
      {
          # code...
          $asset = new Assets();
        //   assign fields

        $asset->name = $request->name;
        $asset->block_number = $request->block_number;
        $asset->status = $request->status;
        $asset->description = $request->description;
        $asset->category_id = $request->category_id;
        $asset->site_id = $request->site_id;
        $asset->location_id = $request->location_id;

        // save data.
        return $asset->save() ? ($asset) : null;
      }
  
      public function putMany(Request $request)
      {
          # code...
      }
  
      public function putOne(Request $request)
      {
          # code...
      }
  
      public function deleteMany(Request $request)
      {
          # code...
      }
  
      public function deleteOne(Request $request)
      {
          # code...
      }
}
