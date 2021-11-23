<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use SebastianBergmann\Environment\Console;
use Symfony\Component\Mime\Part\Multipart\FormDataPart;

class PropertyDetailsController extends Controller
{
    //show view
    public function show(Request $request)
    {
        $data = Http::get((string)(Config::get('global_vars.api_frontend_routes.sites').'/'.$request->id))->json();
        isset($data['site_map']) ? $data['site_map'] = Config::get('global_vars.api_dashboard_routes.maps').'/'.$data['site_map'] : null;
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
            'email'=>$request->email,
            'id'=>$request->id
        ];
        return view('front-end.appointment02', ['data'=>$aptData]);
    }
    public  function trigger_save_visit(Request $request)
    {
        # code...
        $response = Http::post(
            (string)(Config::get('global_vars.api_frontend_routes.create_appointment')),
            [
                'client_name'=>$request->client_name,
                'contact'=>$request->contact,
                'email'=>$request->email,
                'set_time'=>$request->schedule_time,
                'site_id'=>$request->id
            ]
        );
        return $response;
    }
}
