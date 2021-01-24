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

          if(!$user){
              abourt(404);
          }

          return view('profile.index')
          ->with('user', $user);
    }
}
