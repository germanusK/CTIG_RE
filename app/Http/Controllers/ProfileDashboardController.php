<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileDashboardController extends Controller
{
    //show view
    public function show()
    {
        # code...
        return view('dashboard.profile.dashboard_profile');
    }
}
