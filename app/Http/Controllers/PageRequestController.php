<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageRequestController extends Controller
{
    // ## -- 1. View Landing
    public function viewLanding(){
        return view("landing.landingIndex");
    }

    // ## -- 2. View Webinar
    public function viewUmkm(){
        return view("umkm.umkmIndex");
    }

     // ## -- 3. View Register
     public function viewRegister(){
        return view("auth.register");
    }   
    
}
