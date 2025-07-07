<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
     public function welcome(){
        echo "welcome php method controller";
     }

     public function form(){
      return view('index');
     }

     public function userData($userr){
      echo "User Data is: ".$userr;
     }
}
