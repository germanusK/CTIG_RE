<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\User as ResourcesUsers;

class UsersController extends Controller
{
    //
      // read many 
      public function readMany(Request $request)
      {
          # code...
          return ResourcesUsers::collection(User::all());
      }
  
      public function readOne(Request $request)
      {
          # code...
          return new ResourcesUsers($request);
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
