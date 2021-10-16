<!DOCTYPE html>
<html lang="en">
<head>
    @include('front-end.template.top')
</head>
<body>
    @include('front-end.template.header')

    <!-- Login template -->
    <div class="w-10/12 sm:w-7/12 md:w-5/12 mx-auto sm:my-16 md:my-28 rounded-2xl border-2 border-green-400">
        <form action="" method="post" class="my-6 max-w-sm mx-auto">
            <div class="w-full text-center text-2xl font-semibold my-5">Log in</div>
            <input type="text" name="username" id="" placeholder="user name" class="border-0 border-b-2 border-gray-800 py-2 my-2 w-full placeholder-green-400">
            <input type="password" name="password" placeholder="password" id="" class="border-0 border-b-2 border-gray-800 py-2 my-2 w-full placeholder-green-400">
            <div class="w-full my-2 text-right">
                <a href="" class="text-sm text-blue-700 font-semibold">forgot password</a>
            </div>
            <div class="w-full text-center">
                <button type="submit" class=" text-lg text-blue-700 px-8 py-3 rounded-lg border-0 font-semibold">Log in</button>
            </div>
            <div class="w-full my-2 text-right">
                <a href="" class="text-sm text-blue-700 font-semibold">Don't have an account</a>
            </div>
        </form>
    </div>

    @include('front-end.template.footer')
</body>
</html>