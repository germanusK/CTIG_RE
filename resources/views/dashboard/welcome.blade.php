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
                <!-- graphical statistics -->
                <div class="w-full grid sm:grid-cols-2 md:grid-cols-3 gap-3 py-6 bg-gray-50">
                    
                    <!-- chart container -->
                    <div class="h-full items-center justify-center">
                        <!-- chart canvas-->
                        <canvas class="w-full h-36" id="lineChart"></canvas>
                    </div> 

                    <!-- chart container -->
                    <div class="h-full items-center justify-center">
                        <!-- chart canvas-->
                        <canvas class="w-full h-36" id="pieChart"></canvas>
                    </div> 

                    <!-- chart container -->
                    <div class="h-full items-center justify-center">
                        <!-- chart canvas-->
                        <canvas class="w-full h-36" id="barchart"></canvas>
                    </div> 
                </div>
                <!-- Numerical statistics -->
                <div class="w-full sm:grid grid-cols-2 gap-2">
                    <div class="flex-wrap m-0 p-0 col-span-2 md:col-span-1 sm:grid grid-cols-2">
                        <div class="h-min -mx-1 p-3 bg-transparent"><div class="w-full rounded-lg bg-gray-400 shadow-md text-center text-2xl py-6"><span class="font-bold text-3xl w-min mx-auto block my-3 text-green-800 px-3 py-1 rounded-full bg-green-200">count^</span>Assets available</div></div>
                        <div class="h-min -mx-1 p-3 bg-transparent"><div class="w-full rounded-lg bg-gray-400 shadow-md text-center text-2xl py-6"><span class="font-bold text-3xl w-min mx-auto block my-3 text-green-800 px-3 py-1 rounded-full bg-green-200">count^</span>Active sites</div></div>
                        <div class="h-min -mx-1 p-3 bg-transparent"><div class="w-full rounded-lg bg-gray-400 shadow-md text-center text-2xl py-6"><span class="font-bold text-3xl w-min mx-auto block my-3 text-green-800 px-3 py-1 rounded-full bg-green-200">count^</span>Pending visits</div></div>
                        <div class="h-min -mx-1 p-3 bg-transparent"><div class="w-full rounded-lg bg-gray-400 shadow-md text-center text-2xl py-6"><span class="font-bold text-3xl w-min mx-auto block my-3 text-green-800 px-3 py-1 rounded-full bg-green-200">count^</span>Asset categories</div></div>
                    </div>
                    <!-- menu design -->
                    <div class="flex-wrap col-span-2 md:col-span-1 sm:grid grid-cols-2">
                        <div onclick=`window.location= <?php echo "{{ url('dashboard/property') }}" ?> ` class=" m-3 rounded border-2 border-transparent bg-pink-200 p-2 text-2xl text-center">
                            <div class="w-min mx-auto rounded-full p-3 bg-pink-500 text-white text-3xl my-3 font-black">As</div>
                            Assets
                        </div>
                        <div onclick=`window.location= <?php echo "{{ url('dashboard/site') }}" ?> ` class=" m-3 rounded border-2 border-transparent bg-pink-200 p-2 text-2xl text-center">
                            <div class="w-min mx-auto rounded-full p-3 bg-pink-500 text-white text-3xl my-3 font-black">St</div>
                            Sites
                        </div>
                        <div onclick=`window.location= <?php echo "{{ url('dashboard/category') }}" ?> ` class=" m-3 rounded border-2 border-transparent bg-pink-200 p-2 text-2xl text-center">
                            <div class="w-min mx-auto rounded-full p-3 bg-pink-500 text-white text-3xl my-3 font-black">cT</div>
                            Categories
                        </div>
                        <div onclick=`window.location= <?php echo "{{ url('dashboard\/customer') }}" ?>`  class=" m-3 rounded border-2 border-transparent bg-pink-200 p-2 text-2xl text-center">
                            <div class="w-min mx-auto rounded-full p-3 bg-pink-500 text-white text-3xl my-3 font-black">Cs</div>
                            Customers
                        </div>
                    </div>
                </div>
                <div class=""></div>
            </div>
        </div>
    </div>

    <!-- footer view -->
    @include('dashboard.template.footer')
</body>
</html>