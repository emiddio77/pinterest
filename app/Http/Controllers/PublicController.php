<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function homepage(){
    return view('welcome');
   }
   public function aboutus(){
    return view('aboutus');
   }
}
