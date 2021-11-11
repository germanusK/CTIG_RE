    <div class="w-full border-b-2 border-b-gray-900" id="header-container">
        <div class="grid grid-cols-1 md:grid-cols-2 bg-transparent pr-4 py-2 w-full">
            <div class="px-auto grid grid-cols-3">
				<a href=" {{ url('/') }} " class="col-span-1 mx-auto my-2 w-14 h-14 rounded-full shadow-md overflow-hidden text-gray-700"><img src=" {{ url('img\logo.jpg') }} " alt="BRAND IMAGE" class="w-14 h-14 rounded-full"><br>CT PROPERTY</a>
            </div>
            <div class="justify-end text-right">
                <a href="https://mylfcglobal.com/register" class="font-serif font-semibold text-blue-700 hover:underline mx-4 items-baseline">signup</a>
                <a href=" {{ url('login') }} " class="font-serif font-semibold text-blue-700 hover:underline mx-4 items-baseline">login</a>
            </div>
        </div>
		<div class="w-full relative justify-end">
			<div" class="md:invisible justify-self-end mb-10 pr-4 py-4 w-full justify-end rounded absolute text-right">
				<button id="nav_toggler"><img src="{{ url('img/nav_toggler3.svg') }}" alt="Menu" class="w-9 h-9"></button>
			</div>
			
			<div class=" items-baseline justify-end pr-28 text-right pt-5 w-3/4 mx-auto md:w-full absolute text-lg invisible bg-black md:bg-transparent md:visible" id="nav">
				<a class=" mx-1 px-6 py-2 text-blue-100 hover:shadow-2xl shadow-inner font-semibold font-serif border-b-2 border-gray-900 md:border-gray-100 block md:inline" href=" {{ url('home') }} "><span >Home</span></a>
				<a class=" mx-1 px-6 py-2 text-blue-100 hover:shadow-2xl shadow-inner font-semibold font-serif border-b-2 border-gray-900 md:border-gray-100 block md:inline" href=" {{ url('property') }} "><span >Property</span></a>
				<a class=" mx-1 px-6 py-2 text-blue-100 hover:shadow-2xl shadow-inner font-semibold font-serif border-b-2 border-gray-900 md:border-gray-100 block md:inline" href=" {{ url('testimony') }} "><span >Testimony</span></a>
				<a class=" mx-1 px-6 py-2 text-blue-100 hover:shadow-2xl shadow-inner font-semibold font-serif border-b-2 border-gray-900 md:border-gray-100 block md:inline" href=" {{ url('about') }} "><span >About</span></a>
				<a class=" mx-1 px-6 py-2 text-blue-100 hover:shadow-2xl shadow-inner font-semibold font-serif border-b-2 border-gray-900 md:border-gray-100 block md:inline" href=" {{ url('contact') }} "><span >Contact</span></a>
			</div>
		</div>
		
    </div>
	<script>
		document.getElementById("nav_toggler").onclick=function() {
			document.getElementById("nav").classList.toggle("invisible");
		}
	</script>