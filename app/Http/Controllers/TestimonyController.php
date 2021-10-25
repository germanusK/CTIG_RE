<?php

namespace App\Http\Controllers;

use App\Models\Testimonies;
use Illuminate\Http\Request;

class TestimonyController extends Controller
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
        return view('front-end.testimony');
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
}
