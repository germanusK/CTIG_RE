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
        <div class="col-span-4 w-full bg-gray-100 rounded-r-lg">
            <!-- header display -->
            @include('dashboard.template.header')
            <div class="justify-items-right pr-6 text-right py-4 w-full bg-pink-50">
                <span class="px-6 py-2 text-blue-700 hover:shadow-2xl shadow-inner font-semibold font-serif"><a href=" {{ url('/dashboard/sites') }} ">Home</a></span>
                <span class="px-6 py-2 text-blue-700 hover:shadow-2xl shadow-inner font-semibold font-serif"><a href=" {{ url('/dashboard/sites/create') }} ">New</a></span>
                <span class="px-6 py-2 text-blue-700 hover:shadow-2xl shadow-inner font-semibold font-serif"><a href=" {{ url('') }} ">Show all</a></span>
            </div>

            <!-- display section -->
            <div class="w-full max-h-screen overflow-y-scroll no-scrollbar p-2 bg-gray-100">

                <div class="w-full h-full grid grid-cols-5">
                    <img src="{{ url($map_path) }}" alt="" class="col-span-5 md:col-span-3 w-full h-full">
                    <div class="col-span-5 md:col-span-2 flex align-middle items-center justify-center">
                        <div class="shadow m-3 py-6 px-2"> 
                            <div class="justify-center">
                                <span class="block border-b-2 border-gray-100 text-lg mx-3"><strong>name</strong> : {{ $site['name'] }}</span>
                                <span class="block border-b-2 border-gray-100 text-lg mx-3"><strong>Site number</strong> : {{ $site['site_number'] }}</span>
                                <span class="block border-b-2 border-gray-100 text-lg mx-3"><strong>Created on</strong> : {{ $site['created_at'] }}</span>
                                <span class="block border-b-2 border-gray-100 text-lg mx-3"><strong>Last updated on</strong> : {{ $site['updated_at'] }}</span>
                                <span class="block border-b-2 border-gray-100 text-lg mx-3"><strong> Contains </strong> : {{ $site['asset_count'] }} assets</span>
                                <span class="block border-b-2 border-gray-100 text-lg mx-3"><strong> Coordinates </strong> : {{ $site['latitude'] }} / {{ $site['longitude'] }} </span>
                                <span class="block border-b-2 border-gray-100 text-lg mx-3 text-justify py-2"> <strong> Located at: </strong> <strong> {{ $site['location_name'] }} </strong>; {{ $site['description'] }}</span>
                            </div>
                            
                            <div class="flex w-full justify-center py-3 px-5">
                                <a href="{{ url('/dashboard/sites/'.$site['id'].'/edit') }}" class="px-3 py-1 rounded mx-2 shadow-md text-blue-600 font-semibold">edit</a>
                                <a href="{{ url('/dashboard/sites/'.$site['id'].'/on_delete') }}" class="px-3 py-1 rounded mx-2 shadow-md text-blue-600 font-semibold">delete</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- footer view -->
    @include('dashboard.template.footer')
</body>
</html>