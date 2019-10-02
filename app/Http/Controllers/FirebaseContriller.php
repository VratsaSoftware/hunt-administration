<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirebaseContriller extends Controller
{
     public function index(Request $request){
     	 return view('firebase.games');
     }
}
