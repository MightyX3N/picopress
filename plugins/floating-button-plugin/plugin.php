<?php
/*
Plugin Name: Floating Button Plugin
Description: Shows a floating button for testing Cloud Plugins Manager
Version: 1.0.0
Author: Test Author
*/
if (!defined('ABSPATH')) exit;
add_action('wp_footer', function() {
    echo '<button id="floating-btn">Click Me</button>';
});
