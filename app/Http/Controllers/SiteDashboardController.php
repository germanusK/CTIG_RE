<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteDashboardController extends Controller
{
    //show view
    public function show()
    {
        # code...
        return view('dashboard.site.dashboard_site');
    }
}
