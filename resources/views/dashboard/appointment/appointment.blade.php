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

            <div class="py-10 px-3">
                <?php for ($i=0; $i < 5; $i++) {  ?>
                    <div class="bg-white rounded-md shadow flex flex-wrap py-3 my-2">
                        <span class="py-1 px-3 bg-white shadow text-gray-700 text-lg font-black mx-auto my-2 rounded-full">i</span>
                        <div class="px-3 py-2 mx-auto">
                            <span class="font-bold text-xl mx-auto px-2">Customer name</span>:<span class="font-semibold text-lg mx-auto px-2">Contact</span>
                            <span class="px-2 mx-auto"> scheduled for :<span class="font-semibold text-lg">schedule time</span></span>
                            <span class="bg-white shadow-lg px-5 py-2 rounded-full mx-auto">Pending</span>
                        </div>
                        <div class="w-full py-2 justify-end flex">
                            <a class="shadow-md px-5 py-2 bg-white rounded-full mx-2">site</a>
                            <a class="shadow-md px-5 py-2 bg-white rounded-full mx-2">delete</a>
                            <a class="shadow-md px-5 py-2 bg-white rounded-full mx-2">re-schedule</a>
                            <a class="shadow-md px-5 py-2 bg-white rounded-full mx-2">edit</a>
                        </div>
                    </div>
                <?php } ?>
            </div>

            </div>
        </div>
    </div>

    <!-- footer view -->
    @include('dashboard.template.footer')
</body>
</html>




