<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show_home()
    {
        # code...
        $latest = Http::get((string)(Config::get('global_vars.api_dashboard_routes.trending_sites')))->json();
        for ($i = 0; $i < count($latest); $i++) {
            # code...
            $latest[$i]['site_map'] = (string)(Config::get('global_vars.api_dashboard_routes.maps')).'/'.$latest[$i]['site_map'];
        }
        return view('front-end.welcome', ['latest'=>$latest]);
    }

}