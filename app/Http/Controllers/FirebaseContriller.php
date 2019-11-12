<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirebaseContriller extends Controller
{
     public function index(Request $request){
     	 return view('games');
     }
     public function teams(Request $request){
     	 return view('teams');
     }
     public function users(Request $request){
     	 return view('users');
     }
}
