<!DOCTYPE html>
<html lang="en">
<head>
    @include('front-end.template.top')
</head>
<body>
    @include('front-end.template.header')

    <div class="w-full text-center text-2xl font-serif font-bold capitalize pt-12 pb-4 text-blue-800">Our customers enjoy</div>
    
    @section('testimonySection')
    @endsection
    <div class="px-0 sm:px-4 md:px-10 py-4 justify-center">
        <div class=""></div>
    </div>

    @include('front-end.template.footer')
</body>
</html>