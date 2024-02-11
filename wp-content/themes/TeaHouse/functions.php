<?php

function my_load_scripts($hook) {

    $args = array( 
        'in_footer' => true,
        'strategy' => 'defer',
    );

    if (! defined( 'TEA_FILES_URL' ) ) {
        define( 'TEA_FILES_URL', get_template_directory_uri() );
    }

    add_theme_support( 'title-tag' );
	
    //Styles
    wp_enqueue_style( 'animate-min.css', TEA_FILES_URL . '/lib/animate/animate.min.css', false,   '1.0.0' );
    wp_enqueue_style( 'owl-carousel-min.css', 	TEA_FILES_URL . '/lib/owlcarousel/assets/owl.carousel.min.css', false,   '1.0.0' );
    wp_enqueue_style( 'bootstrap-min.css', 	TEA_FILES_URL . '/css/bootstrap.min.css', false,   '1.0.0' );
    wp_enqueue_style( 'style.css', 	TEA_FILES_URL . '/css/style.css', false,   '1.0.0' );
    wp_enqueue_style( 'logo.png', 	TEA_FILES_URL . '/img/logo.png', false,   '1.0.0' );
    wp_enqueue_style ( 'my_css' );

    //Scripts
    wp_enqueue_script( 'wow-min', TEA_FILES_URL . '/lib/wow/wow.min.js', array(),'1.0.0', $args );
    wp_enqueue_script( 'easing-min.', TEA_FILES_URL . '/lib/easing/easing.min.js', array(),'1.0.0', $args );
    wp_enqueue_script( 'waypoints', TEA_FILES_URL . '/lib/waypoints/waypoints.min.js', array(),'1.0.0', $args );
    wp_enqueue_script( 'owl-carousel-min', TEA_FILES_URL . '/lib/owlcarousel/owl.carousel.min.js', array(),'1.0.0', $args );
    wp_enqueue_script( 'main', TEA_FILES_URL . '/js/main.js', array(),'1.0.0', $args );
	

}
add_action('wp_enqueue_scripts', 'my_load_scripts');



/**
 * Register our navigation menus
 * 
 * @return void
 */

 function tea_register_nav_menus() {
    register_nav_menus(
        array(
        'header-menu' => __( 'Header Menu' ),
        )
    );
}
    add_action( 'init', 'tea_register_nav_menus' );


    /**
     * Sidebar here
     * 
     * @return void
     */
    
// function softuni_sidebars() {
//     register_sidebar(
//         array(
//             'id'            => 'footer-1',
//             'name'          => __( 'Footer 01' ),
//             'description'   => __( 'A short description of the sidebar.' ),
//             'before_widget' => '<div id="%1$s" class="widget %2$s">',
//             'after_widget'  => '</div>',
//             'before_title'  => '<h3 class="widget-title">',
//             'after_title'   => '</h3>',
//         )
//     );

//     register_sidebar(
//         array(
//             'id'            => 'footer-2',
//             'name'          => __( 'Footer 02' ),
//             'description'   => __( 'A short description of the sidebar.' ),
//             'before_widget' => '<div id="%1$s" class="widget %2$s">',
//             'after_widget'  => '</div>',
//             'before_title'  => '<h3 class="widget-title">',
//             'after_title'   => '</h3>',
//         )
//     );
// }

// add_action( 'widgets_init', 'softuni_sidebars' );
