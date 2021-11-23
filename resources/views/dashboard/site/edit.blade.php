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
            <div class="w-full max-h-screen overflow-y-scroll no-scrollbar py-4 px-8 bg-gray-100">

                <div class=" w-full h-full shadow-inner p-4 bg-white rounded">
                    <img id="file_preview" src="{{ url($site['site_map']) }}" class="w-full max-h-96 mx-auto my-1">

                    <div class="px-1 pb-6 pt-2 h-full flex align-middle items-center justify-center">
                        <form id="site-editor-form" action="" method="post" class="w-full rounded-lg px-5 py-7">
                            <div class="w-full py-1">
                                <span class="text-sm leading-tight text-green-400">Site name</span>
                                <input type="text" name="site_name" placeholder="Enter site number" value="{{ $site['site_number'] }}" class="w-full leading-relaxed border-b-2 border-gray-400 bg-transparent">
                            </div>
                            <div class="w-full py-1">
                                <span class="text-sm leading-tight text-green-400">Site number</span>
                                <input type="text" name="site_name" placeholder="Enter site name" value="{{ $site['name'] }}" class="w-full leading-relaxed border-b-2 border-gray-400 bg-transparent focus-within::border-transparent">
                            </div>
                            <div class="w-full py-1">
                                <span class="text-sm leading-tight text-green-400">Site plan image</span>
                                <input id="file_input" type="file" name="site_plan" onchange="file_changed()" value="{{ $site['site_map'] }}" class="w-full leading-relaxed border-b-2 border-gray-400 bg-transparent">
                            </div>



                            <div class="w-full flex flex-wrap justify-center py-3">
                                <button type="submit" onclick="submitForm(1)" class="mx-auto my-2 w-full sm:w-1/3 md:w-1/4 inline-block border-r-2 border-l-2 border-white text-center bg-blue-600 hover:bg-blue-500 px-6 py-2 text-lg font-semibold text-white hover:no-underline shadow">site map</button>
                                <button type="submit" class="mx-auto my-2 w-full sm:w-1/3 md:w-1/4 inline-block border-r-2 border-l-2 border-white text-center bg-blue-600 hover:bg-blue-500 px-6 py-2 text-lg font-semibold text-white hover:no-underline shadow">location</button>
                                <button type="submit" class="mx-auto my-2 w-full sm:w-1/3 md:w-1/4 inline-block border-r-2 border-l-2 border-white text-center bg-blue-600 hover:bg-blue-500 px-6 py-2 text-lg font-semibold text-white hover:no-underline shadow">save</button>
                                <a href="" class="mx-auto my-2 w-full sm:w-1/3 md:w-1/4 inline-block border-r-2 border-l-2 border-white text-center bg-blue-600 hover:bg-blue-500 px-6 py-2 text-lg font-semibold text-white hover:no-underline shadow">cancel</a>
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
        function submitForm(vars) {
            switch(vars){
                case 1: 
                    document.forms[0].action = "{{ url('dashboard/sites/'.$site['id'].'/site_map') }} ";
                    document.forms[0].submit();
                    break;
                case 2:
                    document.forms[0].action = "";
                    document.forms[0].submit();
                    break;
                case 3:
                    document.forms[0].action = "";
                    document.forms[0].submit();
                    break;
            }
        }

    </script>
</body>
</html>