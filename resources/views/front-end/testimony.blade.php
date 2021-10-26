<!DOCTYPE html>
<html lang="en">
<head>
    @include('front-end.template.top')
    <style>
        body{
            background-image: url("{{ url('img/testimony.jpg') }}");
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .top_image{
            z-index: -1;
        }
        .img_upper{
            height: 75vh;
        }
    </style>
</head>
<body>

    <div class="top_image w-full h-screen absolute bg-black bg-opacity-90"></div>

    @include('front-end.template.header')

    <div class="w-full text-center text-4xl leading-relaxed font-bold capitalize py-20 text-white">Our customer feedback</div>
    
    @section('testimonySection')
    @endsection
    <div class=" py-12 bg-white">
        <div class="w-full py-6">
            <img src="{{ url('img/testimony.jpg') }}" alt="" class="rounded-xl w-11/12 sm:w-9/12 mx-auto img_upper">
        </div>
        <div class="w-full py-4 px-6 justify-center col-span-2 overflow-x-scroll no-scrollbar">
            <div class="flex flex-nowrap w-max">
                
                <div class="my-2 mx-3  w-60 gap-2 bg-gray-800 items-center inline-block rounded-md">
                    <img src=" {{ url('img\user1.jpg') }} " alt="" class=" h-44 w-44 mx-auto rounded-full my-6">
                    <div class="px-3 py-2  capitalize text-white text-2xl font-semibold text-center">client name</div>
                    <div class=" h-64 flex align-middle text-justify text-white w-full overflow-ellipsis flex-wrap px-2 py-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe aspernatur a rem, sit quaerat tempore debitis veniam distinctio quidem optio atque alias qui, laboriosam laborum doloribus ipsa voluptate? Illum, illo.</div>
                </div>
                <div class="my-2 mx-3  w-60 gap-2 bg-gray-800 items-center inline-block rounded-md">
                    <img src=" {{ url('img\user1.jpg') }} " alt="" class=" h-44 w-44 mx-auto rounded-full my-6">
                    <div class="px-3 py-2  capitalize text-white text-2xl font-semibold text-center">client name</div>
                    <div class=" h-64 flex align-middle text-justify text-white w-full overflow-ellipsis flex-wrap px-2 py-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe aspernatur a rem, sit quaerat tempore debitis veniam distinctio quidem optio atque alias qui, laboriosam laborum doloribus ipsa voluptate? Illum, illo.</div>
                </div>
                <div class="my-2 mx-3  w-60 gap-2 bg-gray-800 items-center inline-block rounded-md">
                    <img src=" {{ url('img\user1.jpg') }} " alt="" class=" h-44 w-44 mx-auto rounded-full my-6">
                    <div class="px-3 py-2  capitalize text-white text-2xl font-semibold text-center">client name</div>
                    <div class=" h-64 flex align-middle text-justify text-white w-full overflow-ellipsis flex-wrap px-2 py-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe aspernatur a rem, sit quaerat tempore debitis veniam distinctio quidem optio atque alias qui, laboriosam laborum doloribus ipsa voluptate? Illum, illo.</div>
                </div>
                <div class="my-2 mx-3  w-60 gap-2 bg-gray-800 items-center inline-block rounded-md">
                    <img src=" {{ url('img\user1.jpg') }} " alt="" class=" h-44 w-44 mx-auto rounded-full my-6">
                    <div class="px-3 py-2  capitalize text-white text-2xl font-semibold text-center">client name</div>
                    <div class=" h-64 flex align-middle text-justify text-white w-full overflow-ellipsis flex-wrap px-2 py-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe aspernatur a rem, sit quaerat tempore debitis veniam distinctio quidem optio atque alias qui, laboriosam laborum doloribus ipsa voluptate? Illum, illo.</div>
                </div>
                <div class="my-2 mx-3  w-60 gap-2 bg-gray-800 items-center inline-block rounded-md">
                    <img src=" {{ url('img\user1.jpg') }} " alt="" class=" h-44 w-44 mx-auto rounded-full my-6">
                    <div class="px-3 py-2  capitalize text-white text-2xl font-semibold text-center">client name</div>
                    <div class=" h-64 flex align-middle text-justify text-white w-full overflow-ellipsis flex-wrap px-2 py-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe aspernatur a rem, sit quaerat tempore debitis veniam distinctio quidem optio atque alias qui, laboriosam laborum doloribus ipsa voluptate? Illum, illo.</div>
                </div>
                <div class="my-2 mx-3  w-60 gap-2 bg-gray-800 items-center inline-block rounded-md">
                    <img src=" {{ url('img\user1.jpg') }} " alt="" class=" h-44 w-44 mx-auto rounded-full my-6">
                    <div class="px-3 py-2  capitalize text-white text-2xl font-semibold text-center">client name</div>
                    <div class=" h-64 flex align-middle text-justify text-white w-full overflow-ellipsis flex-wrap px-2 py-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe aspernatur a rem, sit quaerat tempore debitis veniam distinctio quidem optio atque alias qui, laboriosam laborum doloribus ipsa voluptate? Illum, illo.</div>
                </div>
            
            </div>
            
            
        </div>
        
    </div>
    

    @include('front-end.template.footer')
</body>
</html>