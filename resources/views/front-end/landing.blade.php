<!DOCTYPE html>
<html lang="en">
<head>
    @include('front-end.template.top')
    <style>
        
        .top1{
            background-image: url( "{{asset('/img/bgl.jpg')}}" );
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

    </style>
</head>
<body>
    <div class="top1   bg-cover bg-center w-full min-h-screen">
            
        
        <div class=" w-full min-h-screen bg-opacity-500">

            <div class="py-6 px-auto grid grid-cols-3">
                <a href=" {{ url('/') }} " class="col-span-1 mx-10 my-2 w-16 h-16 rounded-full overflow-hidden"><img src=" {{ url('img\logo.jpg') }} " alt="BRAND IMAGE" class="w-full h-full"></a>
            </div>
            <div class="sm:grid grid-cols-2 gap-4">

                <div class="flex align-middle justify-center py-10 md:py-16">
                    <div>
                        <div class="text-center text-xl md:text-5xl font-black font-mono text-white uppercase break-words"> CT Inc real property</div>
                        <div class="text-center text-lg text-white font-semibold">A new modern look at real property.</div>
                        <div class="py-28 w-full text-right block">
                            <a href=" {{ url('home') }} " class="px-8 py-4 w-min rounded-full capitalize border-2 border-green-700 bg-green-200 text-green-700 font-semibold mx-auto">get started</a>
                        </div>
                    </div>
                </div>
                <div class="h-full max-h-screen px-8">

                    <img src=" {{ url('img/house.svg') }} " alt="" class="rounded opacity-90">
                </div>
            </div>
        </div>
    </div>
</body>
</html>