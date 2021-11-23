<div class="sm:grid grid-cols-3 md:grid-cols-5 justify-center sm:items-center sm:justify-between bg-gray-800">
    <div class="sm:col-span-3 md:col-span-5 py-6 px-auto text-center text-2xl font-semibold text-white">Real Estate @CT inc Group </div>
    <div class="sm:col-span-3 md:col-span-5 py-6 px-auto text-center font-serif font-semibold justify-end"> 
        <div class="w-11/12 mx-auto md:w-8/12  px-4 py-2 bg-gray-200 text-blue-700 rounded-md">
            <div class="w-9/12 mx-auto px-5 py-4 border-b-2 border-gray-300 rounded-md text-center text-black text-xl font-semibold">send message</div>
            <div id="chat_massages" class="w-9/12 mx-auto py-4 my-2 bg-transparent"></div>
            <form action="" method="post" class="w-9/12 py-2 mx-auto justify-end" name="chat_form">
                <div class="flex flex-auto w-full">
                    <input type="text" name="sender_name" placeholder="enter your name" required class="flex flex-auto py-2 pl-3 pr-2 my-1 border-b-2 border-gray-300 bg-transparent placeholder-black">
                    <input type="email" name="sender_email" placeholder="enter your email" required class="flex flex-auto py-2 pl-3 pr-2 my-1 ml-1 border-b-2 border-gray-300 bg-transparent placeholder-black">
                </div>
                <textarea rows="3" type="text" name="message" placeholder="enter your message" required class="py-2 pl-3 pr-2 my-1 border-b-2 border-gray-300 w-full bg-transparent placeholder-black"></textarea>
                <input type="submit" value="send" class="px-4 py-1 border-2 border-gray-300 bg-transparent text-lg">
            </form>
        </div> 
    </div>
    <div class="px-2 py-6 bg-gray-600 border-0 border-l-2 border-gray-400 h-full">
        <div class="text-center text-white text-lg font-semibold">About Us</div>
        <p class="text-justified break-words  text-white">Information about CT Builders Real Estate</p>
    </div>
    <div class="px-2 py-6 bg-gray-600 border-0 border-l-2 border-gray-400 h-full">
        <div class="text-center text-white text-lg font-semibold">Navigation</div>
        <div>
            <div class="text-center"><a href=" {{ url('home') }} " class=" text-white hover:font-semibold">Home</a></div>
            <div class="text-center"><a href=" {{ url('property') }} " class=" text-white hover:font-semibold">Property</a></div>
            <div class="text-center"><a href=" {{ url('testimony') }} " class=" text-white hover:font-semibold">Testimony</a></div>
            <div class="text-center"><a href=" {{ url('about') }}" class=" text-white hover:font-semibold">About</a></div>
            <div class="text-center"><a href=" {{ url('contact') }} " class=" text-white hover:font-semibold">Contact</a></div>
        </div>
    </div>
    <div class="px-2 py-6 bg-gray-600 border-0 border-l-2 border-gray-400 h-full">
        <div class="text-center text-white text-lg font-semibold">Real Estate Types</div>
        <div>
            <div class="text-center text-white hover:underline">Residential</div>
            <div class="text-center text-white hover:underline">Commercial</div>
            <div class="text-center text-white hover:underline">Industrial</div>
            <div class="text-center text-white hover:underline">Land</div>
            <div class="text-center text-white hover:underline">REIT</div>
        </div>
    </div>
    <div class="sm:col-span-3 md:col-span-2 px-2 py-6 bg-gray-600 border-0 border-l-2 border-gray-400 h-full">
        <div class="text-center text-white text-lg font-semibold">Latest</div>
    </div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init()</script>