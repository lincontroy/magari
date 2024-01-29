<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function about(){
        return view('about');
    }

    public function weddings(){
        return view('weddings');
    }
    public function contact(){
        return view('contact');
    }
    public function services(){
        return view('services');
    }
}
