<?php
/*
Plugin Name: Hello Cloud Plugin
Description: A simple cloud plugin that adds a [hello_cloud] shortcode
Version: 1.0.0
Author: xAI
*/

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Register shortcode
add_shortcode('hello_cloud', function($atts) {
    $atts = shortcode_atts(['name' => 'World'], $atts);
    return '<div class="hello-cloud" data-name="' . esc_attr($atts['name']) . '">' . esc_html__('Hello, ' . $atts['name'] . '!', 'hello-cloud') . '</div>';
});

// Add translation support
add_action('init', function() {
    load_plugin_textdomain('hello-cloud', false, dirname(plugin_basename(__FILE__)) . '/languages');
});

?>
