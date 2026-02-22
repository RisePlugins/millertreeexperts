<?php
/**
 * The main template file — WordPress fallback.
 *
 * This file is required by WordPress. For the actual homepage,
 * see front-page.php. For blog listing, see home.php.
 *
 * @package MillerTree
 */

get_header(); ?>

    <section class="section section--lg">
        <div class="container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div><?php the_excerpt(); ?></div>
                    </article>
                <?php endwhile; ?>
                <?php the_posts_navigation(); ?>
            <?php else : ?>
                <p>No content found.</p>
            <?php endif; ?>
        </div>
    </section>

<?php get_footer();
