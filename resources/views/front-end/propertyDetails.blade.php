<!DOCTYPE html>
<html lang="en">
<head>
    @include('front-end.template.top')
    <style>
        .top_back{
            border-right: 30vw solid white;
            z-index: -1;
            background-color: rgba(52, 221, 153, 0);
            
        }
    </style>
</head>
<body class="">
    <div class="top_back h-full w-full absolute bg-green-400"></div>

    @include('front-end.template.header')


    <!-- Proper details template -->
    <div class="md:grid grid-cols-3 my-16 h-screen">

        <!-- left pane; for property details and related property -->
        <div class="col-span-2 px-3 h-full flex align-middle items-center justify-center">
            <img src="{{ url('img/GetStoredImage.jpeg') }}" alt="" class="w-10/12 h-full rounded-lg" >
        </div>

        <!-- right pane for property details -->
        <div class="px-6 flex align-middle justify-center items-center h-full">
            <div class="w-full text-2xl text-center font-semibold py-2 capitalize">Property details</div>
        </div>
    </div>


    @include('front-end.template.footer')
</body>
</html>