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
        <div class="bg-white">
            <div class=" w-10/12 md:w-9/12 mx-auto sm:grid grid-cols-4  gap-2 py-16 px-2 justify-center text-center bg-white">
                <a href=" {{ url('property') }} " class=" w-52 h-60 mx-auto my-6 rounded">
                    <img src=" {{ url('img/icon_property.jpg') }} " alt="" class="h-32 w-32 rounded-full mx-auto my-8">
                    <div class="text-center text-2xl font-bold text-gray-800 capitalize">Our Property</div>
                </a>
                <a href=" {{ url('testimony') }} " class=" w-52 h-60 mx-auto my-6 rounded">
                    <img src=" {{ url('img/icon_testimony.jpeg') }} " alt="" class="h-32 w-32 rounded-full mx-auto my-8">
                    <div class="text-center text-2xl font-bold text-gray-800 capitalize">Client testimonies</div>
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
        </div>

        @section('statistics')
        <!-- system statistics -->
        @endsection
        <div class="w-full bg-white">
            <div class="w-10/12 md:w-9/12 mx-auto py-6 text-3xl text-justify tracking-wide leading-relaxed">
                <p>The unavoidable use of real property is the reason why everyone must acquire real property. Real estate is a necessity in all domains of life. With this knowledge, we then come in to present a "more than a neccessity real property" as a support to your endeavors. </p>
                <p>Knowing that security is at the core of every business, we then come assuring you security and working towards a modern society where ever we are.</p>
            </div>
            <div class="py-24 bg-black flex flex-wrap align-middle items-center justify-center">
                <div class="h-full align-baseline text-white w-10/12 md:w-4/12">
                    <div class="text-3xl font-bold text-center capitalize">Retracing the path</div>
                    <div class="text-justify text-2xl py-6 leading-relaxed tracking-wide w-10/12 mx-auto" >Retracing the path to a modern real society. We are taking you there, where property is always available.</div>
                </div>
                <video src="{{ url('videos/video1.mp4') }}" controls class="w-10/12 md:w-6/12 mx-auto h-auto bg-white rounded"></video>
            </div>
            <div class=" statistics w-6/7 sm:w-4/6 mx-auto py-20 sm:grid grid-cols-3 items-center">
                <div class="shadow-2xl text-center justify-center py-8 h-4/6 w-2/3 rounded-full bg-gray-700 text-white">
                    <div class="w-3/5 mx-auto shadow-inner font-semibold text-center px-auto py-4 rounded-full text-2xl bg-gray-500">24+</div>
                    <div class="text-center w-full px-2 pb-4 mb-5 text-xl font-semibold uppercase bg-gray-800 p-3 rounded-full">projects</div>
                </div>
                <div class="shadow-2xl text-center justify-center py-8 h-4/6 rounded-full w-2/3  bg-gray-700 text-white">
                    <div class="w-3/5 mx-auto shadow-inner font-semibold text-center px-auto py-4 rounded-full text-2xl bg-gray-500">3500+</div>
                    <div class="text-center w-full px-2 pb-4 mb-5 text-xl font-semibold uppercase bg-gray-800 p-3 rounded-full">customers</div>
                </div>
                <div class=" shadow-2xl text-center justify-center py-8 h-4/6 rounded-full w-2/3  bg-gray-700 text-white">
                    <div class="w-3/5 mx-auto shadow-inner font-semibold text-center px-auto py-4 rounded-full text-2xl bg-gray-500">10+</div>
                    <div class="text-center w-full px-2 pb-4 mb-5 text-xl font-semibold uppercase bg-gray-800 p-3 rounded-full">cities</div>
                </div>
            </div>
            
            <div class="py-14 w-10/12 md:w-9/12 mx-auto grid sm:grid-cols-2 md:grid-cols-3 gap-2">
                <duv class="sm:col-span-2 md:col-span-3 text-center text-3xl font-bold leading-relaxed tracking-wide text-gray-900 py-6">Our Property</duv>
                <div class="w-full rounded mx-auto my-4 h-84 md:col-span-2">
                    <img src="{{ url('img/marketing1.jpg') }}" alt="" class="w-full h-full rounded">
                </div>
                <div class="flex align-middle items-center h-full w-11/12 mx-auto relative">
                    <div class="p-4 text-center text-gray-200 bg-gray-700 shadow-xl rounded-3xl tracking-wide leading-relaxed">
                        <div class="text-3xl text-bold my-3 capitalize">keeping it simple</div>
                        <div class="text-2xl py-4">Very easy-going. Always feel free to book for a visit to have a look at property before payments if that will be necessary on your part.</div>
                        <div class="my-4 w-full justify-end text-right"> <a href="{{ url('property') }}" class="px-6 py-2 bg-gray-600 text-white text-xl border-2 border-white rounded-full font-semibold">see more</a></div>
                    </div>
                </div>
            </div>
        </div>
        

        @section('onSite')
        <!-- images taken on site -->
        @endsection
        <div class="justify-center py-4 bg-black">

            
            <div class="md:grid grid-cols-2 xl:grid-cols-3 w-11/12 mx-auto py-12 text-center">
                <div class="md:col-span-2 xl:col-span-3 text-center text-3xl font-bold leading-relaxed tracking-wide capitalize text-gray-200 gap-3">Latest Deals</div>
                @for ($i = 0; $i < count($latest); $i++)
                    <a href="{{ url('details/'.$latest[$i]['id']) }}" class="mx-2 my-2 inline-block h-auto max-h-screen p-3 bg-gray-700">
                        <img src="{{ url($latest[$i]['site_map']) }}" alt="" id="prop_image" class="w-full h-96 rounded-md">
                        <div class="text-justify text-xl text-white h-1/3">
                            <b> {{$latest[$i]['name']}} : {{$latest[$i]['site_number']}} </b>(situated at <span> {{$latest[$i]['situated_at']}}) </span>
                        </div>
                    </a>
                @endfor
                
            </div>
        </div>
        



        @include('front-end.template.footer')
    </body>
</html>
