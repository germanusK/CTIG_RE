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
            /* border-left: 42rem solid rgba(00, 00, 00, 0.7);
            border-right: 42rem solid rgba(00, 00, 00, 0.7); */
            /* border-top: 3rem solid transparent; */
            z-index: -2;
        }
        .prop_item{
            min-height: 68vh;
        }
    </style>
</head>
<body>

    <div class="top-design absolute sm:grid grid-cols-2 mb-32 bg-gray-900">
        <div class="h-full"></div>
        <div class="flex align-middle items-center h-full">
            <img src=" {{ url('img/buildings.svg') }} " class="h-3/4"/>
        </div>
    </div>    

    @include('front-end.template.header')

    <!-- Map showing different sites -->
    <div class="w-full h-40 sm:h-72 flex align-middle items-center text-white stroke-2 text-2xl py-14 font-semibold capitalize">
        <span class="text-6xl sm:my-12 mx-auto animate-pulse">our properties</span><br>
        <!-- What we have for you -->
    </div>


    <!-- Home Text info -->
    <!-- outstanding property -->
    <div class="w-full   pt-20 bg-white">
        <div data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom" data-aos-offset="200" class="w-11/12 md:w-10/12 mx-auto py-6 text-3xl text-justify tracking-wide leading-relaxed">
            <p>The unavoidable use of real property is the reason why everyone must acquire real property. Real estate is a necessity in all domains of life. With this knowledge, we then come in to present a "more than a neccessity real property" as a support to your endeavors. </p>
            <p>Knowing that security is at the core of every business, we then come assuring you security and working towards a modern society where ever we are.</p>
        </div> 
        <div class="no-scrollbar border-b-4 border-white py-12 overflow-x-scroll whitespace-nowrap bg-gray-400 text-white justify-center">
            <div class="text-center text-3xl py-8 font-bold capitalize">Trending deals</div>
        
            <div class="w-full flex flex-nowrap gap-9 _container"> 
            <?php $i = 0; ?>                   
                <div id="{{$i}}_slider" class="w-full h-auto py-10 min-h-screen relative">
                    <div data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="200" class="block sm:w-11/12 md:w-10/12 mx-auto relative" style="min-height: 32rem;">
                        <img src=" {{ url($trending[$i]['site_map']) }} " alt="" class="w-full h-full absolute top-0 left-0"  style="max-height: 32rem;">
                        <a class="h-full absolute w-full top-0 left-0">
                            <div class="h-full w-full">
                                <div class="w-full h-full">
                                    <span id="ctrl_right_".{{$i}} class="ctrl_right h-full flex align-middle items-center bg-gradient-to-r from-transparent to-gray-500 float-right text-6xl py-2 px-6  text-gray-600 leading-10 tracking-tighter font-semibold" onclick="next()">></span>
                                    <span id="ctrl_left_".{{$i}} class="ctrl_left h-full flex align-middle items-center bg-gradient-to-l from-transparent to-gray-500 float-left text-6xl py-2 px-6  text-gray-600 leading-10 tracking-tighter font-semibold" onclick="previous()"><</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div data-aos="fade-in" data-aos-duration="1500" data-aos-offset="200" id="slider_caption" class="sm:w-11/12 md:w-10/12 mx-auto max-h-48 overflow-ellipsis flex flex-wrap whitespace-pre break-words py-1 text-center text-lg text-gray-200 tracking-wide font-semibold leading-snug">
                        <div class="w-full text-center flex-wrap">
                            @if (isset($trending[$i]['name']))
                                <span class="font-bold  text-2xl">{{ $trending[$i]['name'] }}</span>
                            @else
                                <span class="font-bold  text-2xl">Property</span> : 
                            @endif 
                            @if(isset($trending[$i]['site_number']))
                                No : <span class="text-ld">{{ $trending[$i]['site_number'] }} </span> 
                            @endif 
                            @if (isset( $trending[$i]['coords']))
                                Coordinates  <span class="text-lg">{{ $trending[$i]['coords'] }}</span>
                            @endif
                            @if(isset($trending[$i]['situated_at']))<span class="text-justify text-xl block w-full break-word whitespace-pre-wrap"><span class="text-xl text-gray-200">{{ $trending[$i]['situated_at'] }} :</span> @if($trending[$i]['description']) {{ $trending[$i]['description'] }} @endif</span>@endif
                        </div>
                    </div>
                    <div class="sm:w-11/12 md:w-10/12 mx-auto py-2 justify-end text-right text-gray-100">
                        <a href=" {{ url('appointments/'.$trending[$i]['id']) }} " class="shadow-lg px-3 py-1 rounded-full text-xl border-2 border-gray-300 font-semibold">Book a visit</a>
                        <a href=" {{ url('details/'.$trending[$i]['id']) }} "  class="shadow-lg px-3 py-1 rounded-full text-xl border-2 border-gray-300 font-semibold">details</a>
                    </div>
                </div>
                <script>
                    function next() {
                        <?php echo ($i+1)%(count($trending)); ?>
                    }
                    function previous() {
                        <?php echo ($i - 1)%(count($trending)); ?>
                    }
                </script>
            </div>
        </div>
    </div>

    <!-- Site image slide -->
    <div class="no-scrollbar flex py-12 overflow-x-scroll whitespace-nowrap bg-gray-400 text-white"></div>
    <div class="w-full bg-white pb-12">
        <div data-aos="flip-left" data-aos-duration="1500" data-aos-offset="200"  class="w-11/12 md:w-10/12 mx-auto py-6 px-4 bg-gray-400 sm:grid grid-cols-3 gap-2 items-center  shadow-2xl">
            <div>
                <div class="text-center font-bold text-3xl py-3">Team at work</div>
                <div id="_cap" class="text-2xl text-center font-semibold leading-relaxed"> </div>
            </div>
            <div class="col-span-2 rounded-lg bg-gray-200 sm:h-62 md:h-96">
                <img id="_img" src="" alt="" class="w-full h-full rounded-lg an">
            </div>
        </div>
        <script>
            const data = [
                {
                    image: " {{ url('img/img1.jpg') }} ", caption: "On our journey to retrace the footprints to the new modern environment. No sleep, no slumber "
                },
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

            document.getElementById('_img').src = data[cnt%data.length].image;
            document.getElementById('_cap').innerText = data[cnt%data.length].caption;
            cnt = ++cnt%data.length;

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
    <div class="w-full bg-white py-12">
        <div class="col-span-2 text-center text-gray-900 text-3xl font-semibold py-5 capitalize flex justify-center">
            @for ($i = 0; $i < 18 ; $i++)
                <span class=" w-3 h-3 inline-block mx-1 border-4 border-double border-gray-900 rounded-full"></span>
            @endfor
        </div>
        <div class="w-11/12 md:w-10/12 mx-auto shadow-inner rounded-md md:grid grid-cols-2 xl:grid-cols-3 gap-4 justify-center text-center">
            <?php for($i = 0; $i < count($sites); $i++){ ?>
                <a href="{{ url('details/'.$sites[$i]['id']) }}" data-aos="zoom-up" data-aos-duration="1500" data-aos-offset="200" class="my-6 p-1 w-10/12 mx-auto bg-gray-400 h-auto prop_item rounded-md shadow-md">
                    <img src=" {{ url($sites[$i]['site_map']) }} " alt="" class="h-96 w-full rounded py-1">
                    <div class="caption height-auto max-h-40 w-full py-1 overflow-y-hidden text-sm text-justify text-gray-700">
                        <div class="py-1 text-center text-lg font-semibold capitalize"> {{ $sites[$i]['name'] }} : {{ $sites[$i]['site_number'] }} </div>
                        <div class="py-1 text-center italic">created on <i> {{ $sites[$i]['created_at'] }} </i> </div>
                        <div class="pb-2 text-base"> <strong> {{ $sites[$i]['situated_at'] }} </strong> : {{ $sites[$i]['description'] }} </div>
                    </div>
                </a>
            <?php } ?>
        </div>
        <div class="w-11/12 md:w-10/12 text-right col-span-3 md:col-span-5">
            <button class="text-center mx-auto py-1 px-3 rounded-full border-4 shadow-md border-gray-600 bg-gray-300 font-semibold text-lg text-gray-700">show all</button>
        </div>    
    </div>
    @include('front-end.template.footer')
</body>
</html>