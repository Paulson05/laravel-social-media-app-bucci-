<?php

namespace App\Http\Controllers;
use App\Models\Users;
use DB;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function getSignup(){
        return view('auth.signup');
    }

    public function postSignup(Request $request)
    {
           $this->validate($request, [
                    'email' => 'required|unique:users|email|max:255',
                    'username' => 'required|unique:users|alpha_dash|max:20',
                    'password' => 'required|min:6',

           ]);
           $data = array();
           $data['email'] = $request->email;
           $data['username'] = $request->username;
           $data['password'] = bcrypt($request->password);
           
           $contact=DB::table('users')->insert($data);
           return redirect('/');
           dd('all ok');
    }
}
