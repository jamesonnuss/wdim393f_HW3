<?php

function awesometitle($title){
	$title = "I am Awesome";
	return $title;


}

add_filter('wp_title', 'awesometitle', 20);