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
        <div class="col-span-4 w-full bg-blue-100 rounded-r-lg">
            <!-- header display -->
            @include('dashboard.template.header')
            <div class="justify-items-right pr-6 text-right py-4 w-full bg-pink-50">
                <span class="px-6 py-2 text-blue-700 hover:shadow-2xl shadow-inner font-semibold font-serif"><a href=" {{ url('dashboard/property') }} ">Home</a></span>
                <span class="px-6 py-2 text-blue-700 hover:shadow-2xl shadow-inner font-semibold font-serif"><a href=" {{ url('dashboard/property/create') }} ">Create</a></span>
                <span class="px-6 py-2 text-blue-700 hover:shadow-2xl shadow-inner font-semibold font-serif"><a href=" {{ url('') }} ">Show all</a></span>
            </div>
           

            <!-- display section -->
            <div class="w-full max-h-screen overflow-y-scroll no-scrollbar p-3 py-8">
                
                <div class="w-full sm:grid grid-cols-2 gap-2">
                    <!-- Map location -->
                    <div class="bg-gray-50 h-72 my-1"></div>

                    <!-- property image view -->
                    <div class="bg-pink-100 h-72 my-1"></div>

                    <!-- image thumbnails menu  -->
                    <div class="flex px-3 py-2 col-span-2 w-full overflow-x-scroll overflow-y-hidden whitespace-nowrap no-scrollbar bg-gray-600">
                        <div class="w-14 h-14 my-2 mx-1 rounded-sm bg-gray-100"></div>
                        <div class="w-14 h-14 my-2 mx-1 rounded-sm bg-gray-100"></div>
                        <div class="w-14 h-14 my-2 mx-1 rounded-sm bg-gray-100"></div>
                        <div class="w-14 h-14 my-2 mx-1 rounded-sm bg-gray-100"></div>
                        <div class="w-14 h-14 my-2 mx-1 rounded-sm bg-gray-100"></div>
                        <div class="w-14 h-14 my-2 mx-1 rounded-sm bg-gray-100"></div>
                        <div class="w-14 h-14 my-2 mx-1 rounded-sm bg-gray-100"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- footer view -->
    @include('dashboard.template.footer')
</body>
</html>