<!DOCTYPE html>
<html lang="en">
<head>
    @include('front-end.template.top')
    <style>
        body{
            background-image: url(" {{ url('img/GetStoredImage.jpeg') }} ");
            background-size: cover;
            background-position: top;
            background-repeat: no-repeat;
            background-attachment: fixed;

        }
        .top-design{
                height: 100vh;
                /* background-color: rgba(30, 190, 110, 0.8); */
                width: 100%;
                background-color: rgba(00, 00, 00, 0.9);
                /* border-left: 42rem solid rgba(00, 00, 00, 0.7);
                border-right: 42rem solid rgba(00, 00, 00, 0.7); */
                /* border-top: 3rem solid transparent; */
                z-index: -2;
            }
    </style>
</head>
<body>

    <div class="top-design absolute sm:grid grid-cols-2 mb-32">
        <div class="h-full"></div>
        <div class="flex align-middle items-center h-full">
            <img src=" {{ url('img/buildings.svg') }} " class="h-3/4"/>
        </div>
    </div>    

    @include('front-end.template.header')

    <!-- Map showing different sites -->
    <div class="flex align-middle items-center text-center text-blue-900 text-2xl py-14 font-semibold capitalize">
        <span class="text-4xl sm:my-12 block">our properties</span><br>
        <!-- What we have for you -->
    </div>

    <!-- outstanding property -->
    <div class="w-full  my-12 py-8">
        <div class="text-center text-white text-3xl py-4 capitalize">Trending deals</div>
        
        <div class="sm:w-10/12 md:w-9/12 mx-auto h-screen no-scrollbar whitespace-nowrap overflow-y-hidden overflow-x-scroll">
            <!-- <?php for ($i=0; $i < 5; $i++) { ?> -->
            <div class="w-full h-full relative">
                <img src=" {{ url('img/bgl.jpg') }} " alt="" class="w-full h-full rounded-xl absolute top-0 left-0">
                <div class="h-full w-full absolute top-0 left-0">
                    <div class="w-full h-full">
                        <span class="h-full flex align-middle items-center bg-gradient-to-l from-transparent to-gray-400 float-right text-6xl py-2 px-6  text-gray-600 leading-10 tracking-tighter font-semibold">></span>
                        <span class="h-full flex align-middle items-center bg-gradient-to-r from-transparent to-gray-400 float-left text-6xl py-2 px-6  text-gray-600 leading-10 tracking-tighter font-semibold"><</span>
                    </div>
                </div>
                <div class="rounded-b-xl w-full absolute bottom-0 py-10 px-14 left-0 text-center whitespace-pre-wrap bg-gradient-to-t from-gray-900 via-gray-700 to-transparent bg-opacity-50 text-xl tracking-wide font-semibold leading-10 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe perferendis laborum quam accusamus ducimus vel quibusdam! Sit ut praesentium, at, ducimus, neque ad in doloremque consequatur consequuntur quod facere aliquam.</div>
            </div>
            <div class="w-full h-full relative">
                <img src=" {{ url('img/bgl.jpg') }} " alt="" class="w-full h-full rounded-xl absolute top-0 left-0">
                <div class="h-full w-full absolute top-0 left-0">
                    <div class="w-full h-full">
                        <span class="h-full flex align-middle items-center bg-gradient-to-l from-transparent to-gray-400 float-right text-6xl py-2 px-6  text-gray-600 leading-10 tracking-tighter font-semibold">></span>
                        <span class="h-full flex align-middle items-center bg-gradient-to-r from-transparent to-gray-400 float-left text-6xl py-2 px-6  text-gray-600 leading-10 tracking-tighter font-semibold"><</span>
                    </div>
                </div>
                <div class="rounded-b-xl w-full absolute bottom-0 py-10 px-14 left-0 text-center whitespace-pre-wrap bg-gradient-to-t from-gray-900 via-gray-700 to-transparent bg-opacity-50 text-xl tracking-wide font-semibold leading-10 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe perferendis laborum quam accusamus ducimus vel quibusdam! Sit ut praesentium, at, ducimus, neque ad in doloremque consequatur consequuntur quod facere aliquam.</div>
            </div>
            <div class="w-full h-full relative">
                <img src=" {{ url('img/bgl.jpg') }} " alt="" class="w-full h-full rounded-xl absolute top-0 left-0">
                <div class="h-full w-full absolute top-0 left-0">
                    <div class="w-full h-full">
                        <span class="h-full flex align-middle items-center bg-gradient-to-l from-transparent to-gray-400 float-right text-6xl py-2 px-6  text-gray-600 leading-10 tracking-tighter font-semibold">></span>
                        <span class="h-full flex align-middle items-center bg-gradient-to-r from-transparent to-gray-400 float-left text-6xl py-2 px-6  text-gray-600 leading-10 tracking-tighter font-semibold"><</span>
                    </div>
                </div>
                <div class="rounded-b-xl w-full absolute bottom-0 py-10 px-14 left-0 text-center whitespace-pre-wrap bg-gradient-to-t from-gray-900 via-gray-700 to-transparent bg-opacity-50 text-xl tracking-wide font-semibold leading-10 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe perferendis laborum quam accusamus ducimus vel quibusdam! Sit ut praesentium, at, ducimus, neque ad in doloremque consequatur consequuntur quod facere aliquam.</div>
            </div>
            <!-- <?php } ?> -->
        </div>
    </div>

        
        


    <!-- Site image slide -->
    <div class="w-4/5 mx-auto my-6 sm:grid grid-cols-6 gap-2 p-4 items-center">
        <div class="col-span-4 rounded-lg bg-gray-200 sm:h-62 md:h-96">
            <img src=" {{ url('img\skuffwdd105.jpg') }} " alt="" class="w-full h-full rounded-lg">
        </div>
        <div class="col-span-2 text-sm"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae consequatur quibusdam non recusandae placeat provident aliquam esse</div>
    </div>

    <!-- Other properties -->
    <div class="w-full sm:grid grid-cols-3 md:grid-cols-5 gap-3 my-12 py-8">
        <div class="my-4 p-1 h-72 ">
            <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
            <div class="caption h-2/6 w-full my-1 overflow-y-hidden text-sm text-justify text-black">
                <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
            </div>
        </div>
        <div class="my-4 p-1 h-72 ">
            <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
            <div class="caption h-2/6 w-full my-1 overflow-y-hidden text-sm text-justify text-black">
                <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
            </div>
        </div>
        <div class="my-4 p-1 h-72 ">
            <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
            <div class="caption h-2/6 w-full my-1 overflow-y-hidden text-sm text-justify text-black">
                <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
            </div>
        </div>
        <div class="my-4 p-1 h-72 ">
            <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
            <div class="caption h-2/6 w-full my-1 overflow-y-hidden text-sm text-justify text-black">
                <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
            </div>
        </div>
        <div class="my-4 p-1 h-72 ">
            <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
            <div class="caption h-2/6 w-full my-1 overflow-y-hidden text-sm text-justify text-black">
                <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
            </div>
        </div>
        <div class="my-4 p-1 h-72 ">
            <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
            <div class="caption h-2/6 w-full my-1 overflow-y-hidden text-sm text-justify text-black">
                <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
            </div>
        </div>
        <div class="my-4 p-1 h-72 ">
            <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
            <div class="caption h-2/6 w-full my-1 overflow-y-hidden text-sm text-justify text-black">
                <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
            </div>
        </div>
        <div class="my-4 p-1 h-72 ">
            <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
            <div class="caption h-2/6 w-full my-1 overflow-y-hidden text-sm text-justify text-black">
                <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
            </div>
        </div>
        <div class="my-4 p-1 h-72 ">
            <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
            <div class="caption h-2/6 w-full my-1 overflow-y-hidden text-sm text-justify text-black">
                <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
            </div>
        </div>
        <div class="my-4 p-1 h-72 ">
            <img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="h-4/6 w-full rounded my-1">
            <div class="caption h-2/6 w-full my-1 overflow-y-hidden text-sm text-justify text-black">
                <div class="py-1 text-center px-4 font-semibold capitalize">Property Name</div>
                <div class="px-2 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius est architecto numquam asperiores, repellat repudiandae a ut sunt, maiores non voluptatem distinctio cumque modi inventore quod? Nisi, quibusdam asperiores.</div>
            </div>
        </div>
        <button class="text-center py-5 px-12 col-span-3 md:col-span-5 text-lg text-blue-800">show all</button>
    </div>
    

    @include('front-end.template.footer')
</body>
</html>