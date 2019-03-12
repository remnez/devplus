<?php

	function imageSiteGrabber($url){

		$screen_shot_json_data = file_get_contents("https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=$url&screenshot=true");
		$screen_shot_result = json_decode($screen_shot_json_data, true);
		$screen_shot = $screen_shot_result['screenshot']['data'];
		$screen_shot = str_replace(array('_','-'), array('/', '+'), $screen_shot);
 		$screen_shot_image = "data:image/jpeg;base64,".$screen_shot."";
		return $screen_shot_image;

	}

