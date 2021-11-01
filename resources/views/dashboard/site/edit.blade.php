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

            <!-- display section -->
            <div class="w-full max-h-screen overflow-y-scroll no-scrollbar p-2 bg-gray-100">

                <div class="grid grid-cols-5 w-full h-full">
                    <canvas class="col-span-5 lg:col-span-3 w-5/6 mx-auto my-4 bg-blue-500" width="12rem" height="12rem"></canvas>

                    <div class="col-span-5 lg:col-span-2 px-4 py-6 h-full flex align-middle items-center justify-center">
                        <form action="" method="post" class="w-full rounded-lg bg-gray-200 px-5 py-7">
                            <div class="w-full py-3">
                                <input type="text" name="site_name" placeholder="Enter site number" class="w-full leading-relaxed border-b-2 border-gray-400 bg-transparent">
                            </div>
                            <div class="w-full py-3">
                                <input type="text" name="site_name" placeholder="Enter site name" class="w-full leading-relaxed border-b-2 border-gray-400 bg-transparent">
                            </div>
                            <div class="w-full py-3">
                                <input type="file" name="site_plan" class="w-full leading-relaxed border-b-2 border-gray-400 bg-transparent">
                            </div>

                            <!-- divider -->
                            <hr class=" border-b-2 border-dotted border-gray-100">

                            <div class="w-full py-3">
                                <input type="text" name="site_size" placeholder="total site size" class="w-full leading-relaxed border-b-2 border-gray-400 bg-transparent">
                            </div>
                            <div class="w-full py-3">
                                <input type="text" name="site_available_size" placeholder="Available site size" class="w-full leading-relaxed border-b-2 border-gray-400 bg-transparent">
                            </div>

                            <!-- divider -->
                            <hr class=" border-b-2 border-dotted border-gray-100">
                            <hr class=" border-b-2 border-dotted border-gray-100">

                            <div class="w-full flex flex-wrap justify-center py-3 px-6">
                                <a href="" class="mx-3 my-2  py-1 text-blue-600 rounded ">site map</a>
                                <a href="" class="mx-3 my-2  py-1 text-blue-600 rounded ">set location</a>

                                <!-- divider -->
                                <hr class=" border-b-2 border-dotted border-gray-100">

                                <a href="" class="mx-3 my-2  py-1 text-blue-600 rounded">save</a>
                                <a href="" class="mx-3 my-2  py-1  text-blue-600 rounded">cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer view -->
    @include('dashboard.template.footer')
</body>
</html>