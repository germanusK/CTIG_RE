<!DOCTYPE html>
<html lang="en">
    <head>
    @include('front-end/template/top')
    <style>
        body{
            background-image: url("{{ url('img/team.jpg') }}");
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
        .dark_bg{
            z-index: -1;
        }
        /* This container is needed to position the front and back side */
        .flip-box-inner {
            transition: transform 1.5s cubic-bezier(1, 0, 0, 1);

            transform-style: preserve-3d;
        }

        .flip-box-front, .flip-box-back {
            -webkit-backface-visibility: hidden; /* Safari */
            backface-visibility: hidden;
        }
        .flip-box:hover .flip-box-inner{
            transform: rotateY(180deg);
        }
        .flip-box-back {
            transform: rotateY(180deg);
        }
    </style>
    </head>
    <body>
        <!-- <div class="dark_bg absolute h-max w-full"> -->
        @include('front-end/template/header')
        <div class="w-full py-20 text-white text-4xl text-center font-bold tracking-wider animate-pulse">about us</div>

        <div class="w-full h-screen py-8">
            <div data-aos="fade-up" data-aos-duration="1500" data-aos-offset="100" data-aos-anchor-placement="center-bottom" class="flip-box w-11/12 sm:w-9/12 h-5/6 mx-auto">
                <div class="flip-box-inner text-center w-full h-full relative">
                    <div class="flip-box-front w-full h-full absolute">
                        <img src="{{ url('img/staff.jpg') }}" alt="TEAM" class="w-full h-full rounded-xl">
                    </div>
                    <div class="flip-box-back justify-center w-full h-full absolute flex items-center align-middle bg-white rounded-xl">
                        <div class="text-center px-4 ">
                            <div class="text-blue-900 text-3xl font-semibold py-4">Our team</div>
                            <p class="text-2xl text-gray-700 font-semibold">Our team goes to every extend to make sure you have a great choice of property at all times. Moving the community forward with minimal effort by bringing to you all as much as our hands can stretch to. By our business habits, we move much closer and faster to a modern society from any level.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-screen px-24 py-8 justify-center align-middle items-center overflow-x-scroll no-scrollbar bg-white">
            <div data-aos="fade-left" data-aos-duration="1500" data-aos-offset="100" data-aos-anchor-placement="center-bottom" class="flex flex-nowrap w-max h-5/6 justify-center mx-10">
                <div class="flip-box w-72 h-full inline-block mx-5">
                    <div class="flip-box-inner text-center relative w-full h-full">
                        <div class="flib-box-front w-full h-full absolute">
                            <img src="{{ url('img/staff1.jpg') }}" alt="" class="rounded-xl w-full h-full">
                        </div>
                        <div class="flip-box-back w-full h-full absolute border-2 border-blue-900 bg-white text-blue-900 flex align-middle items-center justify-center rounded-xl">
                            <div class="text-center px-4">
                                <div class="text-3xl font-semibold capitalize my-4">Sir. Dona J. Pichap</div>
                                <div class="text-2xl font-semibold capitalize my-4">Chief Executive Officer</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-box w-72 h-full inline-block mx-5">
                    <div class="flip-box-inner text-center relative w-full h-full">
                        <div class="flib-box-front w-full h-full absolute">
                            <img src="{{ url('img/staff2.jpg') }}" alt="" class="rounded-xl w-full h-full">
                        </div>
                        <div class="flip-box-back w-full h-full absolute border-2 border-blue-900 bg-white text-blue-900 flex align-middle items-center justify-center rounded-xl">
                            <div class="text-center px-4">
                                <div class="text-3xl font-semibold capitalize my-4">Dr Kungfu Json</div>
                                <div class="text-2xl font-semibold capitalize my-4">Operations Manager</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-box w-72 h-full inline-block mx-5">
                    <div class="flip-box-inner text-center relative w-full h-full">
                        <div class="flib-box-front w-full h-full absolute">
                            <img src="{{ url('img/staff3.jpg') }}" alt="" class="rounded-xl w-full h-full">
                        </div>
                        <div class="flip-box-back w-full h-full absolute border-2 border-blue-900 bg-white text-blue-900 flex align-middle items-center justify-center rounded-xl">
                            <div class="text-center px-4">
                                <div class="text-3xl font-semibold capitalize my-4">Mr Eva T. Kotchiy</div>
                                <div class="text-2xl font-semibold capitalize my-4">Secratary General</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-box w-72 h-full inline-block mx-5">
                    <div class="flip-box-inner text-center relative w-full h-full">
                        <div class="flib-box-front w-full h-full absolute">
                            <img src="{{ url('img/staff4.jpg') }}" alt="" class="rounded-xl w-full h-full">
                        </div>
                        <div class="flip-box-back w-full h-full absolute border-2 border-blue-900 bg-white text-blue-900 flex align-middle items-center justify-center rounded-xl">
                            <div class="text-center px-4">
                                <div class="text-3xl font-semibold capitalize my-4">Mr. Polizan Chopac</div>
                                <div class="text-2xl font-semibold capitalize my-4">Chief sales officer</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-box w-72 h-full inline-block mx-5">
                    <div class="flip-box-inner text-center relative w-full h-full">
                        <div class="flib-box-front w-full h-full absolute">
                            <img src="{{ url('img/staff5.jpg') }}" alt="" class="rounded-xl w-full h-full">
                        </div>
                        <div class="flip-box-back w-full h-full absolute border-2 border-blue-900 bg-white text-blue-900 flex align-middle items-center justify-center rounded-xl">
                            <div class="text-center px-4">
                                <div class="text-3xl font-semibold capitalize my-4">Sir. Anya Topa John</div>
                                <div class="text-2xl font-semibold capitalize my-4">Customer attendant officer</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-box w-72 h-full inline-block mx-5">
                    <div class="flip-box-inner text-center relative w-full h-full">
                        <div class="flib-box-front w-full h-full absolute">
                            <img src="{{ url('img/staff6.jpg') }}" alt="" class="rounded-xl w-full h-full">
                        </div>
                        <div class="flip-box-back w-full h-full absolute border-2 border-blue-900 bg-white text-blue-900 flex align-middle items-center justify-center rounded-xl">
                            <div class="text-center px-4">
                                <div class="text-3xl font-semibold capitalize my-4">Mr. Baju Sidon</div>
                                <div class="text-2xl font-semibold capitalize my-4">Chief Survey officer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
         
        @include('front-end/template/footer')
        </div>
    </body>
</html>