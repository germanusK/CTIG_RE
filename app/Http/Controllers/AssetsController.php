<?php

namespace App\Http\Controllers;

use App\Http\Resources\AssetsResource;
use App\Models\Assets;
use Illuminate\Http\Request;
use App\Http\Services\DashboardService as Service;
use Illuminate\Support\Facades\Http;

class AssetsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view(
            'dashboard.property.dashboard_property',
            ['data'=>Http::get('http://localhost:8001/api/dashboard/assets')->json()]
        );
    }

   
    public function create()
    {
        $_data = [
            'categories' => Http::get('http://localhost:8001/api/dashboard/categories')->json(),
            'sites' => Http::get('http://localhost:8001/api/dashboard/sites')->json(),
            'locations' => Http::get('http://localhost:8001/api/dashboard/locations')->json()
            ];
        return view('dashboard.property.create', ['_data'=>$_data]);
    }

    public function store(Request $request)
    {
        $asset = new Assets();
        $asset->name = $request->name;
        $asset->block_number = $request->block_number;
        $asset->status = $request->status;
        $asset->description = $request->description;
        $asset->category_id = $request->category_id;
        $asset->site_id = $request->site_id;
        $asset->location_id = $request->location_id;
        
        $response = Http::post('http://localhost:8001/api/dashboard/assets/one', $asset);
        if($response == null){
            echo '<script>'
                .'alert("Failure saving property. Please check your information and try again")'
                .'</script>'; 
            
            $_data = [
                'categories' => Http::get('http://localhost:8001/api/dashboard/categories')->json(),
                'sites' => Http::get('http://localhost:8001/api/dashboard/sites')->json(),
                'locations' => Http::get('http://localhost:8001/api/dashboard/locations')->json()
                ];
            return view('dashboard.property.create', ['_data'=>$_data]);
        }
        else{
            $_data = [
                'related' => Http::get('http://localhost:8001/api/dashboard/assets')->json(),
                'trending' => Http::get('http://localhost:8001/api/dashboard/assets')->json(),
                ];
            return view('dashboard.property.details', ['data'=>$_data, 'asset'=>$response]);
        }
    }

}
