<?php

namespace App\Http\Controllers;

use App\Http\Resources\Site;
use App\Models\Sites;
use DateTime;
use Illuminate\Support\Facades\Response;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

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


    public function get_site_map(Request $request, $fname)
    {
        # code...
        return response()->download(public_path().'/uploads/sites/'.$fname);
    }


      // read many 
      public function readMany(Request $request)
      {
          # code...
          return Sites::all();      }
  
      public function readOne(Request $request)
      {
          # code...
          return Sites::find($request->id);
      }
  
      public function writeMany(Request $request)
      {
          # code...
          $data[] = new Sites();
          foreach ($request->data as $key => $value) {
              # code...
              $data[$key] = [
                  'name'=>$value->name,
                  'site_number'=>$value->site_number,
                  'site_map'=>$value->site_map
              ];
              if(!$data[$key]->save())
                return false;
          }
          return true;
      }
  
      public function writeOne(Request $request)
      {
          # code...
          $site = new Sites();
          $site->name = $request->site_name;
          $site->site_number = $request->site_number;

          $file = $request->file('site_map');
          $extension = $file->getClientOriginalExtension();
          $file_name = time().rand(10000000000, 99999999999).'.'.$extension;
          $file->move(public_path('unploads/sites'), $file_name);
          $site->site_map = $file_name;

          $site->save();
          $site->site_map = 'uploads/sites/'.$site->site_map;
          return $site;
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
