<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{

    public function getIndex()
    {
        $friends = Auth::user()->friends();
        $requests = Auth::user()->friendRequests();
        return view('friend.index')
        ->with('friends', $friends)
        ->with('requests', $requests);


    }
    public function getAdd($username)
    {
       $user = Users::where('username', $username)->first();

       if(!$user){
           return redirect()
           ->route('index')
           ->with('info', 'that user could not be found');
       }

       if(Auth::user()->hasFriendRequestsPending($user)|| $user->hasFriendRequestsPending(Auth::user())){
        return redirect()
        ->route('profile.index', ['username' => $user->username])
        ->with('info', 'friend request already pending');
       }

       if(Auth::user()->isFriendsWith($user)){
        return redirect()
        ->route('profile.index', ['username' => $user->username])
        ->with('info', 'you are alreay friends');
       }

       Auth::user()->addFriend($user);
       return redirect()
       ->route('profile.index', ['username' => $username])
       ->with('info', 'friend request sent');
    }
    public function getAccept($username)
    {

        $user = Users::where('username', $username)->first();
        if(!$user){
            return redirect()
            ->route('index')
            ->with('info', 'that user could not be found');
        }

        if(Auth::user()->id === $user->id){
            return redirect()->route('home');
        }

        if(!Auth::user()->hasFriendRequestReceived($user)){
            return redirect()
            ->route('index')->with('info', "$username didn't send you a friend request");
           }

           Auth::user()->acceptFriendRequest($user);


            return redirect()
            ->route('profile.index', ['username' => $user->username])
            ->with('info', 'Friend  request accepted');



    }

}
