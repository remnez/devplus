<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Home page controller

    public function home(){
    	return view('pages.home');
    }
}
