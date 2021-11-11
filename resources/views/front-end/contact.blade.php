<!DOCTYPE html>
<html lang="en">
<head>
    @include('front-end.template.top')
    <style>
        body{
            background-image: url("{{ url('img/contact_bg1.jpg') }}");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    
    @include('front-end.template.header')
    
    <div class="w-full py-20 text-blue-900 text-4xl text-center font-semibold tracking-wide">Contact Us</div>
    
    <!-- main view for contacts -->
    <div class="w-full min-h-screen py-20 bg-blue-200">
        <div class="my-8 w-11/12 sm:w-9/12 h-4/6 mx-auto">
            <div class="w-full col-span-3" style="min-height: 20rem; height: 75vh">
                <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d580.5513309133453!2d9.291069633733013!3d4.15366333153835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d4.1538436!2d9.2912061!5e0!3m2!1sen!2scm!4v1634235717294!5m2!1sen!2scm" class="w-full h-full px-6 rounded" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="w-full h-full flex flex-wrap justify-center font-semibold">
                <div class="my-3 mx-3 w-44 inline-block text-center py-2 px-2"><div class="justify-center w-full mx-4"><img class="w-16 h-16 rounded-full mx-auto my-3" src="{{ url('img/location_icon.png') }}" alt=""></div><span class="text-blue-700 mx-4 block w-full text-center">UB Juction, Molyko, Buea</span></div>
                <div class="my-3 mx-3 w-44 inline-block text-center py-2 px-2"><div class="justify-center w-full mx-4"><img class="w-16 h-16 rounded-full mx-auto my-3" src="{{ url('img/email_icon.jpg') }}" alt=""></div><span class="text-blue-700 mx-4 block w-full text-center">myOfficeEmail@gmail.com</span></div>
                <div class="my-3 mx-3 w-44 inline-block text-center py-2 px-2"><div class="justify-center w-full mx-4"><img class="w-16 h-16 rounded-full mx-auto my-3" src="{{ url('img/call_icon.png') }}" alt=""></div><span class="text-blue-700 mx-4 block w-full text-center">(+237) 678395403/656872385</span></div>
                <div class="my-3 mx-3 w-44 inline-block text-center py-2 px-2"><div class="justify-center w-full mx-4"><img class="w-16 h-16 rounded-full mx-auto my-3" src="{{ url('img/whatsapp_icon.png') }}" alt=""></div><span class="text-blue-700 mx-4 block w-full text-center">(+237) 678395403/656872385</span></div>
                <div class="my-3 mx-3 w-44 inline-block text-center py-2 px-2"><div class="justify-center w-full mx-4"><img class="w-16 h-16 rounded-full mx-auto my-3" src="{{ url('img/website_icon.png') }}" alt=""></div><span class="text-blue-700 mx-4 block w-full text-center"><a href="">Visit our website</a></span></div>
            </div>
        </div>
    </div>


    @include('front-end.template.footer')
</body>
</html>