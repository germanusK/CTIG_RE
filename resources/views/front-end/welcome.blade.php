<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('front-end.template.top')
        <style>
            body{
                background-image: url(" {{ url('img/bgl2.jpg') }} ");
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-origin: fixed;
            }
            .top-design{
                height: 100vh;
                /* background-color: rgba(30, 190, 110, 0.8); */
                width: 100%;
                background-color: rgba(00, 00, 00, 0.9);
                /* border-left: 42rem solid rgba(00, 00, 00, 0.7);
                border-right: 42rem solid rgba(00, 00, 00, 0.7); */
                /* border-top: 3rem solid transparent; */
                z-index: -1;
            }
            .onSite{
                /* border-right: 15rem solid transparent; */
                border-top-right-radius: -35%;
                border-bottom-right-radius: 190%;
            }
            #prop_image{
                border: 2rem outset rgb(255, 250, 245);
            }
        </style>
    </head>
    <body class="antialiased bg-fixed">
        <div class="top-design absolute"></div>    
        @include('front-end.template.header')

        <div class="h-screen w-full pt-20">
            <div class="w-full md:grid grid-cols-5">
                <div class-="col-span-2"></div>
                <div class="col-span-3 text-white text-4xl text-center font-extrabold capitalize pb-10"> welcome to <br><span class="uppercase block">CT Inc real property</span></div>
            </div>
            
                <div class="col-span-2 grid grid-cols-4">
                    <div class="text-center text-4xl text-white">W<sup class="text-2xl">3</sup></div>
                    <div class="col-span-3 overflow-x-scroll whitespace-nowrap overflow-y-hidden no-scrollbar">
                        <div class="flex w-min"> 
                            <div class="rounded-lg text-center bg-black mx-2 text-white py-6 px-3 w-60 max-w-sm">
                                <div class="text-center text-2xl font-semibold capitalize">who we are </div>
                                <div class="text-xl pt-4 break-words overflow-auto whitespace-pre-wrap h-48"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil saepe provident nemo ducimus expedita eaque</div>
                            </div>
                            <div class="rounded-lg text-center bg-black mx-2 text-white py-6 px-3 w-60">
                                <div class="text-center text-2xl font-semibold capitalize">what we do</div>
                                <div class="text-xl pt-4 break-words overflow-auto whitespace-pre-wrap h-48"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil saepe provident nemo ducimus expedita eaque</div>
                            </div>
                            <div class="rounded-lg text-center bg-black mx-2 text-white py-6 px-3 w-60">
                                <div class="text-center text-2xl font-semibold capitalize">why with us</div>
                                <div class="text-xl pt-4 break-words overflow-auto whitespace-pre-wrap h-48"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil saepe provident nemo ducimus expedita eaque</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-12 sm:w-1/2 text-center justify-center flex">
                    <a href="{{ url('login') }}" class="px-6 py-2 mx-3 text-xl bg-black bg-opacity-80 border-2 border-white rounded-full text-white">Login</a>
                    <a href="{{ url('https://mylfcglobal.com/register') }}" class="px-6 py-2 mx-3 text-xl bg-black bg-opacity-80 border-2 border-white rounded-full text-white">Register</a>
                </div>
            
        </div>

        @section('propertySample')


        @endsection
        <div class="sm:grid grid-cols-4  gap-2 py-16 px-2 justify-center text-center bg-white">
            <a href=" {{ url('property') }} " class=" w-52 h-60 mx-auto my-6 rounded">
                <img src=" {{ url('img/icon_property.jpg') }} " alt="" class="h-32 w-32 rounded-full mx-auto my-8">
                <div class="text-center text-2xl font-bold text-gray-800 capitalize">Our Property</div>
            </a>
            <a href=" {{ url('testimony') }} " class=" w-52 h-60 mx-auto my-6 rounded">
                <img src=" {{ url('img/icon_testimony.jpeg') }} " alt="" class="h-32 w-32 rounded-full mx-auto my-8">
                <div class="text-center text-2xl font-bold text-gray-800 capitalize">Our clients' testimonies</div>
            </a>
            <a href=" {{ url('about') }} " class=" w-52 h-60 mx-auto my-6 rounded">
                <img src=" {{ url('img/icon_about.jpg') }} " alt="" class="h-32 w-32 rounded-full mx-auto my-8">
                <div class="text-center text-2xl font-bold text-gray-800 capitalize">About us</div>
            </a>
            <a href=" {{ url('contact') }} " class=" w-52 h-60 mx-auto my-6 rounded">
                <img src=" {{ url('img/icon_contact.jpg') }} " alt="" class="h-32 w-32 rounded-full mx-auto my-8">
                <div class="text-center text-2xl font-bold text-gray-800 capitalize">contact us</div>
            </a>
        </div>

        @section('statistics')
        <!-- system statistics -->
        @endsection
        <div class="w-full bg-white">
            <div class="statistics w-6/7 sm:w-4/6 mx-auto py-20 sm:grid grid-cols-3 items-center">
                <div class="bg-gray-600 text-center justify-center py-8 h-5/6 rounded ">
                    <div class="w-3/5 mx-auto bg-gradient-to-t shadow-inner font-semibold from-gray-300 to-gray-50 text-center px-auto py-4 rounded-full">count+</div>
                    <div class="text-center w-full px-2 py-4 text-3xl font-semibold uppercase">projects</div>
                </div>
                <div class="bg-gray-800 text-center justify-center py-8 h-full rounded-xl ">
                    <div class="w-3/5 mx-auto bg-gradient-to-t shadow-inner font-semibold from-purple-300 to-purple-50 text-center px-auto py-4 rounded-full">count+</div>
                    <div class="text-center w-full px-2 py-4 text-3xl font-semibold uppercase">customers</div>
                </div>
                <div class="bg-gray-500 text-center justify-center py-8 h-5/6 rounded ">
                    <div class="w-3/5 mx-auto bg-gradient-to-t shadow-inner font-semibold from-gray-300 to-gray-50 text-center px-auto py-4 rounded-full">count+</div>
                    <div class="text-center w-full px-2 py-4 text-3xl font-semibold uppercase">cities</div>
                </div>
            </div>
            <div class="py-14 sm:grid grid-cols-2 gap-2">
                <div class="w-10/12 rounded mx-auto my-4 h-84">
                    <img src="{{ url('img/marketing1.jpg') }}" alt="" class="w-full h-full rounded">
                </div>
                <div class="flex align-middle items-center h-full w-9/12 mx-auto">
                    <div class="text-center text-gray-900">
                        <div class="text-3xl font-semibold my-3 capitalize">We keep it quite simple</div>
                        <div class="text-2xl font-semibold">Very easy-going. Always feel free to book for a visit to have a look at property before payments if that will be necessary on your part.</div>
                        <div class="my-4 w-full justify-end text-right"> <a href="{{ url('') }}" class="px-6 py-2 bg-gray-600 text-white text-xl border-2 border-white rounded-full font-semibold">Book a visit</a></div>
                    </div>
                </div>
            </div>
        </div>
        

        @section('onSite')
        <!-- images taken on site -->
        @endsection
        <div class="sm:grid grid-cols-2 gap-2 justify-center py-12 bg-white">
            <div class="flex align-middle items-center">
                <div class="text-center text-black text-2xl tracking-wide font-semibold sm:w-2/3 mx-auto" >
                    We are undoubtable to retain our trust and yours is therefore a certainty. Nothing to border.  We're handling it at your interest
                </div>
            </div>
            <div class="py-4"><iframe src="{{ url('https://www.youtube.com/watch?v=VAzlswsQEas') }}" controls class="w-10/12 mx-auto h-80 bg-white rounded"></iframe></div>
            <div class="col-span-2 py-12 w-full">
                <div class="text-center text-3xl font-bold leading-loose tracking-tight capitalize text-black">Latest Deals</div>
                <div class="sm:w-2/3 py-12 px-6 mx-auto">
                    <img src="{{ url('img/bg1.jpg') }}" alt="" id="prop_image" class="w-full  rounded-lg">
                    <script>
                        let prop_image = document.getElementById("prop_image");
                        let image_array = [
                            "{{ url('img/GetStoredImage.jpeg') }}", "{{ url('img/marketing1.jpg') }}", "{{ url('img/bg4.jpg') }}", "{{ url('img/img3.jpg') }}"
                        ], count = 0;
                        setInterval(function(){
                            prop_image.style.width += 30;
                            prop_image.style.height += 20;
                            prop_image.style.transitionDuration = '5s';
                            prop_image.style.transitionProperty = 'all';
                            prop_image.style.transitionTimingFunction = 'ease-in';

                            prop_image.src = image_array[++count%image_array.length];
                            for(let i = 0; i < 4000; i++) {
                                prop_image.style.width++;
                                prop_image.style.height++;
                            }

                        }, 6000);
                    </script>
                </div>
            </div>
        </div>
        
        @section('about')
        <!-- Info about us -->
        @endsection
        
        @section('testimonies')
        <!-- reactions from customers -->
        @endsection



        @include('front-end.template.footer')
    </body>
</html>
