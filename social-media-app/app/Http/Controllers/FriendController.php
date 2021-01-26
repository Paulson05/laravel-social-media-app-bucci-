<?php

namespace App\Http\Controllers;
use App\Models\Users;
use DB;
use Auth;  
use Illuminate\Http\Request;

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
}
