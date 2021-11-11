<!DOCTYPE html>
<html lang="en">
<head>
    @include('dashboard.template.top')
</head>
<body>
    <!-- dashboard view container -->
    <div class="sm:grid grid-cols-5 gap-2 w-10/12 mx-auto my-12 rounded-lg bg-blue-800">
        <!-- side navigation -->
        <div class="py-6">
            @include('dashboard.template.navigation')
        </div>

        <!-- section for header and content -->
        <div class="col-span-4 w-full bg-green-100 rounded-r-lg">
            <!-- header display -->
            @include('dashboard.template.header')
            <div class="justify-items-right pr-6 text-right py-4 w-full bg-pink-50">
                <span class="px-6 py-2 text-blue-700 hover:shadow-2xl shadow-inner font-semibold font-serif"><a href=" {{ url('/dashboard/sites') }} ">Home</a></span>
                <span class="px-6 py-2 text-blue-700 hover:shadow-2xl shadow-inner font-semibold font-serif"><a href=" {{ url('/dashboard/sites/create') }} ">New</a></span>
                <span class="px-6 py-2 text-blue-700 hover:shadow-2xl shadow-inner font-semibold font-serif"><a href=" {{ url('') }} ">Show all</a></span>
            </div>

            <!-- display section -->
            <div class="w-full max-h-screen overflow-y-scroll no-scrollbar p-2">
                <?php for ($i=0; $i < count($sites); $i++) { ?>
                    <a href="{{ url('/dashboard/sites/'.$sites[$i]['id'].'/details') }}" class=" hover:no-underline hover:scale-150 hover:text-black">
                    <div class="h-32 md:h-40 w-full my-3 rounded-lg shadow-lg flex flex-nowrap">
                        <div class="w-1/3 lg:w-1/4 h-full rounded-l-lg">
                            <img src="{{ url(Config::get('global_vars.api_dashboard_routes.maps').'/'.$sites[$i]['site_map']) }}" alt="" class="w-full h-full rounded-l-lg">
                        </div>
                        <div class="w-2/3 lg:w-3/4 h-full flex align-middle items-center text-center text-xl font-semibold  shadow-md rounded-r-lg">
                           <span ></span> name : {{ $sites[$i]['name'] }} / site number : {{ $sites[$i]['site_number'] }} / created on : {{ $sites[$i]['created_at'] }}
                            
                        </div>
                    </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- footer view -->
    @include('dashboard.template.footer')
</body>
</html>