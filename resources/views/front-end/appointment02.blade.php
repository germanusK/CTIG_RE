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
        body{
            background-image: linear-gradient(-255deg, rgb(10, 24,125) 25%, rgb(107, 114, 128) 25% 100% );
        }
    </style>
</head>
<body class="">

    @include('front-end.template.header')


    <!-- Proper details template -->
    <div class=" my-16 h-screen flex align-middle items-center justify-center">

        <form action=" {{ url('appointments/'.$data['id'].'/save') }}" method="POST" class="flex rounded-lg shadow-lg h-5/6 w-10/12 lg:w-8/12 mx-auto bg-gray-400">
            <div class="w-full h-full flex items-center align-middle justify-center mx-4 lg:w-4/5 lg:mx-auto overflow-y-scroll no-scrollbar rounded-l-xl">
                <div class="w-10/12 mx-auto rounded-lg shadow-lg px-3 py-4 bg-gray-100">
                    @csrf
                    <div class="w-full py-6 text-center font-bold text-3xl capitalize">Book a visit</div>
                    <div class="py-2 mb-1 w-full px-3">
                        <span class="text-sm text-left">Name:</span><br>
                        <input class="w-full leading-relaxed h-9 text-xl px-2 border-b-2 border-black" required type="text" placeholder="Name" name="client_name" value="{{ $data['name'] }}">
                    </div>
                    <div class="py-2 mb-1 w-full px-3">
                        <span class="text-sm text-left">Tel:</span><br>
                        <input class="w-full leading-relaxed h-9 text-xl px-2 border-b-2 border-black" required type="tel" placeholder="Contact" name="contact" value=" {{ $data['contact'] }} ">
                    </div>
                    <div class="py-2 mb-1 w-full px-3">
                        <span class="text-sm text-left">Email:</span><br>
                        <input class="w-full leading-relaxed h-9 text-xl px-2 border-b-2 border-black" type="email" placeholder="schedule time" name="email" value=" {{ $data['email'] }} ">
                    </div>
                    <div class="py-2 mb-1 w-full px-3">
                        <span class="text-sm text-left">Scheduled for:</span><br>
                        <input class="w-full leading-relaxed h-9 text-xl px-2 border-b-2 border-black" required type="datetime-local" placeholder="set schedule time" name="schedule_time">
                    </div>
                </div>
            </div>
            
            <div class="w-full h-full flex items-center align-middle justify-center px-4 overflow-y-scroll no-scrollbar bg-gray-200 rounded-r-xl">
                <div class="w-10/12 mx-auto">
                    <p class="font-semibold text-xl py-5">A fee of 20USD is required to complete a visit request</p>
                    <div>
                        <div class="w-11/12 rounded-lg saturate-100 shadow-lg py-4 bg-gray-100">
                            @csrf
                            <div class="py-2 mb-1 w-full px-3">
                                <span class="text-sm text-left">Name(on the card):</span><br>
                                <input class="w-full leading-relaxed h-9 text-xl px-2 border-b-2 border-black" required type="text" placeholder="Name(as on card)" name="card_name">
                            </div>
                            <div class="py-2 mb-1 w-full px-3">
                                <span class="text-sm text-left">Card number:</span><br>
                                <input class="w-full leading-relaxed h-9 text-xl px-2 border-b-2 border-black" required type="number" placeholder="card number" name="card_number">
                            </div>
                            <div class="py-2 mb-1 w-full px-3">
                                <span class="text-sm text-left">Expiry date:</span><br>
                                <input type="month" name="expiry_date" class="w-full flex leading-relaxed h-9 text-xl px-2 border-b-2 border-black">                                    
                            </div>
                            <div class="py-1 w-full px-3 justify-center flex">
                                <a class="px-5 py-2 mx-auto text-lg font-bold inline-flex bg-gray-200 text-gray-900 rounded-full" href="">Cancel</a>
                                <input class="px-5 py-2 mx-auto text-lg font-bold inline-flex bg-gray-200 text-gray-900 rounded-full" type="submit" value="Proceed">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


    @include('front-end.template.footer')
</body>
</html>