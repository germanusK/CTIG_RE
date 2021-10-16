<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyDashboardController extends Controller
{
    // show view
    public function show()
    {
        # code...
        return view('dashboard.property.dashboard_property');
    }
}
