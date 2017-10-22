<?php

function load_scripts() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );

	wp_enqueue_style('main_css', get_stylesheet_uri());

	wp_enqueue_script( 'popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js');
	wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js');

	wp_enqueue_script('custom-script',
		get_stylesheet_directory_uri() . '/assets/js/main.js',
		array('jquery')
		);
}

//add stylesheet 
add_action('wp_enqueue_scripts','load_scripts');


function theme_support() {
	 //add feautured image support
	add_theme_support('post-thumbnails');

	 //register navigation menus
	register_nav_menus(array(
	  'primary' => __('Front primary menu')
	));
}

add_action('after_setup_theme','theme_support');

function customize_excerpt_length() {
	return 30;
}

add_action('excerpt_length','customize_excerpt_length');


//Max title length
function max_title_length($max, $title) {	
    if ( strlen($title) > $max ) {
    	  return substr($title, 0, $max) . '...';
    } else {
    	return $title;
    }
}


// Widgets
function widgets() {
     register_sidebar(
     	array(
     	'name' => 'Sidebar1',
     	'id' => 'sidebar1'
     	));
     register_sidebar(
     	array(
     	'name' => 'Sidebar2',
     	'id' => 'sidebar2'
     	));
     register_sidebar(
     	array(
     	'name' => 'Sidebar3',
     	'id' => 'sidebar3'
     	));
}


add_action("widgets_init","widgets");