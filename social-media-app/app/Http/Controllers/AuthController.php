<?php

namespace App\Http\Controllers;
use Auth;
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
           dd('ok');
           $data = array();
           $data['email'] = $request->email;
           $data['username'] = $request->username;
           $data['password'] =($request->password);
           
           $contact=DB::table('users')->insert($data);
           return redirect()
                            ->route('index')
                            ->with('info', 'you are signed up!');
    } 


   
    public function getSignin(){
        return view('auth.signin');
    }

    
    public function postSignin(Request $request){
     //    if (!Auth::users($request->only(['email', 'password']), $request->has('remeber'))){
           
    //        return redirect()->back()->with('info', 'could not sign you in with those details');
           
    //    }

    //    return redirect() ->route('index')
    //    ->with('info', 'you are signed up!');

  
    
    // $credentials = $request->except(['_token']);

    // $user = Users::where('email',$request->email)->first();
  
    // if (Auth()->attempt($credentials)) {

    //     return redirect()->route('index');

    // }else{
    //     session()->flash('message', 'Invalid credentials');
    //     return redirect()->back();
    // }

       


    $email =$request->input('email');
    $password=$request->input('password');

    $data = DB::select('select id, email   from users where email=? and password=?',[$email,$password]);
     if(count($data)){
        return redirect()->route('pages.signinPage')->with('info', 'you are signed up!');
     }
     else{
        return redirect()->back();

    }

    }

    public function getSignout(){
        Auth::logout();
        return redirect()->route('index');

    }

}


