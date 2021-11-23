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
        .mov1{
            transform: matrix(1, 3, 9, 0, 2, 5, 4, 6, 8) ;
        }
    </style>
</head>
<body>
    <div class="top1   bg-cover bg-center w-full min-h-screen relative">
            
        <div class=" w-full h-full bg-blue-900 bg-opacity-10 align-middle items-center justify-between absolute z-0">
            <div class="w-full h-full relative">
                <div id="target1" class="absolute w-20 h-20 bg-pink-500 rounded-lg border-8 border-pink-700 inline-block my-20 mx-auto"></div>
                <div id="target2" class="absolute w-28 h-36 bg-gray-200 rounded-full border-8 border-pink-600 my-20 inline-block mx-auto"></div>
                <div id="target3" class="absolute px-7 py-3 bg-blue-100 text-blue-900 rounded-full my-14 inline-block mx-auto text-5xl">moving</div>
                <div id="target4" class="absolute w-24 h-24"><img src="{{ url('img/icon_property.svg') }}" alt="" class="w-full h-full"></div>
            </div>
        </div>


        <div class=" w-full min-h-screen absolute bg-blue-800 bg-opacity-80 z-10">

            <div class="py-6 px-auto grid grid-cols-3">
                <a href=" {{ url('/') }} " class="col-span-1 mx-10 my-2 w-16 h-16 rounded-full overflow-hidden"><img src=" {{ url('img\logo.jpg') }} " alt="BRAND IMAGE" class="w-full h-full"></a>
            </div>
            <div class="sm:grid grid-cols-2 gap-4">

                <div class="flex align-middle justify-center py-10 md:py-16">
                    <div>
                        <div class="text-center text-2xl md:text-5xl font-black font-mono text-white uppercase break-words animate-pulse"> CT Inc real property</div>
                        <div class="text-center text-xl text-white font-semibold animate__animated animate__lightSpeedInRight">A new modern look at real property.</div>
                        <div class="py-28 w-full text-center block">
                            <a href=" {{ url('home') }} " class="px-8 py-4 w-min rounded-full capitalize border-6 border-blue-900 bg-blue-200 text-blue-900 text-2xl font-semibold mx-auto animate__animated animate__flash">get started</a>
                        </div>
                    </div>
                </div>
                <div class="h-full max-h-screen px-8">

                    <img src=" {{ url('img/house.svg') }} " alt="" class="rounded opacity-90">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
    <script>
        let animate = function(){
            let targets = [document.querySelector("#target1"), document.querySelector("#target2"), document.querySelector("#target3"), document.querySelector("#target4")];
            let transforms = [
                `matrix(${Math.random()*1000}, ${Math.random()*100}, ${Math.random()*500}, ${Math.random()*250}, ${Math.random()*1200}, ${Math.random()*800} )`,
                `rotate(${Math.random()*90}deg)`,
                `scale(${Math.random()*4}, ${Math.random()*3})`, 
                `skew(${(Math.random()*90)}deg, ${(Math.random()*90)}deg)`,
                `perspective(${Math.random()*100}px)`
            ];
            
            setInterval(function(){
                document.querySelector("#target1").style.transform = `translate(${window.visualViewport.width * Math.random()}, ${window.visualViewport.height * Math.random()}) ${transforms[(Math.random()*4)]}`;
                document.querySelector("#target1").style.transition = `all ${(Math.random()*10 + 1)}s ease-in`;
                
            }, 2000 + Math.random()*9000);
        }
        
        requestAnimationFrame(animate)
    </script>
</body>
</html>