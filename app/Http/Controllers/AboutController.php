<?php

namespace App\Http\Controllers;

use App\Http\Resources\About as ResourcesAbout;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('front-end.about');
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
     * @param  \App\Models\About  $About
     * @return \Illuminate\Http\Response
     */
    public function show(About $About)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $About
     * @return \Illuminate\Http\Response
     */
    public function edit(About $About)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $About
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $About)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $About
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $About)
    {
        //
    }

  // read many 
    public function readMany(Request $request)
    {
        # code...
        return ResourcesAbout::collection(About::all());
    }

    public function readOne(Request $request)
    {
        # code...
        return About::find($request->id);
    }

    public function writeMany(Request $request)
    {
        # code...
        $arr = [];
        foreach ($request->data as $key => $about) {
            # code...
            $arr[$key]->key = $about->key;
            $arr[$key]->value = $about->value;
        }
    }

    public function writeOne(Request $request)
    {
        # code...
    return About::create(/* data */);
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
