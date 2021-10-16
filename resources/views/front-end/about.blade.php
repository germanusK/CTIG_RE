<!DOCTYPE html>
<html lang="en">
    <head>
    @include('front-end/template/top')
    </head>
    <body>
        @include('front-end/template/header')

        @section('aboutBody')
        @endsection
        
        <div class="w-screen md:w-9/12 mx-auto my-8 py-6 overflow-x-scroll space-x-4 whitespace-nowrap no-scrollbar">
            <div class="flex w-min overflow-hidden whitespace-nowrap">
                <div class="h-8/12 hover:h-11/12 w-72 mx-2 p-2 items-center align-middle rounded-lg overflow-hidden">
                    <div class="w-full h-full">
                        <img src=" {{ url('img\skuffwdd114.jpg') }} " alt="" class="w-full h-full z-0 object-contain">
                        <div class="w-full h-full text-center z-10 bg-transparent text-lg">Name and position</div>
                    </div>
                </div>
                <div class="h-8/12 hover:h-11/12 w-72 mx-2 p-2 items-center align-middle rounded-lg overflow-hidden">
                    <div class="w-full h-full">
                        <img src=" {{ url('img\skuffwdd114.jpg') }} " alt="" class="w-full h-full z-0 object-contain">
                        <div class="w-full h-full text-center z-10 bg-transparent text-lg"> Name and position</div>
                    </div>
                </div>
                <div class="h-8/12 hover:h-11/12 w-72 mx-2 p-2 items-center align-middle rounded-lg overflow-hidden">
                    <div class="w-full h-full">
                        <img src=" {{ url('img\skuffwdd114.jpg') }} " alt="" class="w-full h-full  z-0 object-contain">
                        <div class="w-full h-full text-center z-10 bg-transparent text-lg">Name and position</div>
                    </div>
                </div>
                <div class="h-8/12 hover:h-11/12 w-72 mx-2 p-2 items-center align-middle rounded-lg overflow-hidden">
                    <div class="w-full h-full">
                        <img src=" {{ url('img\skuffwdd114.jpg') }} " alt="" class="w-full h-full  z-0 object-contain">
                        <div class="w-full h-full text-center z-10 bg-transparent text-lg">Name and position</div>
                    </div>
                </div>
                <div class="h-8/12 hover:h-11/12 w-72 mx-2 p-2 items-center align-middle rounded-lg overflow-hidden">
                    <div class="w-full h-full">
                        <img src=" {{ url('img\skuffwdd114.jpg') }} " alt="" class="w-full h-full  z-0 object-contain">
                        <div class="w-full h-full text-center z-10 bg-transparent text-lg">Name and position</div>            
                    </div>
                </div>
                <div class="h-8/12 hover:h-11/12 w-72 mx-2 p-2 items-center align-middle rounded-lg overflow-hidden">
                    <div class="w-full h-full">
                        <img src=" {{ url('img\skuffwdd114.jpg') }} " alt="" class="w-full h-full  z-0 object-contain">
                        <div class="w-full h-full text-center z-10 bg-transparent text-lg">Name and position</div>
                    </div>
                </div>
                <div class="h-8/12 hover:h-11/12 w-72 mx-2 p-2 items-center align-middle rounded-lg overflow-hidden">
                <div class="w-full h-full">
                        <img src=" {{ url('img\skuffwdd114.jpg') }} " alt="" class="w-full h-full  z-0 object-contain">
                        <div class="w-full h-full text-center z-10 bg-transparent text-lg">Name and position</div>
                    </div>
                </div>
            </div>
            <div class="text-justify text-gray-100 px-6 py-4"></div>
        </div>
         
        @include('front-end/template/footer')
        
    </body>
</html>