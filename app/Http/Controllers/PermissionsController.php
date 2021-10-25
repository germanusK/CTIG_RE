<?php

namespace App\Http\Controllers;

use App\Http\Resources\Permission;
use App\Models\permissions;
use Illuminate\Http\Request;

class PermissionsController extends Controller
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
     * @param  \App\Models\permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function show(permissions $permissions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function edit(permissions $permissions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, permissions $permissions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function destroy(permissions $permissions)
    {
        //
    }



      // read many 
      public function readMany(Request $request)
      {
          # code...
          return Permission::collection(permissions::all());
      }
  
      public function readOne(Request $request)
      {
          # code...
          return new Permission($request);
      }
  
      public function writeMany(Request $request)
      {
          # code...
      }
  
      public function writeOne(Request $request)
      {
          # code...
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
