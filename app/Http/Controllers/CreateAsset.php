<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CreateAsset extends Controller
{
    //

    public function create()
    {
        $data = [];
        $data['categories'] = Http::get('http://localhost:8001/api/dashboard/categories')->json();
        $data['sites'] = Http::get('http://localhost:8001/api/dashboard/sites')->json();
        $data['locations'] = Http::get('http://localhost:8001/api/dashboard/locations')->json();
        return view('dashboard.property.create', $data);
    }
}
