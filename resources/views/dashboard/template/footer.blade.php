<div class="grid xs:grid-cols-1 sm:grid-cols-3 md:grid-cols-5 justify-center sm:items-center sm:justify-between bg-gray-800 px-12">
    <div class="px-2 py-6 bg-gray-600 border-0 border-l-2 border-gray-400 h-full">
        <div class="text-center text-white text-lg font-semibold">About Us</div>
        <p class="text-justified break-words  text-white">Information about CT Builders Real Estate</p>
    </div>
    <div class="px-2 py-6 bg-gray-600 border-0 border-l-2 border-gray-400 h-full">
        <div class="text-center text-white text-lg font-semibold">Navigation</div>
        <div>
            <div class="text-center"><a href=" {{ url('/') }} " class=" text-white hover:font-semibold">Home</a></div>
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