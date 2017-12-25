<?php

require_once locate_template('widgets.php', true);

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
add_action('wp_head', 'add_meta_to_head');
add_action('admin_bar_menu', 'admin_bar_custom', 11);
add_filter('admin_footer_text', 'remove_footer_admin');

function add_meta_to_head()
{
	echo '<script defer src="'. get_stylesheet_directory_uri() . "/assets/js/fontawesome-all.min.js". '"></script>';
}

function admin_bar_custom($wp_admin_bar)
{
	$wp_admin_bar->remove_menu('wp-logo');
	$wp_admin_bar->add_menu(array(
		'id' => 'customized-by',
		'title' => 'WordPress - customized by almajiro'
	));
}

function remove_footer_admin()
{
	echo '<span id="footer-thankyou">&copy; almajiro All rights reserved.</span>';
}

function theme_enqueue_styles()
{
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

?>
