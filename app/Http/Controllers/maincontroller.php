<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maincontroller extends Controller
{
   public function indexpage(){
    return view('index');
   }
}
