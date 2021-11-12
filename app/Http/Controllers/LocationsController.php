<?php

namespace App\Http\Controllers;

use App\Http\Resources\Location;
use App\Models\Locations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function show(Locations $locations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function edit(Locations $locations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Locations $locations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Locations $locations)
    {
        //
    }



      // read many 
      public function readMany(Request $request)
      {
          # code...
          return Locations::all();
      }
  
      public function readOne(Request $request)
      {
          # code...
          return Locations::find($request->id);
      }
  
      public function writeMany(Request $request)
      {
          # code...
      }
  
      public function writeOne(Request $request)
      {
          # code...
          $location = new Locations();
          $location->name = $request->name;
          $location->latitude = $request->latitude;
          $location->longitude = $request->longitude;
          $location->description = $request->description;
      }
  
      public function putMany(Request $request)
      {
          # code...
      }
  
      public function putOne(Request $request, $data)
      {
          # code...
          $res = DB::table('locations')
                    ->where('locations.id', '=', $request->id)
                    ->update($data);

            return $res;
      }
  
      public function deleteMany(Request $request)
      {
          # code...
      }
  
      public function deleteOne(Request $request)
      {
          # code...
          return Locations::find($request->id)->delete();
      }
}
