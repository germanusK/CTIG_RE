<?php

namespace App\Http\Controllers;

use App\Models\Sites;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        //
        return view('dashboard.site.dashboard_site', ['sites'=>Http::get((string)(Config::get('global_vars.api_dashboard_routes.sites')))->json()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
        return view('dashboard.site.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        //
        // $site = ['site_name'=>$request->site_name, 'site_number'=>$request->site_number, 'site_map'=>$request->file('site_map')];
        // return redirect()->route(Config::get('global_vars.api_dashboard_routes.create_site'));

        
        $client = new Client();
        $response = $client->request('POST', Config::get('global_vars.api_dashboard_routes.create_site'), [
            'multipart'=>[
                [
                    'name'=>'site_name',
                    'contents'=>$request->site_name
                ],
                [
                    'name'=>'site_number',
                    'contents'=>$request->site_number
                ],
                [
                    'Content-type'=>'multipart/form-data',
                    'name'=>'site_map',
                    'contents'=>fopen($request->file('site_map'), 'r'),
                    'filename'=>time().(string)(rand(10000000000, 99999999999)).'.'.$request->file('site_map')->getClientOriginalExtension()
                ]
            ]
        ]);
        return redirect('dashboard/sites/create');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sites  $site
     */
    public function show(Sites $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sites  $site
     */
    public function edit(Request $request, $id)
    {
        //
        $site = Http::get(Config::get('global_vars.api_dashboard_routes.sites').'/'.$id);
        return view('dashboard.site.edit', ['site'=>$site]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sites  $site
     */
    public function update(Request $request, Sites $site)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sites  $site
     */
    public function destroy(Sites $site)
    {
        //
    }

    public function details(Request $request, $id)
    {
        # code...

        $site = Http::get(Config::get('global_vars.api_dashboard_routes.sites').'/'.$id);
        $map_path = Config::get('global_vars.api_dashboard_routes.maps').'/'.$site['site_map'];
        return view('dashboard.site.site_details', ['site'=>$site, 'map_path'=>$map_path]);
        
    }
}
