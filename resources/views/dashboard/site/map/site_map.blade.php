<!DOCTYPE html>
<html lang="en">
<head>
    @include('front-end.template.top')
    <style>
    </style>
</head>
<body class="bg-gray-800">

    @include('front-end.template.header')


    <!-- Proper details template -->
    <div class="md:grid grid-cols-3 mt-24 py-16 min-h-screen bg-white">

        <!-- left pane; for property details and related property -->
        <div class="col-span-2 px-3 min-h-screen flex align-middle items-center justify-center relative">
            <img src="{{ $data['site_map'] }} " alt="" class="w-11/12 h-5/6 absolute z-10 border-2 border-white" usemap="#image_map">
            <div class=" w-9/12 left-0 h-full absolute rounded-r-full bg-gray-900 z-0"></div>
            <map name="image_map">
                <area shape="rect" title="SLOT1" alt="SLOT1" coords="0, 0, 238, 124", href="http://www.remoteOk.io">
            </map>
        </div>
        <!-- right pane for property details -->
        <div class="px-6 flex align-middle justify-center items-center h-full rounded-l-full shadow-2xl bg-gray-900 text-white">
            <div class="w-full text-2xl text-center py-2"><strong class=" capitalize"> {{$data['name']}} : <i>{{$data['site_number']}}</i> </strong>
                <br>
                <i class="text-xl">created on {{$data['created_at']}} </i>
                <br><i class="text-xl"> {{$data['asset_count']}} total, {{$data['asset_count']}} available </i>
                <br>
                <span>Situated at <strong>{{$data['location_name']}}</strong> : <i>{{$data['latitude']}} - {{$data['longitude']}}</i> </span> 
                <br>
                <span class="text-xl"> {{$data['description']}} </span>
            </div>
        </div>
        <div class="w-11/12 gap-4 py-16  md:col-span-3 md:w-8/12 mx-auto flex flex-wrap justify-center text-center">
        @for ($i = 0; $i < 48; $i++)
            <div class="w-20 h-20 shadow-xl align-middle items-center bg-gray-900 text-white border-4 border-double border-blue-900">Plot {{ $i }}</div>
        @endfor
        </div>
    </div>
    


    @include('front-end.template.footer')
</body>
</html>