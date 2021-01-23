<?php

namespace App\Http\Controllers;

use App\Models\Users;
use DB;
use Illuminate\Http\Request;
 
class SearchController extends Controller
{
    //

     
    public function getResults(Request $request) {
            $query = $request->input('query');
           if(!$query){
            
               return redirect()->route('index',);
               
           }
           $users = Users::query()
   ->where('first_name', 'LIKE', "%{$query}%") 
   ->orWhere('last_name', 'LIKE', "%{$query}%") 
   ->get();
        //    $users=Users::all();
        //    $users = users::where(DB::raw("CONCAT(first_name, '', last_name)"), 'LIKE', "%{$query}%")->orWhere('username', 'LIKE' ,  "%{$query}%" )->get();
         
        return view('search.results')->with('users', $users);
      }
}
