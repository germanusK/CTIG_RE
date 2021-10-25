<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetDetails extends Controller
{
    //
    public function details()
    {
        return view('dashboard.property.details');
    }
}
