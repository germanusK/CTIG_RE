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
        .prop_item{
            height: 68vh;
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
    <div class="w-full h-40 sm:h-72 flex align-middle items-center text-white stroke-2 text-2xl py-14 font-semibold capitalize">
        <span class="text-6xl sm:my-12 mx-auto">our properties</span><br>
        <!-- What we have for you -->
    </div>


    <!-- Home Text info -->
    <!-- outstanding property -->
    <div class="w-full   py-20 bg-white">
        <div class="w-10/12 md:w-9/12 mx-auto py-6 text-3xl tracking-wide leading-relaxed">
            <p>The unavoidable use of real property is the reason why everyone must acquire real property. Real estate is a necessity in all domains of life. With this knowledge, we then come in to present a "more than a neccessity real property" as a support to your endeavors. </p>
            <p>Knowing that security is at the core of every business, we then come assuring you security and working towards a modern society where ever we are.</p>
        </div> 
        <div class="text-center text-3xl py-8 font-bold capitalize">Trending deals</div>
        
        <div class="no-scrollbar flex py-12 overflow-x-scroll whitespace-nowrap bg-gray-800 text-white">
            <div class="w-max flex flex-nowrap gap-9 _container">
                @for ($i=0; $i < count($trending) ; $i++)
                    <div id="{{$i}}_slider" class="w-screen h-auto py-10 min-h-screen relative shadow-xl">
                    
                        <div class="block sm:w-11/12 md:w-10/12 mx-auto w-full relative" style="min-height: 32rem;">
                            <img src=" {{ url($trending[$i]['site_map']) }} " alt="" class="w-full h-full absolute top-0 left-0"  style="max-height: 32rem;">
                            <a href=" {{ url('details/'.$trending[$i]['id']) }} " class="h-full absolute w-full top-0 left-0">
                                <div class="h-full w-full">
                                    <div class="w-full h-full">
                                        <span id="ctrl_right_".{{$i}} class="ctrl_right h-full flex align-middle items-center bg-gradient-to-l from-transparent to-gray-400 float-right text-6xl py-2 px-6  text-gray-600 leading-10 tracking-tighter font-semibold">></span>
                                        <span id="ctrl_left_".{{$i}} class="ctrl_left h-full flex align-middle items-center bg-gradient-to-r from-transparent to-gray-400 float-left text-6xl py-2 px-6  text-gray-600 leading-10 tracking-tighter font-semibold"><</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div id="slider_caption" class="sm:w-10/12 md:w-9/12 mx-auto max-h-44 flex flex-wrap whitespace-pre break-words py-1 px-4 text-center text-lg text-gray-200 tracking-wide font-semibold leading-snug">
                            <div class="w-full text-center">
                                <span class="font-bold  text-2xl">{{ $trending[$i]['name'] }}</span> : No<span class="text-ld"> {{ $trending[$i]['site_number'] }} </span>, Coordinates  <span class="text-lg"> {{ $trending[$i]['latitude'] }} : {{ $trending[$i]['longitude'] }} </span>
                                <span class="text-justify text-xl block w-full break-word whitespace-pre-wrap"><span class="text-xl text-gray-200">{{ $trending[$i]['situated_at'] }} :</span> {{ $trending[$i]['description'] }} </span>
                            </div>
                        </div>
                        <div class="sm:w-10/12 md:w-9/12 mx-auto py-2 justify-end text-right text-gray-100">
                            <a href=" {{ url('appointments/'.$trending[$i]['id']) }} " class="shadow-lg px-5 py-3 text-xl border-2 border-gray-300 font-semibold">Book a visit</a>
                            <a href="" class="shadow-lg px-5 py-3 text-xl border-2 border-gray-300 font-semibold">Buy</a>
                        </div>
                    </div>
                @endfor
            </div>

        </div>
    </div>

    <!-- Site image slide -->
    <div class="w-full bg-white">
        <div class="w-10/12 md:w-9/12 mx-auto py-6 sm:grid grid-cols-3 gap-2 items-center">
            <div>
                <div class="text-center font-bold text-3xl py-3">Team at work</div>
                <div id="_cap" class="text-2xl text-center font-semibold leading-relaxed"> </div>
            </div>
            <div class="col-span-2 rounded-lg bg-gray-200 sm:h-62 md:h-96">
                <img id="_img" src=" {{ url('img\img1.jpg') }} " alt="" class="w-full h-full rounded-lg an">
            </div>
        </div>
        <script>
            const data = [
                {
                    image: " {{ url('img/team.jpg') }} ", caption: "The field is broad but the power of determination is Our moto force. We pull the mighty structure by the strength of our vision embeded in each and every one. "
                },
                {
                    image: "{{ url('img/staff.jpg') }}", caption: "None is left behind. Unity is the power that achives the seemingly impossible thing. "
                },
                {
                    image: " {{ url('img/at-work01.jpg') }} ", caption: "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae consequatur quibusdam non recusandae placeat provident aliquam esse"
                },
                {
                    image: " {{ url('img/at-work02.jpg') }} ", caption: "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae consequatur quibusdam non recusandae placeat provident aliquam esse"
                },
                {
                    image: " {{ url('img/at-work03.jpg') }} ", caption: "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae consequatur quibusdam non recusandae placeat provident aliquam esse"
                }
            ];
            let cnt = 0;
            setInterval(function() {
                
                document.getElementById('_cap').parentElement.classList.toggle('animate-spin');

                setTimeout(function(){
                
                    // document.getElementById('_cap').parentElement.classList.toggle('animate-bounce');
                    document.getElementById('_img').src = data[cnt%data.length].image;
                    document.getElementById('_cap').innerText = data[cnt%data.length].caption;
                    cnt = ++cnt%data.length;
                }, 700);
                setTimeout(function(){
                    document.getElementById('_cap').parentElement.classList.toggle('animate-spin');
                }, 1000);
                
            }, 10000);
        </script>
    </div>

    <!-- Other properties -->
    <div class="w-full bg-white py-20">
        <div class="col-span-2 text-center text-gray-900 text-3xl font-semibold py-8 capitalize">Other property</div>
        <div class="w-full md:grid grid-cols-2 xl:grid-cols-3 gap-4 justify-center text-center">
            <?php for($i = 0; $i < count($sites); $i++){ ?>
                <div class="my-12 p-1 w-10/12 mx-auto h-auto prop_item rounded-md shadow-md">
                    <img src=" {{ url($sites[$i]['site_map']) }} " alt="" class="h-96 w-full rounded py-1">
                    <div class="caption height-auto max-h-40 w-full py-1 overflow-y-hidden text-sm text-justify text-gray-700">
                        <div class="py-1 text-center text-2xl px-4 font-semibold capitalize"> {{ $sites[$i]['name'] }} : {{ $sites[$i]['site_number'] }} </div>
                        <div class="py-1 text-center text-xl px-4">created on <strong> {{ $sites[$i]['created_at'] }} </strong> </div>
                        <div class="px-2 pb-2 text-xl"> <strong> {{ $sites[$i]['situated_at'] }} </strong> : {{ $sites[$i]['description'] }} </div>
                    </div>
                </div>
            <?php } ?>
        </div>
            
            <button class="text-center mx-auto py-5 px-12 col-span-3 md:col-span-5 font-semibold text-lg text-blue-800">show all</button>
        </div>
    </div>

    



    
   
    

    @include('front-end.template.footer')
</body>
</html>