<?php

namespace App\Http\Controllers;

use App\Http\Resources\Site;
use App\Models\Sites;
use Illuminate\Http\Request;

class SitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.site.dashboard_site');
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
     * @param  \App\Models\Sites  $site
     * @return \Illuminate\Http\Response
     */
    public function show(Sites $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sites  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Sites $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sites  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sites $site)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sites  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sites $site)
    {
        //
    }




      // read many 
      public function readMany(Request $request)
      {
          # code...
          return Sites::all();
      }
  
      public function readOne(Request $request)
      {
          # code...
          return new Site($request);
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
