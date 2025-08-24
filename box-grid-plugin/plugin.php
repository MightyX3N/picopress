<?php
/*
Plugin Name: Box Grid Plugin
Description: Displays a grid of boxes for testing
Version: 1.0.0
Author: Test Author
*/
if (!defined('ABSPATH')) exit;
add_action('wp_footer', function() {
    echo '<div class="box-grid">
        <div class="grid-box"></div>
        <div class="grid-box"></div>
        <div class="grid-box"></div>
    </div>';
});
