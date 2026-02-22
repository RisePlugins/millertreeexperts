<?php
/**
 * Miller Tree Experts — Theme Functions
 *
 * @package MillerTree
 */

defined('ABSPATH') || exit;

/**
 * Theme setup: menus, theme supports, etc.
 */
function miller_tree_setup() {
    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Featured images on posts/pages
    add_theme_support('post-thumbnails');

    // HTML5 markup for core elements
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);


}
add_action('after_setup_theme', 'miller_tree_setup');

/**
 * Enqueue styles.
 */
function miller_tree_styles() {
    $v = wp_get_theme()->get('Version');
    $uri = get_template_directory_uri();

    // Google Fonts
    wp_enqueue_style(
        'miller-tree-fonts',
        'https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Outfit:wght@300;400;500;600;700&display=swap',
        [],
        null
    );

    // Global stylesheet
    wp_enqueue_style('miller-tree-global', $uri . '/css/global.css', ['miller-tree-fonts'], $v);

    // Component stylesheets
    $components = [
        'hero',
        'trust',
        'services',
        'about',
        'reviews',
        'gallery',
        'areas',
        'process',
        'svc-detail',
        'other-services',
        'faq',
        'why',
    ];
    foreach ($components as $c) {
        wp_enqueue_style(
            "miller-tree-{$c}",
            $uri . "/css/components/{$c}.css",
            ['miller-tree-global'],
            $v
        );
    }

    // Page-specific stylesheets — only load when needed
    if (is_page('about')) {
        wp_enqueue_style('miller-tree-page-about', $uri . '/css/pages/about.css', ['miller-tree-global'], $v);
    }
    if (is_page('contact')) {
        wp_enqueue_style('miller-tree-page-contact', $uri . '/css/pages/contact.css', ['miller-tree-global'], $v);
    }
    if (is_page('reviews')) {
        wp_enqueue_style('miller-tree-page-reviews', $uri . '/css/pages/reviews.css', ['miller-tree-global'], $v);
    }
    if (is_home() || is_archive() || is_search()) {
        wp_enqueue_style('miller-tree-page-blog', $uri . '/css/pages/blog.css', ['miller-tree-global'], $v);
    }
    if (is_single()) {
        wp_enqueue_style('miller-tree-page-blog-post', $uri . '/css/pages/blog-post.css', ['miller-tree-global'], $v);
    }
}
add_action('wp_enqueue_scripts', 'miller_tree_styles');

/**
 * Enqueue scripts.
 */
function miller_tree_scripts() {
    $v = wp_get_theme()->get('Version');
    $uri = get_template_directory_uri();

    wp_enqueue_script(
        'miller-tree-main',
        $uri . '/js/main.js',
        [],
        $v,
        true // Load in footer
    );
}
add_action('wp_enqueue_scripts', 'miller_tree_scripts');
