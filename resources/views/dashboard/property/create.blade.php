<!DOCTYPE html>
<html lang="en">
<head>
    @include('dashboard.template.top')
</head>
<body>
    <!-- dashboard view container -->
    <div class="sm:grid grid-cols-5 gap-2 w-10/12 mx-auto my-12 rounded-lg bg-blue-800">
        <!-- side navigation -->
        <div class="py-6">
            @include('dashboard.template.navigation')
        </div>

        <!-- section for header and content -->
        <div class="col-span-4 w-full bg-blue-100 rounded-r-lg">
            <!-- header display -->
            @include('dashboard.template.header')
           

            <!-- display section -->
            <div class="w-full max-h-screen overflow-y-scroll no-scrollbar p-3 py-8">
                <form action=" {{ url('http://localhost:8001/api/dashboard/assets/one') }} " method="post" class="xs:w-10/12 sm:w-8/12 md:w-7/12 my-20 py-8 px-4 mx-auto rounded-xl bg-white">
                    @csrf
                    <div class="w-full" id="errorDisplay" class="text-yellow-700"></div>
                    <div class="w-full my-6 text-center text-2xl font-semibold">Create Property</div>
                    <div class="w-full px-3 my-2">
                        <label for="name" class="text-sm text-blue-500">Name:</label>
                        <input type="text" name="name" placeholder="enter property name" required minlength="3" class="w-full text-center placeholder-blue-500 border-b-2 border-gray-400 py-2">
                    </div>
                    <div class="w-full px-3 my-2">
                        <label for="block_number" class="text-sm text-blue-500">Block number:</label>
                        <input type="text" name="block_number" placeholder="enter block number" required class="w-full text-center placeholder-blue-500 border-b-2 border-gray-400 py-2">
                    </div>
                    <div class="w-full px-3 my-2">
                        <label for="status" class="text-sm text-blue-500">status:</label>
                        <select name="status" id="" required class="w-full text-center bg-white border-b-2 border-gray-400 py-2">
                            <option value="1" selected>Available</option>
                            <option value="0">Already taken</option>
                        </select>
                    </div>
                    <div class="w-full px-3 my-2">
                        <label for="category_id" class="text-sm text-blue-500">Category:</label>
                        <select name="category_id" id="" required class="w-full text-center bg-white border-b-2 border-gray-400 py-2">
                            <?php 
                                for ($i=0; $i < count($_data['categories']); $i++) { 
                                    # code...
                                    echo '<option value="'.$_data['categories'][$i]['id'].'">'.$_data['categories'][$i]['type'].' :: '.$_data['categories'][$i]['subgroup'].'</option>';
                                }
                             ?>
                        </select>
                    </div>
                    <div class="w-full px-3 my-2">
                        <label for="site_id" class="text-sm text-blue-500">Site:</label>
                        <select name="site_id" id="" required class="w-full text-center bg-white border-b-2 border-gray-400 py-2">
                            <?php 
                                for ($i=0; $i < count($_data['sites']); $i++) { 
                                    # code...
                                    echo '<option value="'.$_data['sites'][$i]['id'].'">'.$_data['sites'][$i]['name'].' :: '.$_data['sites'][$i]['site_number'].'</option>';
                                }
                             ?>
                        </select>
                    </div>
                    <div class="w-full px-3 my-2">
                        <label for="location_id" class="text-sm text-blue-500">Location:</label>
                        <select name="location_id" id="" required class="w-full text-center bg-white border-b-2 border-gray-400 py-2">
                            <?php 
                                for ($i=0; $i < count($_data['locations']); $i++) { 
                                    # code...
                                    echo '<option value="'.$_data['locations'][$i]['id'].'">'.$_data['locations'][$i]['name'].' :: '.$_data['locations'][$i]['latitude'].'/'.$_data['locations'][$i]['longitude'].'</option>';
                                }
                             ?>
                        </select>
                    </div>
                    <div class="w-full px-3 my-2">
                        <label for="description" class="text-sm text-blue-500">Description:</label>
                        <textarea rows="3" type="text" name="description" required minlength="3" placeholder="property description" class="w-full text-center placeholder-blue-500 border-b-2 border-gray-400 py-2"></textarea>
                    </div>
                    
                    <!-- <div class="w-full px-3 my-2">
                        <label for="loction" class="text-sm text-blue-500">Location:</label>
                        <div class="w-full h-60 rounded-lg bg-gray-200"></div>
                    </div> -->

                    <div class="w-full text-right justify-right py-10 grid grid-cols-2">
                       <div class="text-center"> <input type="button" class=" w-min text-center text-blue-500 px-4 py-2 bg-white border-2 border-blue-500 rounded-lg" value="Cancel"></div>
                       <div class="text-center"> <input type="submit" class=" w-min text-center text-blue-500 px-4 py-2 bg-white border-2 border-blue-500 rounded-lg" value="Continue"> </div>       
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- footer view -->
    @include('dashboard.template.footer')
</body>
</html>