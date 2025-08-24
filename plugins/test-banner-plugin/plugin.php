<?php
/*
Plugin Name: Test Banner Plugin
Description: Displays a banner at the top of the page for testing Cloud Plugins Manager
Version: 1.0.0
Author: Test Author
*/

if (!defined('ABSPATH')) exit;

// Output a banner at the top of every page
add_action('wp_footer', function() {
    echo '<div id="test-banner">Cloud Plugin Manager Test Banner 1</div>';
});
