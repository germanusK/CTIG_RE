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
            <div class="w-full h-screen overflow-y-scroll no-scrollbar p-2 bg-gray-100">

                <div class="grid grid-cols-5 w-full h-full">
                    <img id="preview" src="{{ url('img/house.svg') }}" alt="SITE PLAN{IMAGE}" class="col-span-5 lg:col-span-3 w-3/4 mx-auto h-3/4 my-4">

                    <div class="col-span-5 lg:col-span-2 px-4 py-12 h-full flex align-middle items-center justify-center">
                        <form action="{{ url('dashboard/sites/create/process') }}" method="post" enctype="multipart/form-data" class="w-full rounded-lg bg-black text-white px-5 py-7">
                            {{ csrf_field() }}
                            <div class="w-full py-3">
                                <input type="text" name="site_number" required placeholder="Enter site number" class="text-lg w-full leading-relaxed border-b-2 border-gray-400 bg-transparent">
                            </div>
                            <div class="w-full py-3">
                                <input type="text" name="site_name" required placeholder="Enter site name" class="text-lg w-full leading-relaxed border-b-2 border-gray-400 bg-transparent">
                            </div>
                            <div class="w-full py-3">
                                <input type="file" id="file_input" required name="site_map" accept="image/*" onchange="preview()" class="w-full leading-relaxed border-b-2 border-gray-400 bg-transparent">
                            </div>
                            <div class="w-full py-3 px-6">
                                <button type="submit" class="px-3 py-1 bg-white text-blue-600 float-right rounded font-semibold">save</button>
                                <a href="{{ url('dashboard/sites') }}" class="px-3 py-1 bg-white text-blue-600 float-left rounded font-semibold">back</a>
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
        function preview(){
            let [file] = document.getElementById('file_input').files;
            if (file) {
                document.getElementById('preview').src = URL.createObjectURL(file);
            }
        }
    </script>
</body>
</html>