<?php

namespace App\Http\Controllers;

use App\Models\Sites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Nette\Utils\Json;

class PropertyController extends Controller
{
    //show view
    public function show()
    {;
        $trending = Http::get((string)(Config::get('global_vars.api_dashboard_routes.trending_sites')))->json();
        $sites = Http::get((string)(Config::get('global_vars.api_frontend_routes.shuffle_sites')))->json();
        
        for ($i = 0; $i < count($trending); $i++) {
            # code...
            // $sites[$i][] = json_decode($site);
            $trending[$i]['site_map'] = Config::get('global_vars.api_dashboard_routes.maps').'/'.$trending[$i]['site_map'];
        }

        for ($i = 0; $i < count($sites); $i++) {
            # code...
            // $sites[$i][] = json_decode($site);
            $sites[$i]['site_map'] = Config::get('global_vars.api_dashboard_routes.maps').'/'.$sites[$i]['site_map'];
        }
        return view('front-end.property', ['trending'=>$trending, 'sites'=>$sites]);
    }
}
