<?php
/*
Plugin Name: Footer Message Plugin
Description: Displays a footer message for Cloud Plugin testing
Version: 1.0.0
Author: Test Author
*/
if (!defined('ABSPATH')) exit;
add_action('wp_footer', function() {
    echo '<div id="footer-msg">Footer Test Message ass</div>';
});
