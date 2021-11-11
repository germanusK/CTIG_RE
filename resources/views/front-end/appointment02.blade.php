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

        <div class="flex rounded-xl shadow-2xl h-5/6 w-10/12 lg:w-8/12 mx-auto bg-black">
            <div class="w-full h-full flex items-center align-middle justify-center mx-4 lg:w-3/5 lg:mx-auto overflow-y-scroll no-scrollbar bg-white rounded-l-xl">
                <form action="" method="POST" class="w-10/12 mx-auto rounded-lg shadow-lg px-3 py-4 bg-white">
                    @csrf
                    <div class="w-full py-6 text-center font-bold text-3xl capitalize">Book a visit</div>
                    <div class="py-2 mb-1 w-full px-3">
                        <span class="text-sm text-left">Name:</span><br>
                        <input readonly class="w-full leading-relaxed h-9 text-xl px-2 border-b-2 border-black" required type="text" placeholder="Name" name="client_name" value="{{ $data['name'] }}">
                    </div>
                    <div class="py-2 mb-1 w-full px-3">
                        <span class="text-sm text-left">Tel:</span><br>
                        <input readonly class="w-full leading-relaxed h-9 text-xl px-2 border-b-2 border-black" required type="tel" placeholder="Contact" name="contact" value=" {{ $data['contact'] }} ">
                    </div>
                    <div class="py-2 mb-1 w-full px-3">
                        <span class="text-sm text-left">Scheduled for:</span><br>
                        <input readonly class="w-full leading-relaxed h-9 text-xl px-2 border-b-2 border-black" required type="datetime-local" placeholder="schedule time" name="schedule_time" value=" {{ $data['set_date'] }} ">
                    </div>
                    
                </form>
            </div>
            
            <div class="w-full h-full flex items-center align-middle justify-center mx-4 lg:w-3/5 lg:mx-auto overflow-y-scroll no-scrollbar bg-white rounded-r-xl">
                <div class="w-10/12 mx-auto">
                    <p class="font-semibold text-xl py-5">A fee of 20USD is required to complete a visit request</p>
                    <div>
                        <form class="w-11/12 rounded-xl saturate-100 shadow-inner py-4" action="" method="POST">
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
                            <div class="py-4 mb-3 w-full px-3">
                                <a class="px-5 py-3 text-lg font-bold float-left  bg-black text-white rounded-md" href="">Cancel</a>
                                <input class="px-5 py-3 text-lg font-bold float-right bg-black text-white rounded-md" type="submit" value="Make payment">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


    @include('front-end.template.footer')
</body>
</html>