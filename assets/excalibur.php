<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * 
 * CSS and Script register 
 */

function excalibur_css_js() {
	global $wp_styles;
		// register main stylesheet
		wp_register_style('excalibur-stylesheet', get_stylesheet_directory_uri() . '/assets/css/styles.css', array(), '', 'all');
		
		wp_enqueue_style( 'excalibur-stylesheet' );
}

?>