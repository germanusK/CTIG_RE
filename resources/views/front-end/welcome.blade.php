<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('front-end.template.top')
    </head>
    <body class="antialiased">

        @include('front-end.template.header')

        @section('carousel')
        <!-- carousel -->
        <div class="carousel"></div>
        @endsection

        @section('propertySample')
        <!-- property samples -->
        @endsection
        <div class="propertySample sm:grid grid-cols-3 md:grid-cols-5 gap-2 my-8 py-6 px-2 justify-center">
            <div class="my-4 p-1 h-72 ">
                <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
                <div class="caption h-2/6 w-full bg-gray-700 my-1 overflow-y-hidden text-sm text-justify text-white">
                    <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                    <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
                </div>
            </div>
            <div class="my-4 p-1 h-72 ">
                <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
                <div class="caption h-2/6 w-full bg-gray-700 my-1 overflow-y-hidden text-sm text-justify text-white">
                    <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                    <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
                </div>
            </div>
            <div class="my-4 p-1 h-72 ">
                <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
                <div class="caption h-2/6 w-full bg-gray-700 my-1 overflow-y-hidden text-sm text-justify text-white">
                    <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                    <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
                </div>
            </div>
            <div class="my-4 p-1 h-72 ">
                <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
                <div class="caption h-2/6 w-full bg-gray-700 my-1 overflow-y-hidden text-sm text-justify text-white">
                    <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                    <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
                </div>
            </div>
            <div class="my-4 p-1 h-72 ">
                <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
                <div class="caption h-2/6 w-full bg-gray-700 my-1 overflow-y-hidden text-sm text-justify text-white">
                    <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                    <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
                </div>
            </div>
            <div class="my-4 p-1 h-72 ">
                <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
                <div class="caption h-2/6 w-full bg-gray-700 my-1 overflow-y-hidden text-sm text-justify text-white">
                    <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                    <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
                </div>
            </div>
            <div class="my-4 p-1 h-72 ">
                <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
                <div class="caption h-2/6 w-full bg-gray-700 my-1 overflow-y-hidden text-sm text-justify text-white">
                    <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                    <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
                </div>
            </div>
            <div class="my-4 p-1 h-72 ">
                <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
                <div class="caption h-2/6 w-full bg-gray-700 my-1 overflow-y-hidden text-sm text-justify text-white">
                    <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                    <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
                </div>
            </div>
            <div class="my-4 p-1 h-72 ">
                <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
                <div class="caption h-2/6 w-full bg-gray-700 my-1 overflow-y-hidden text-sm text-justify text-white">
                    <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                    <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
                </div>
            </div>
            <div class="my-4 p-1 h-72 ">
                <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
                <div class="caption h-2/6 w-full bg-gray-700 my-1 overflow-y-hidden text-sm text-justify text-white">
                    <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                    <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
                </div>
            </div>
        </div>

        @section('statistics')
        <!-- system statistics -->
        @endsection
        <div class="statistics w-6/7 sm:w-4/6 mx-auto my-12 sm:grid grid-cols-3 items-center">
            <div class="bg-gray-300 text-center justify-center py-8 h-5/6 rounded ">
                <div class="w-3/5 mx-auto bg-gradient-to-t shadow-inner font-semibold from-gray-300 to-gray-50 text-center px-auto py-4 rounded-full">count+</div>
                <div class="text-center w-full px-2 py-4 text-3xl font-semibold font-serif uppercase">projects</div>
            </div>
            <div class="bg-purple-300 text-center justify-center py-8 h-full rounded-xl ">
                <div class="w-3/5 mx-auto bg-gradient-to-t shadow-inner font-semibold from-purple-300 to-purple-50 text-center px-auto py-4 rounded-full">count+</div>
                <div class="text-center w-full px-2 py-4 text-3xl font-semibold font-serif uppercase">customers</div>
            </div>
            <div class="bg-gray-300 text-center justify-center py-8 h-5/6 rounded ">
                <div class="w-3/5 mx-auto bg-gradient-to-t shadow-inner font-semibold from-gray-300 to-gray-50 text-center px-auto py-4 rounded-full">count+</div>
                <div class="text-center w-full px-2 py-4 text-3xl font-semibold font-serif uppercase">cities</div>
            </div>
        </div>

        @section('onSite')
        <!-- images taken on site -->
        @endsection
        <div class="onSite sm:grid grid-cols-2 md:grid-cols-3 gap-2 justify-center my-12">
            <div class="">
                <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="w-full h-full">
            </div>
            <div class="">
                <img src=" {{ url('img\skuffwdd105.jpg') }} " alt="" class="w-full h-full">
            </div>
            <div class="">
                <img src=" {{ url('img\skuffwdd114.jpg') }} " alt="" class="w-full h-full">
            </div>
        </div>
        
        @section('about')
        <!-- Info about us -->
        @endsection
        <div class="about py-8">
            <div class="text-center text-2xl font-semibold font-serif my-4 capitalize pr-12">real estate is the reality with us</div>
            <div class="sm:w-4/5 md:w-3/4 mx-auto grid grid-cols-4 gap-2 rounded-lg bg-gray-500 px-4 py-6">
                <div class="skew-x-12 pl-4 text-lg font-semibold border-r-4 border-gray-900">
                    <a href=""><div class="my-2 bg-gray-900 bg-opacity-80 -skew-x-12 text-center text-white capitalize py-4">Our vision</div></a>
                    <a href=""><div class="my-2 bg-gray-900 bg-opacity-80 -skew-x-12 text-center text-white capitalize py-4"> our moto</div></a>
                    <a href=""><div class="my-2 bg-gray-900 bg-opacity-80 -skew-x-12 text-center text-white capitalize py-4"> driving factors</div></a>
                </div>
                <div class="col-span-3 py-4 pr-4 h-full text-white bg-gray-900 bg-opacity-80 text-justify"></div>
            </div>
        </div>
        
        @section('testimonies')
        <!-- reactions from customers -->
        @endsection
        <div class="testimonies w-full grid md:grid-cols-4 gap-4">
            <div class="justify-center bg-gray-100 p-3">
                <div class="items-center justify-center my-2 bg-gradient-to-t from-green-400 to-green-200 rounded-lg py-12">
                    <img src=" {{ url('img\skuffwdd114.jpg') }} " alt="" class="w-2/3 h-2/3 mx-auto rounded-xl">
                </div>
                <div class="text-center text-sm font-semibold">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt recusandae quas voluptates commodi, expedita unde, ipsam id minus cupiditate excepturi doloribus deleniti eius iusto minima dicta odio, quia adipisci? Harum.
                </div>
            </div>
            <div class="justify-center bg-gray-100 p-3">
                <div class="items-center justify-center my-2 bg-gradient-to-t from-green-400 to-green-200 rounded-lg py-12">
                    <img src=" {{ url('img\skuffwdd114.jpg') }} " alt="" class="w-2/3 h-2/3 mx-auto rounded-xl">
                </div>
                <div class="text-center text-sm font-semibold">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt recusandae quas voluptates commodi, expedita unde, ipsam id minus cupiditate excepturi doloribus deleniti eius iusto minima dicta odio, quia adipisci? Harum.
                </div>
            </div>
            <div class="justify-center bg-gray-100 p-3">
                <div class="items-center justify-center my-2 bg-gradient-to-t from-green-400 to-green-200 rounded-lg py-12">
                    <img src=" {{ url('img\skuffwdd114.jpg') }} " alt="" class="w-2/3 h-2/3 mx-auto rounded-xl">
                </div>
                <div class="text-center text-sm font-semibold">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt recusandae quas voluptates commodi, expedita unde, ipsam id minus cupiditate excepturi doloribus deleniti eius iusto minima dicta odio, quia adipisci? Harum.
                </div>
            </div>
            <div class="justify-center bg-gray-100 p-3">
                <div class="items-center justify-center my-2 bg-gradient-to-t from-green-400 to-green-200 rounded-lg py-12">
                    <img src=" {{ url('img\skuffwdd114.jpg') }} " alt="" class="w-2/3 h-2/3 mx-auto rounded-xl">
                </div>
                <div class="text-center text-sm font-semibold">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt recusandae quas voluptates commodi, expedita unde, ipsam id minus cupiditate excepturi doloribus deleniti eius iusto minima dicta odio, quia adipisci? Harum.
                </div>
            </div>
        </div>



        @include('front-end.template.footer')
    </body>
</html>
