<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
add_filter('admin_footer_text', 'remove_footer_admin');

function remove_footer_admin()
{
	echo '<span id="footer-thankyou">&copy; almajiro All rights reserved.</span>';
}

function theme_enqueue_styles()
{
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

?>
