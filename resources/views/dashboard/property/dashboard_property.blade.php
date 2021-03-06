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
                <?php 
                for ($i=0; $i < count($data) ; $i++) { 
                    echo
                    '<div class="w-full grid xs:grid-cols-3 sm:grid-cols-7 py-2 px-1 border-b-2 border-gray-300 bg-gray-50 hover:bg-gray-200 m-1" onClick="simpleItemClick()">'
                        .'<div class=" col-span-1 h-full">'
                            .'<div class=" w-12 h-12 rounded-lg bg-pink-400"></div>'   
                        .'</div>'
                        .'<div class="text-sm font-semibold" >'.$data[$i]['block_number'].'</div>'
                        .'<div class="sm:col-span-4 text-sm h-full max-h-16 overflow-y-hidden">'
                            .'<div class="font-semibold text-center text-blue-400">'.$data[$i]['name'].'</div>'
                            .'<div class="text-center">'.$data[$i]['description'].'</div>'
                        .'</div>'
                        .'<div class="text-center text-sm text-pink-700 font-semibold">'.$data[$i]['status'].'</div>'
                    .
                    '</div>';                   
                }

            ?>
            </div>
        </div>
    </div>

    <!-- footer view -->
    @include('dashboard.template.footer')
</body>
</html>