<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PagesController extends Controller
{
    //Home page controller

    public function home(){

    	$portfolios = Portfolio::get();

  //   	foreach ($portfolios as $portfolio) {
    	
	 // 		$screen_shot_json_data = file_get_contents("https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=".$portfolio->link."&screenshot=true");
		// 	$screen_shot_result = json_decode($screen_shot_json_data, true);
		// 	$screen_shot = $screen_shot_result['screenshot']['data'];
		// 	$screen_shot = str_replace(array('_','-'), array('/', '+'), $screen_shot);
		// 	$screen_shot_image = "<img src=\"data:image/jpeg;base64,".$screen_shot."\" class='img-responsive img-thumbnail'/>";
		// }
    	
    	// return view('pages.home')->with([
    	// 	'portfolio' => $portfolio,
    	// 	'screen_shot' => $screen_shot_image]);

    	return view('pages.home')->with([
    		'portfolios' => $portfolios,]);
    }


}
