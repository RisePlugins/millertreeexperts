<?php
/**
 * Theme Header — doctype, <head>, nav bar, mobile menu.
 *
 * @package MillerTree
 */

defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- NAV -->
    <header class="nav" role="banner">
        <div class="container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="nav__logo" aria-label="<?php bloginfo('name'); ?> - Home">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/miller-tree-logo.png" alt="<?php bloginfo('name'); ?> logo" width="140" height="44">
            </a>

            <nav class="nav__links" aria-label="Main navigation">
                <a href="<?php echo esc_url(home_url('/services/')); ?>">Services</a>
                <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
                <a href="<?php echo esc_url(home_url('/reviews/')); ?>">Reviews</a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
                <a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
            </nav>

            <div class="nav__cta">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                    Free Estimate
                </a>
            </div>

            <button class="nav__toggle" aria-label="Toggle menu" aria-expanded="false">
                <span></span>
            </button>
        </div>

        <nav class="nav__mobile" aria-label="Mobile navigation">
            <div class="nav__mobile-inner">
                <a href="<?php echo esc_url(home_url('/services/')); ?>">Services</a>
                <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
                <a href="<?php echo esc_url(home_url('/reviews/')); ?>">Reviews</a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
                <a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
                <a href="tel:5403131306" class="nav__mobile-phone">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="16" height="16"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                    (540) 313-1306
                </a>
            </div>
        </nav>
    </header>

    <main>
