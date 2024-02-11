<?php

function my_load_scripts($hook) {

    $args = array( 
        'in_footer' => true,
        'strategy' => 'defer',
    );

    if (! defined( 'TEA_FILES_URL' ) ) {
        define( 'TEA_FILES_URL', get_template_directory_uri() );
    }
	
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

// <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
//     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
//     <script src="lib/wow/wow.min.js"></script>
//     <script src="lib/easing/easing.min.js"></script>
//     <script src="lib/waypoints/waypoints.min.js"></script>
//     <script src="lib/owlcarousel/owl.carousel.min.js"></script>

//     <!-- Template Javascript -->
//     <script src="js/main.js"></script>