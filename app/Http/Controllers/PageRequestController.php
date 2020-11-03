<?php

namespace App\Http\Controllers;
use App\Umkm;
use App\Rating;

use Illuminate\Http\Request;

class PageRequestController extends Controller
{
    // ## -- 1. View Landing
    public function viewLanding(){
        $ratings = Rating::get();
        $umkms = Umkm::get();
        return view('landing.landingIndex', ['umkms' => $umkms,
                                        'ratings' => $ratings]);
    }

    // ## -- 2. View Webinar
    public function viewUmkm(){
        return view("umkm.umkmIndex");
    }

     // ## -- 3. View Register
     public function viewRegister(){
        return view("auth.register");
    } 

     // ## -- 4. View User
     public function viewUser(){
        return view("user.userIndex");
    } 

     // ## -- 5. View Test
     public function viewTest(){
        return view("test.testIndex");
    }   
    
}
