
    <div class="w-full border-b-2 border-b-gray-700">
        <div class="grid grid-cols-1 md:grid-cols-2 bg-transparent pr-4 py-2 w-full">
            <div class="px-auto grid grid-cols-3">
				<a href=" {{ url('/') }} " class="col-span-1 mx-auto my-2 w-14 h-14 rounded-full overflow-hidden text-gray-700"><img src=" {{ url('img\logo.jpg') }} " alt="BRAND IMAGE" class="w-14 h-14 rounded-full"><br>CT PROPERTY</a>
            </div>
            <div class="justify-end text-right">
                <a href="https://mylfcglobal.com/register" class="font-serif font-semibold text-blue-700 hover:underline mx-4 items-baseline">signup</a>
                <a href=" {{ url('login') }} " class="font-serif font-semibold text-blue-700 hover:underline mx-4 items-baseline">login</a>
            </div>
        </div>
		<button class="hidden " id="nav_toggler"><img src="{{ url('img/menu.jpg') }}" alt="Menu" class="w-10 h-10 m-2"></button>
        <div class="justify-items-right pr-6 text-right py-1 w-ful" id="nav">
                <span class="px-6 py-2 text-blue-100 hover:shadow-2xl shadow-inner font-semibold font-serif bg-gray-800"><a href=" {{ url('/') }} ">Home</a></span>
                <span class="px-6 py-2 text-blue-100 hover:shadow-2xl shadow-inner font-semibold font-serif bg-gray-800"><a href=" {{ url('property') }} ">Property</a></span>
                <span class="px-6 py-2 text-blue-100 hover:shadow-2xl shadow-inner font-semibold font-serif bg-gray-800"><a href=" {{ url('testimony') }} ">Testimony</a></span>
                <span class="px-6 py-2 text-blue-100 hover:shadow-2xl shadow-inner font-semibold font-serif bg-gray-800"><a href=" {{ url('about') }} ">About</a></span>
                <span class="px-6 py-2 text-blue-100 hover:shadow-2xl shadow-inner font-semibold font-serif bg-gray-800"><a href=" {{ url('contact') }} ">Contact</a></span>
        </div>
    </div>
    
    <!-- image slider -->
    <!-- <div class="carousel relative shadow-2xl bg-white">
	<div class="carousel-inner relative overflow-hidden w-full"> -->
	  <!--Slide 1-->
		<!-- <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
		<div class="carousel-item absolute opacity-0" style="height:90vh;">
            <img class="block h-full w-full bg-orange-500 text-white text-5xl text-center absolute z-0" src=" {{ url('img\img1.jpg') }} ">
            <div class="block py-12 h-full w-full bg-transparent align-middle justify-center text-white text-5xl text-center absolute z-10">Slide 1</div>
		</div>
		<label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
		 -->
		<!--Slide 2-->
		<!-- <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
		<div class="carousel-item absolute opacity-0" style="height:90vh;">
			<img class="block h-full w-full bg-orange-500 text-white text-5xl text-center absolute z-0" src=" {{ url('img\img2.jpg') }} ">
            <div class="block py-12 h-full w-full bg-transparent align-middle justify-center text-white text-5xl text-center absolute z-10">Slide 2</div>
		</div>
		<label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
		 -->
		<!--Slide 3-->
		<!-- <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
		<div class="carousel-item absolute opacity-0" style="height:90vh;">
            <img class="block h-full w-full bg-orange-500 text-white text-5xl text-center absolute z-0" src=" {{ url('img\img3.jpg') }} ">
            <div class="block py-12 h-full w-full bg-transparent align-middle justify-center text-white text-5xl text-center absolute z-10">Slide 3</div>
		</div>
		<label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> -->

		<!-- Add additional indicators for each slide-->
		<!-- <ol class="carousel-indicators">
			<li class="inline-block mr-3">
				<label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
		</ol> -->
		
	<!-- </div>
    </div> -->