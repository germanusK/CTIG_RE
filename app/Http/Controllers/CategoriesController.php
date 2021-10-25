<?php

namespace App\Http\Controllers;

use App\Http\Resources\Category;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.category.dashboard_category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoriesController  $categoriesController
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriesController $categoriesController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoriesController  $categoriesController
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriesController $categoriesController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoriesController  $categoriesController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriesController $categoriesController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoriesController  $categoriesController
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriesController $categoriesController)
    {
        //
    }


      // read many 
      public function readMany(Request $request)
      {
          # code...
          return Categories::all();
      }
  
      public function readOne(Request $request)
      {
          # code...
          
      }
  
      public function writeMany(Request $request)
      {
          # code...
      }
  
      public function writeOne(Request $request)
      {
          # code...
      }
  
      public function putMany(Request $request)
      {
          # code...
      }
  
      public function putOne(Request $request)
      {
          # code...
      }
  
      public function deleteMany(Request $request)
      {
          # code...
      }
  
      public function deleteOne(Request $request)
      {
          # code...
      }
}
