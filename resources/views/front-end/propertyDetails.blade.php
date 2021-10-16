<!DOCTYPE html>
<html lang="en">
<head>
    @include('front-end.template.top')
</head>
<body>
    @include('front-end.template.header')


    <!-- Proper details template -->
    <div class="md:grid grid-cols-4 my-16">

        <!-- left pane; for property details and related property -->
        <div class="col-span-3 px-3">
            <!-- property details template -->
            <div class="w-full py-6">
                <div class="w-full sm:grid grid-cols-5 gap-2">
                    
                    <!-- property image view -->
                    <div class="w-full col-span-2" style="min-height: 16rem; height: 70vh;"></div>
                
                    <!-- property map location view -->
                    <div class="w-full col-span-3 bg-gray-100" style="min-height: 16rem; height: 70vh;"></div>
                </div>
                <!-- property info display -->
                <div class="w-full bg-gray-200 py-2" style="min-height: 11rem;"></div>
            </div>

            <!-- related property template -->
            <div class="w-full py-4">
                <div class="w-full py-2 text-center text-2xl font-semibold capitalize">related property</div>
            </div>
        </div>

        <!-- right pane for trending deals -->
        <div class="px-3">
            <div class="w-full text-2xl text-center font-semibold py-2 capitalize">trending deals</div>
        </div>
    </div>


    @include('front-end.template.footer')
</body>
</html>