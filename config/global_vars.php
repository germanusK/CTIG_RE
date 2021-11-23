<?php

    $api_base_path = 'http://localhost:8001/api';
    return [
         'api_dashboard_routes' => [

            'assets_count'=>$api_base_path.'/___admin/assets/count',
            'sites_count'=>$api_base_path.'/___admin/sites/count',
            'categories_count'=>$api_base_path.'/___admin/categories/count',
            'pending_visits_count'=>$api_base_path.'/___admin/visits/pending/count',
            'users_count'=>$api_base_path.'/___admin/users',

            'base_route'=>$api_base_path.'/___admin',
            
            'maps' => $api_base_path.'/___admin/maps',
            'assets'=>$api_base_path.'/___admin/assets/',
            'create_asset'=>$api_base_path.'/___admin/assets/one',
            'trending_assets'=>$api_base_path.'/___admin/assets/trending',
            'asset_details'=>$api_base_path.'/___admin/assets/details',

            'sites'=>$api_base_path.'/___admin/sites',
            'create_site'=>$api_base_path.'/___admin/sites/one',
            'trending_sites'=>$api_base_path.'/___admin/sites/trending',
            'shuffle_sites'=>$api_base_path.'/___admin/sites/shuffle',
            'detailed_sites'=>$api_base_path.'/___admin/sites/details',


            'pending_visits'=>$api_base_path.'/___admin/visits/pending',

         ],
         'api_frontend_routes'=>[
             'sites'=>$api_base_path.'/frontend/sites',
             'shuffle_sites'=>$api_base_path.'/frontend/sites/shuffle',
             'latest_sites'=>$api_base_path.'/frontend/sites/latest',
             'create_appointment'=>$api_base_path.'/frontend/appointment'
         ],
    ];

?>