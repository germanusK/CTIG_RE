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
            <img src="{{ $data['site_map'] ?? null }} " alt="" class="w-11/12 h-5/6 absolute z-10 border-2 border-white" usemap="#image_map">
            <map name="image_map">
                <area shape="rect" title="SLOT1" alt="SLOT1" coords="0, 0, 238, 124", href="http://www.remoteOk.io">
            </map>
        </div>
        <!-- right pane for property details -->
        <div class="px-6 flex align-middle justify-center items-center h-full rounded-l-full shadow-2xl bg-gray-100 text-blue-900">
            @if(isset($data))<div class="w-full text-xl text-center py-2"><strong class=" capitalize">@if(isset($data['name'])) {{$data['name']}} @endif</strong> : @if(isset($data['site_number'])) <i>{{$data['site_number']}}</i>@endif
                <br>
                @if(isset($data['created_at']))<i class="text-xl">created on {{$data['created_at']}} </i>@endif
                <br><i class="text-xl">@if(isset($data['asset_count'])) {{$data['asset_count']}} total, @endif @if(isset($data['available_asset_count'])) {{$data['availble_asset_count']}} available @endif </i>
                <br>
                <span> @if(isset($data['location_name'])) Situated at <strong>{{$data['location_name']}}</strong> @endif : @if(isset($data['coords']))<i>{{$data['coords']}}</i> @endif </span> 
                <br>
                @if(isset($data['description']))<span class="text-xl"> {{$data['description']}} </span><br/> @endif
                <a href=" {{ url('appointments/'.$data['id'] ) }} " class="block w-2/3 mx-auto my-6 px-3 py-2 bg-gray-900 border-2 text-white border-white rounded-full">book a visit</a>
            </div>@endif
            
        </div>
        
        <div class="w-full gap-4 py-16 md:px-12 md:col-span-3 mx-auto flex flex-wrap justify-center text-center bg-gray-700">
        @for ($i = 0; $i < 12; $i++)
            <div class="w-20 h-20  align-middle items-center bg-gray-200 text-white rounded-md">Plot {{ $i }}</div>
        @endfor
        </div>
    </div>
    


    @include('front-end.template.footer')
</body>
</html>