<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.profile.dashboard_profile');
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
     * @param  \App\Models\ProfilesController  $profilesController
     * @return \Illuminate\Http\Response
     */
    public function show(ProfilesController $profilesController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfilesController  $profilesController
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfilesController $profilesController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProfilesController  $profilesController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProfilesController $profilesController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfilesController  $profilesController
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfilesController $profilesController)
    {
        //
    }
}
