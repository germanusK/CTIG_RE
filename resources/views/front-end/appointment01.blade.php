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
    <div class=" my-16 h-screen flex align-middle items-center justify-center">

        <div class="flex rounded-xl shadow-2xl h-4/5 w-10/12 lg:w-8/12 mx-auto bg-black">
            <img src=" {{ url('img/bgrest.svg') }} "  class=" w-0 lg:w-2/5 h-full rounded-l-xl lg:px-4">
            <div class="w-full h-full flex items-center align-middle justify-center mx-4 lg:w-3/5 lg:mx-auto overflow-y-scroll no-scrollbar bg-gray-200 rounded-r-xl">
                <form action=" {{ url('appointments/'.$data['id'].'/payment') }} " method="POST" class="w-10/12 mx-auto rounded-lg shadow-lg px-3 py-4 bg-gray-100">
                    @csrf
                    <div class="w-full py-6 text-center font-bold text-3xl capitalize">Book a visit</div>
                    <div class="py-2 mb-1 w-full px-3">
                        <span class="text-sm text-left">Name:</span><br>
                        <input class="w-full leading-relaxed h-9 text-xl px-2 border-b-2 border-black" required type="text" placeholder="Name" name="client_name">
                    </div>
                    <div class="py-2 mb-1 w-full px-3">
                        <span class="text-sm text-left">Tel:</span><br>
                        <input class="w-full leading-relaxed h-9 text-xl px-2 border-b-2 border-black" required type="tel" placeholder="Contact" name="contact">
                    </div>
                    <div class="py-2 mb-1 w-full px-3">
                        <span class="text-sm text-left">Email:</span><br>
                        <input class="w-full leading-relaxed h-9 text-xl px-2 border-b-2 border-black" required type="email" placeholder="schedule time (optional)" name="email">
                    </div>
                    <div class="py-4 mb-3 w-full px-3 justify-center flex">
                        <a class="px-5 py-2 mx-auto text-lg font-bold inline-flex bg-blue-100 text-gray-900 rounded-full" href="">Cancel</a>
                        <input class="px-5 py-2 mx-auto text-lg font-bold inline-flex bg-blue-100 text-gray-900 rounded-full" type="submit" value="Proceed">
                    </div>
                </form>
            </div>
        </div>

    </div>


    @include('front-end.template.footer')
</body>
</html>