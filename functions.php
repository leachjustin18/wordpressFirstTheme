<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Require our core file
require_once ('assets/excalibur.php');

function excalibur_setup() {
	//base scripts and styles
	add_action( 'wp_enqueue_scripts', 'excalibur_css_js', 999 );
}


// Fire off our setup
add_action( 'after_setup_theme', 'excalibur_setup' );

?>

