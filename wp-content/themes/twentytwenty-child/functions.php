<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Modal Test',
		'menu_title'	=> 'Modal Test',
		'menu_slug' 	=> 'modal-test-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}

function create_posttype() {

    register_post_type( 'Companies',

        array(
            'labels' => array(
                'name' => __( 'Companies' ),
                'singular_name' => __( 'Companies' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'companies'),
            'show_in_rest' => true,

        )
    );

    register_post_type( 'Reviews',

        array(
            'labels' => array(
                'name' => __( 'Reviews' ),
                'singular_name' => __( 'Reviews' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'reviews'),
            'show_in_rest' => true,

        )
    );

    register_post_type( 'Team',

        array(
            'labels' => array(
                'name' => __( 'Team' ),
                'singular_name' => __( 'Team' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'team'),
            'show_in_rest' => true,

        )
    );

}

add_action( 'init', 'create_posttype' );

 ?>
