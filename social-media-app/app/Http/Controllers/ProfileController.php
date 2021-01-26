<?php

namespace App\Http\Controllers;

use App\Models\Users;
use DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function getProfile($username)
    {
          $user = Users::where('username', $username)->first();

      

          return view('profile.index')
          ->with('user', $user);
    }

    public function getEdit(){

     $user = auth()->user();
        return view('profile.edit')->with('user',$user);
    }
    public function postEdit(){
      
    }
}
