<!DOCTYPE html>
<html lang="en">
<head>
    @include('front-end.template.top')
</head>
<body>
    <!-- Login template -->
    <div class="py-6 px-auto grid grid-cols-3">
        <a href=" {{ url('/') }} " class="col-span-1 mx-10 my-2 w-16 h-16 rounded-full overflow-hidden bg-white shadow-lg"><img src=" {{ url('img\logo.jpg') }} " alt="BRAND IMAGE" class="w-full h-full shadow-lg"></a>
    </div>
    <div class="w-10/12 sm:w-7/12 md:w-5/12 mx-auto sm:my-16 md:my-28 bg-gray-300 shadow-lg rounded-lg border-2 animate__animated animate__zoomInLeft">
        <form action="" method="post" class="my-6 max-w-sm mx-auto">
            <div class="w-full text-center text-2xl font-semibold my-5">Log in</div>
            <input type="text" name="username" placeholder="user name" class="bg-transparent border-0 border-b-2 border-black py-2 my-2 w-full text-black text-lg tracking-wider font-semibold">
            <input type="password" name="password" placeholder="password" class="bg-transparent border-0 border-b-2 border-black py-2 my-2 w-full text-black text-lg tracking-wider font-semibold">
            <div class="w-full my-2 text-right">
                <a href="" class="text-blue-700">forgot password</a>
            </div>
            <div class="w-full text-center">
                <button type="submit" class=" text-lg text-grren-700 px-8 py-3 rounded-lg border-0 font-semibold text-blue-700">Log in</button>
            </div>
            <div class="w-full my-2 text-right">
                <a href="" class="text-blue-700">Don't have an account</a>
            </div>
        </form>
    </div>

</body>
</html>