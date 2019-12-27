<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activeuser;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userid = Auth::user()->id;
        $username=Auth::user();
     
        $users=DB::table('socialusers')->where('userid',$userid)->get();
        return view('index',compact('users','username'));
      
    }


     public function showall()
    {
        $actives=Activeuser::all();
        foreach ($actives as $active) {
            $id=$active->userid;
            $users = DB::table('users')->where('id',$id)->get();
            foreach ($users as $user) {
                //echo $user->name;
                $id=$user->id;
                $photos=DB::table('socialusers')->where('userid',$id)->get();
                foreach ($photos as $photo) {
                    $data="
                <img src='$photo->photo' alt='Avatar' style='width:50px;height:50px' class='rounded-circle'>
                  <span>$user->name</span>
                  <span class='badge badge-pill badge-success'>&nbsp;</span><br><br>
          ";

                echo $data;
                }
                
            }
            
        }
   
    }


}
