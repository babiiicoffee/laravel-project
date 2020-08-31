<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    function home_page(){
        
        return view('app');
    }
}
