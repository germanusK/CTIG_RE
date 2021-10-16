<!DOCTYPE html>
<html lang="en">
<head>
    @include('front-end.template.top')
</head>
<body>
    @include('front-end.template.header')

    <!-- main view for contacts -->
    <div class="my-8 mx-4 sm:grid grid-cols-4 gap-2">
        <div class="w-full col-span-3" style="min-height: 20rem; height: 75vh">
        <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d580.5513309133453!2d9.291069633733013!3d4.15366333153835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d4.1538436!2d9.2912061!5e0!3m2!1sen!2scm!4v1634235717294!5m2!1sen!2scm" class="w-full h-full px-6" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        
        <div class="w-full h-full font-semibold px-3">
            <ul class=" list-none  ">
                <li class="my-3 rounded bg-green-200 text-center py-2 px-4"><span class="text-sm text-gray-700 mx-4">Office</span> : <span class="text-blue-700 mx-4 inline-block">UB Juction, Molyko, Buea</span></li>
                <li class="my-3 rounded bg-green-200 text-center py-2 px-4"><span class="text-sm text-gray-700 mx-4">Email</span> : <span class="text-blue-700 mx-4 inline-block">myOfficeEmail@gmail.com</span></li>
                <li class="my-3 rounded bg-green-200 text-center py-2 px-4"><span class="text-sm text-gray-700 mx-4">WhatsApp</span> : <span class="text-blue-700 mx-4 inline-block">(+237) 678395403/656872385</span></li>
                <li class="my-3 rounded bg-green-200 text-center py-2 px-4"><span class="text-sm text-gray-700 mx-4">Tel</span> : <span class="text-blue-700 mx-4 inline-block">(+237) 678395403/656872385</span></li>
                <li class="my-3 rounded bg-green-200 text-center py-2 px-4"><span class="text-sm text-gray-700 mx-4">facebook</span> : <span class="text-blue-700 mx-4 inline-block"><a href="https://www.facebook.com/page">Visit our page</a></span></li>
                <li class="my-3 rounded bg-green-200 text-center py-2 px-4"><span class="text-sm text-gray-700 mx-4">twitter</span> : <span class="text-blue-700 mx-4 inline-block"><a href="https://www.twitter.com/group">Follow on twitter</a></span></li>
                <li class="my-3 rounded bg-green-200 text-center py-2 px-4"><span class="text-sm text-gray-700 mx-4">instagram</span> : <span class="text-blue-700 mx-4 inline-block"><a href="https://www.instagram.com/group">Follow us on instagram</a></span></li>
            </ul>
        </div>
    </div>


    @include('front-end.template.footer')
</body>
</html>