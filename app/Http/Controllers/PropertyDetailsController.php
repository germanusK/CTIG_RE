<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class PropertyDetailsController extends Controller
{
    //show view
    public function show(Request $request)
    {
        $data = Http::get((string)(Config::get('global_vars.api_frontend_routes.sites').'/'.$request->id))->json();
        $data['site_map'] = Config::get('global_vars.api_dashboard_routes.maps').'/'.$data['site_map'];
        return view('front-end.propertyDetails', ['data'=>$data]);
    }

    public function trigger_visit(Request $request)
    {
        # code...
        $data = ['id'=>$request->id];

        return view('front-end.appointment01', ['data'=>$data]);
    }
    public function trigger_visit_payment(Request $request)
    {
        # code...
        $aptData = [
            'name'=>$request->client_name,
            'contact'=>$request->contact,
            'set_date'=>$request->schedule_time,
            'id'=>$request->id
        ];
        return view('front-end.appointment02', ['data'=>$aptData]);
    }
}
