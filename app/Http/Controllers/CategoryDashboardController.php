<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryDashboardController extends Controller
{
    //show view
    public function show()
    {
        # code...
        return view('dashboard.category.dashboard_category');
    }
}
