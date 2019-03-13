<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PagesController extends Controller
{
    //Home page controller

    public function home(){

    	$portfolios = Portfolio::get();

    	return view('pages.home')->with([
    		'portfolios' => $portfolios,]);
    }


    public function getContact(){
    	return view('pages.contact_landing');
    }


}
