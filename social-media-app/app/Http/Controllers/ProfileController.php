<?php

namespace App\Http\Controllers;

use App\Models\Users;
use DB;
use Auth;
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
    public function getPost(Request $request){
        $this->validate($request, [
            'first_name' => 'alpha|max:50',
            'last_name' => 'alpha|max:50',
            'location' => 'alpha|max:50',

   ]);

   Auth::user()->update([
       'first_name' =>$request->input('first_name'),
       'last_name' =>$request->input('last_name'),
       'location' =>$request->input('location'),
   ]);
      return redirect()->route('profile.edit')
      ->with('info', 'your profile has been updated');
     
    }
}
