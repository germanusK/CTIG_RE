<!DOCTYPE html>
<html lang="en">
<head>
    @include('front-end.template.top')
</head>
<body>
    @include('front-end.template.header')

    <div class="w-full text-center text-3xl font-serif font-bold capitalize pt-12 pb-4 text-blue-800">Our customers enjoy</div>
    
    @section('testimonySection')
    @endsection
    <div class="sm:grid grid-cols-3 gap-3 my-8">
        <div class="w-11/12 mx-auto py-4 justify-center col-span-2 h-screen overflow-y-scroll no-scrollbar">
            <div class="my-2 grid grid-cols-6 p-2 gap-2 bg-gray-800 items-center">
                <img src=" {{ url('img\skuffwdd114.jpg') }} " alt="" class="h-full w-full p-4 col-span-2 rounded-lg">
                <div class="text-justify text-white w-full h-full col-span-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe aspernatur a rem, sit quaerat tempore debitis veniam distinctio quidem optio atque alias qui, laboriosam laborum doloribus ipsa voluptate? Illum, illo.</div>
            </div>
            <div class="my-2 grid grid-cols-6 p-2 gap-2 bg-gray-800 items-center">
                <img src=" {{ url('img\skuffwdd114.jpg') }} " alt="" class="h-full w-full p-4 col-span-2 rounded-lg">
                <div class="text-justify text-white w-full h-full col-span-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe aspernatur a rem, sit quaerat tempore debitis veniam distinctio quidem optio atque alias qui, laboriosam laborum doloribus ipsa voluptate? Illum, illo.</div>
            </div>
            <div class="my-2 grid grid-cols-6 p-2 gap-2 bg-gray-800 items-center">
                <img src=" {{ url('img\skuffwdd114.jpg') }} " alt="" class="h-full w-full p-4 col-span-2 rounded-lg">
                <div class="text-justify text-white w-full h-full col-span-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe aspernatur a rem, sit quaerat tempore debitis veniam distinctio quidem optio atque alias qui, laboriosam laborum doloribus ipsa voluptate? Illum, illo.</div>
            </div>
            <div class="my-2 grid grid-cols-6 p-2 gap-2 bg-gray-800 items-center">
                <img src=" {{ url('img\skuffwdd114.jpg') }} " alt="" class="h-full w-full p-4 col-span-2 rounded-lg">
                <div class="text-justify text-white w-full h-full col-span-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe aspernatur a rem, sit quaerat tempore debitis veniam distinctio quidem optio atque alias qui, laboriosam laborum doloribus ipsa voluptate? Illum, illo.</div>
            </div>
            <div class="my-2 grid grid-cols-6 p-2 gap-2 bg-gray-800 items-center">
                <img src=" {{ url('img\skuffwdd114.jpg') }} " alt="" class="h-full w-full p-4 col-span-2 rounded-lg">
                <div class="text-justify text-white w-full h-full col-span-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe aspernatur a rem, sit quaerat tempore debitis veniam distinctio quidem optio atque alias qui, laboriosam laborum doloribus ipsa voluptate? Illum, illo.</div>
            </div>
            <div class="my-2 grid grid-cols-6 p-2 gap-2 bg-gray-800 items-center">
                <img src=" {{ url('img\skuffwdd114.jpg') }} " alt="" class="h-full w-full p-4 col-span-2 rounded-lg">
                <div class="text-justify text-white w-full h-full col-span-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe aspernatur a rem, sit quaerat tempore debitis veniam distinctio quidem optio atque alias qui, laboriosam laborum doloribus ipsa voluptate? Illum, illo.</div>
            </div>
            <div class="my-2 grid grid-cols-6 p-2 gap-2 bg-gray-800 items-center">
                <img src=" {{ url('img\skuffwdd114.jpg') }} " alt="" class="h-full w-full p-4 col-span-2 rounded-lg">
                <div class="text-justify text-white w-full h-full col-span-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe aspernatur a rem, sit quaerat tempore debitis veniam distinctio quidem optio atque alias qui, laboriosam laborum doloribus ipsa voluptate? Illum, illo.</div>
            </div>
        </div>
        <div class="w-full justify-center py-4 h-screen overflow-y-scroll no-scrollbar">
            <div class="w-full my-2"><img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="w-full h-full rounded"></div>     
            <div class="w-full my-2"><img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="w-full h-full rounded"></div>
            <div class="w-full my-2"><img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="w-full h-full rounded"></div>
            <div class="w-full my-2"><img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="w-full h-full rounded"></div>
            <div class="w-full my-2"><img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="w-full h-full rounded"></div>
            <div class="w-full my-2"><img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="w-full h-full rounded"></div>
            <div class="w-full my-2"><img src=" {{ url('img\skuffwdd60.jpg') }} " alt="" class="w-full h-full rounded"></div>

        </div>
    </div>
    

    @include('front-end.template.footer')
</body>
</html>