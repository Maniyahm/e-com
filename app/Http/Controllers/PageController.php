<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return view('page.about');
    }
    public function services(){
        return view('page.services');
    }
    public function contact(){
        return view('page.contact');
    }
}
