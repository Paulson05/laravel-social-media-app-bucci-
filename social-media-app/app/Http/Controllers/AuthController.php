<?php

namespace App\Http\Controllers;
use App\Models\Users; 
use Auth;

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
           $data['password'] =bcrypt($request->password);
           
           $contact=DB::table('users')->insert($data);
           return redirect()
                            ->route('index')
                            ->with('info', 'you are signed up!');
    } 


   
    public function getSignin(){
        return view('auth.signin');
    }

    
    public function postSignin(Request $request){
        if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))){
           
           return redirect()->back()->with('info', 'could not sign you in with those details');
           
       }

       return redirect() ->route('index')
       ->with('info', 'you are signed in!');

  
    
    

       


    // $email =$request->input('email');
    // $password=$request->input('password');

    // $data = DB::select('select id, email   from users where email=? and password=?',[$email,$password]);
    //  if(count($data)){
    //     return redirect()->route('pages.signinPage')->with('info', 'you are signed up!');
    //  }
    //  else{
    //     return redirect()->back();

    // }

    }

    public function getSignout(){
        Auth::logout();
        return redirect()->route('index');

    }

}


