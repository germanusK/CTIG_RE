<?php


    return [
         'api_dashboard_routes' => [

            'assets_count'=>'http://localhost:8001/api/dashboard/assets/count',
            'sites_count'=>'http://localhost:8001/api/dashboard/sites/count',
            'categories_count'=>'http://localhost:8001/api/dashboard/categories/count',
            'pending_visits_count'=>'http://localhost:8001/api/dashboard/visits/pending/count',
            'users_count'=>'http://localhost:8001/api/dashboard/users',

            'base_route'=>'http://localhost:8001/api/dashboard',
            
            'maps' => 'http://localhost:8001/api/dashboard/maps',
            'assets'=>'http://localhost:8001/api/dashboard/assets/',
            'create_asset'=>'http://localhost:8001/api/dashboard/assets/one',
            'trending_assets'=>'http://localhost:8001/api/dashboard/assets/trending',
            'asset_details'=>'http://localhost:8001/api/dashboard/assets/details',

            'sites'=>'http://localhost:8001/api/dashboard/sites',
            'create_site'=>'http://localhost:8001/api/dashboard/sites/one',
            'trending_sites'=>'http://localhost:8001/api/dashboard/sites/trending',
            'detailed_sites'=>'http://localhost:8001/api/dashboard/sites/details',


            'pending_visits'=>'http://localhost:8001/api/dashboard/visits/pending',

         ],
    ];

?>