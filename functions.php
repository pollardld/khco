<?php

//---- Enqueue Sripts/Style ----//
 
function tfhf_scripts_styles() {

    wp_enqueue_style(
        'google-fonts',
        'http://fonts.googleapis.com/css?family=Roboto+Slab:400,100|Oxygen:400,300,700',
        array()
    );

	// Loads our main stylesheet.
	wp_enqueue_style( 
        'tfhf-style', 
        get_template_directory_uri() . '/css/style.css', 
        array( 'google-fonts' ) 
    );

    wp_enqueue_style(
        'mapbox',
        '//api.tiles.mapbox.com/mapbox.js/v1.5.2/mapbox.css',
        array()
    );

    wp_register_script( 
        'modernizr',
        get_stylesheet_directory_uri() . '/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js',
        false,
        '2.6.2',
        false
    );

	if ( is_home() || is_page( 11 ) ) {
		wp_register_script(
    		'mapbox',
    		'//api.tiles.mapbox.com/mapbox.js/v1.5.2/mapbox.js',
    		false,
    		'1.5.2',
    		true
    	);

    	wp_register_script (
    		'mapbox-main',
    		get_stylesheet_directory_uri() . '/js/mapbox-main.js',
        	array( 'jquery' ),
        	'1.0',
        	true
    	);
        
        wp_enqueue_script( 'mapbox' );
        wp_enqueue_script( 'mapbox-main' );
	}

	wp_register_script(
        'scripts',
        get_stylesheet_directory_uri() . '/js/main.js',
        array( 'jquery' ),
        '1.0',
        true
    );

    wp_enqueue_script( 'modernizr');
    wp_enqueue_script( 'scripts' );

}

add_action( 'wp_enqueue_scripts', 'tfhf_scripts_styles' );

//---- Register Sidebars ----//

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'id' => 'default-sidebar',
		'name' => 'Default Sidebar',
		'before_widget' => '<div id="%1$s" class="sb-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
	register_sidebar(array(
		'id' => 'secondary-sidebar',
		'name' => 'Secondary Sidebar',
		'before_widget' => '<div id="%1$s" class="sb-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
}

//---- Thumbnail Support ----//

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, true ); // Normal post thumbnails
	add_image_size('slider', 350, 300, true );
	add_image_size('featured-img', 9999, 800, true );
}

//---- Register Navs ----//

// function register_my_menus() {
  // register_nav_menus(
    // array(
      // 'primary' => __( 'Main Menu' ),
      // 'secondary' => __( 'Secondary Menu' )
    // )
  // );
// }
// add_action( 'init', 'register_my_menus' );
