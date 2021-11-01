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
                        <div> site detailed data
                            <div class="flex w-full justify-center py-3 px-5">
                                <a href="{{ url('/dashboard/sites/'.'$site->id'.'/edit') }}" class="px-3 py-1 rounded mx-2 bg-blue-200 text-blue-600 font-semibold">edit</a>
                                <a href="{{ url('/dashboard/sites/'.'$site->id'.'/on_delete') }}" class="px-3 py-1 rounded mx-2 bg-blue-200 text-blue-600 font-semibold">delete</a>
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