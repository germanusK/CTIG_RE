

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

                <div class='rounded-lg bg-gray-100 shadow-md px-6 py-8 my-10 text-xl sm:w-8/12 md:w-5/12 mx-auto'>
                    You are about to delete site with name <strong class='font-semibold'> {{ $site['name'] }} </strong> , and site number <strong class='font-semibold'> {{ $site['site_number'] }} </strong>
                    <div class="w-full justify-end flex divide-x-8 mt-8">
                        <a href="{{ url('/dashboard/sites/'.$site['id'].'/details') }}" class="rounded border-gray-100 shadow-md bg-white font-semibold px-3 py-1">Cancel</a>
                        <a href="{{ url('/dashboard/sites/'.$site['id'].'/delete') }}" class="rounded shadow-md border-gray-100 bg-white font-semibold px-3 py-1">Continue</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- footer view -->
    @include('dashboard.template.footer')
</body>
</html>