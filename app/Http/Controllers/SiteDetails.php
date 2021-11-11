<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class SiteDetails extends Controller
{
    //

    public function on_delete(Request $request)
    {
        # code...
        $site = Http::get(Config::get('global_vars.api_dashboard_routes.sites').'/'.$request->id);
        // echo $site;
        return view('dashboard.site.delete', ['site'=>$site]);
        
    }

    public function delete(Request $request)
    {
        # code...
        // echo Config::get('global_vars.api_dashboard_routes.sites').'/'.$request->id;
        $res = Http::delete(Config::get('global_vars.api_dashboard_routes.sites').'/'.$request->id)->json();
        return redirect('/dashboard/sites');
        if ($res == 1) {
            # code...
            echo "<script> alert('Operation successfully');</script>";
        }
        elseif ($res == 0) {
            # code...
            echo "<script> alert('Operation failed. Site not found');</script>";
        }
        
    }

    public function show_map(Request $request)
    {
        # code...
        return view('dashboard.site.map.site_map');
    }
}
