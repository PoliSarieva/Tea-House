<?php


/**
 * Add the top level menu page.
 */
function tea_options_page() {
	add_menu_page(
		'Tea Options',
		'Tea Options',
		'manage_options',
		'tea-options',
		'tea_options_page_html'
	);
}
/**
 * Register our options page to the admin_menu action hook.
 */
add_action( 'admin_menu', 'tea_options_page' );

function tea_options_page_html() {
    include TEA_HOUSE_PLUGIN_INCLUDES_DIR . '/options-page.php';
}


 

