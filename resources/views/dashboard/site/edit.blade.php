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

                <div class=" w-full h-full">
                    <img id="file_preview" src="{{ url($site['site_map']) }}" class="w-5/6 mx-auto my-4">

                    <div class="px-1 py-6 h-full flex align-middle items-center justify-center">
                        <form action="" method="post" class="w-full rounded-lg shadow-lg px-5 py-7">
                            <div class="w-full py-3">
                                <span class="text-sm leading-tight text-green-400">Site name</span>
                                <input type="text" name="site_name" placeholder="Enter site number" value="{{ $site['site_number'] }}" class="w-full leading-relaxed border-b-2 border-gray-400 bg-transparent">
                            </div>
                            <div class="w-full py-3">
                                <span class="text-sm leading-tight text-green-400">Site number</span>
                                <input type="text" name="site_name" placeholder="Enter site name" value="{{ $site['name'] }}" class="w-full leading-relaxed border-b-2 border-gray-400 bg-transparent">
                            </div>
                            <div class="w-full py-3">
                                <span class="text-sm leading-tight text-green-400">Site plan image</span>
                                <input id="file_input" type="file" name="site_plan" onchange="file_changed()" value="{{ $site['site_map'] }}" class="w-full leading-relaxed border-b-2 border-gray-400 bg-transparent">
                            </div>

                            <!-- divider -->
                            <hr class=" border-b-2 border-dotted shadow-lg">

                            <div class="w-full py-3">
                                <span class="text-sm leading-tight text-green-400">Site size in number of assets</span>
                                <input type="text" name="site_size" placeholder="total site size" value=" {{ $site['asset_count'] }} " class="w-full leading-relaxed border-b-2 border-gray-400 bg-transparent">
                                
                            </div>
                            <div class="w-full py-3">
                            <span class="text-sm leading-tight text-green-400">Number of available assets</span>
                                <input type="text" name="site_available_size"  placeholder="Available site size" class="w-full leading-relaxed border-b-2 border-gray-400 bg-transparent">
                            </div>

                            <!-- divider -->
                            <hr class=" border-b-2 border-dotted border-gray-100">
                            <hr class=" border-b-2 border-dotted shadow-lg">

                            <div class="w-full flex flex-wrap justify-center py-3 px-6">
                                <a href=" {{ url('/'.$site['id'].'/site_map') }} " class="mx-auto my-2 px-3  py-1 text-blue-600 rounded shadow">site map</a>
                                <a href="" class="mx-auto my-2 px-3 py-1 text-blue-600 rounded shadow">location</a>

                                <!-- divider -->
                                <hr class="w-full border-b-2 border-dotted shadow-md">

                                <a href="" class="mx-auto my-2 px-3 py-1 text-blue-600 rounded shadow">save</a>
                                <a href="" class="mx-auto my-2 px-3 py-1  text-blue-600 rounded shadow">cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer view -->
    @include('dashboard.template.footer')
    <script>
        function file_changed(){
            let [files] = document.getElementById('file_input').files;
            if (files) {
                document.getElementById('file_preview').src = URL.createObjectURL(files);
            }
        }
    </script>
</body>
</html>