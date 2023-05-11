<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //home page
    public function index(){
        return view('Frontend.index');
    }
    //story page
    public function story(){
        return view('Frontend.story');
    }
    //menu page
    public function menu(){
        return view('Frontend.menu');
    }
    //news page
    public function news(){
        return view('Frontend.news');
    }
    //newsdetails page
    public function newsdetails(){
        return view('Frontend.newsdetails');
    }
    //contact page
    public function contact(){
        return view('Frontend.contact');
    }
}
