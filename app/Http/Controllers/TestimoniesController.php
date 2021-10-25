<?php

namespace App\Http\Controllers;

use App\Http\Resources\Testimony;
use App\Models\Testimonies;
use Illuminate\Http\Request;

class TestimoniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('front-end.testimony');
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
     * @param  \App\Models\Testimonies  $testimonies
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonies $testimonies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonies  $testimonies
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonies $testimonies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonies  $testimonies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonies $testimonies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonies  $testimonies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonies $testimonies)
    {
        //
    }




      // read many 
      public function readMany(Request $request)
      {
          # code...
          return Testimony::collection(Testimonies::all());
      }
  
      public function readOne(Request $request)
      {
          # code...
          return new Testimony($request);
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
