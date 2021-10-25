<?php

class StaticArrays{

    public static $api_dashboard_routes = [

        'assets_count'=>'http://localhost:8001/api/dashboard/assets/count',
        'sites_count'=>'http://localhost:8001/api/dashboard/sites/count',
        'categories_count'=>'http://localhost:8001/api/dashboard/categories/count',
        'pending_visits_count'=>'http://localhost:8001/api/dashboard/visits/pending/count',
        'users_count'=>'http://localhost:8001/api/dashboard/users',

        'base_route'=>'http://localhost:8001/api/dashboard/',
        'assets'=>'http://localhost:8001/api/dashboard/assets/',
        'asset'=>'http://localhost:8001/api/dashboard/assets/one',
        'trending_assets'=>'http://localhost:8001/api/dashboard/assets/trending',
        'asset_details'=>'http://localhost:8001/api/dashboard/assets/details',



        'pending_visits'=>'http://localhost:8001/api/dashboard/visits/pending',

    ];

}
?>