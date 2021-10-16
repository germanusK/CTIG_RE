<!-- home, property, sites, categories, profile, customers -->
<div class="f-full">
    <!-- logo display -->
    <div class="w-16 h-16 rounded-full mx-auto bg-indigo-50 overflow-hidden mt-8 mb-24">
        <img src=" {{ url('img\logo.jpg') }}" alt="" class="w-full h-full">
    </div>
    <div class="w-full">
        <a href=" {{ url('dashboard/') }} " class="block text-right text-lg text-gray-200 hover:text-blue-900 bg-blue-900 hover:bg-gray-200 border-b-2 border-gray-700 hover:border-gray-400 px-3 py-3 font-semibold capitalize">Home</a>
        <a href=" {{ url('dashboard/property') }} " class="block text-right text-lg text-gray-200 hover:text-blue-900 bg-blue-900 hover:bg-gray-200 border-b-2 border-gray-700 hover:border-gray-400 px-3 py-3 font-semibold capitalize">property</a>
        <a href=" {{ url('dashboard/site') }} " class="block text-right text-lg text-gray-200 hover:text-blue-900 bg-blue-900 hover:bg-gray-200 border-b-2 border-gray-700 hover:border-gray-400 px-3 py-3 font-semibold capitalize">sites</a>
        <a href=" {{ url('dashboard/category') }} " class="block text-right text-lg text-gray-200 hover:text-blue-900 bg-blue-900 hover:bg-gray-200 border-b-2 border-gray-700 hover:border-gray-400 px-3 py-3 font-semibold capitalize">categories</a>
        <a href=" {{ url('dashboard/customer') }} " class="block text-right text-lg text-gray-200 hover:text-blue-900 bg-blue-900 hover:bg-gray-200 border-b-2 border-gray-700 hover:border-gray-400 px-3 py-3 font-semibold capitalize">customers</a>
        <a href=" {{ url('dashboard/profile') }} " class="block text-right text-lg text-gray-200 hover:text-blue-900 bg-blue-900 hover:bg-gray-200 border-b-2 border-gray-700 hover:border-gray-400 px-3 py-3 font-semibold capitalize">profile</a>
    </div>
</div>