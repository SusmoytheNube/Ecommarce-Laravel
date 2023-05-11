<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    //Dashboard
    public function index(){
        return view('Backend.dashboard');
    }
}
