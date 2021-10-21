<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainDashboardController extends Controller
{
    //show view
    public function show()
    {
        # code...
        return view('dashboard.welcome');
    }
}
