<?php get_header(); $uri = get_template_directory_uri(); ?>



        <!-- PAGE HERO -->
        <section class="page-hero" aria-labelledby="blog-title">
            <div class="container reveal">
                <div class="section__eyebrow">Our Blog</div>
                <h1 id="blog-title" class="page-hero__title">Tree Care Tips &amp; Insights</h1>
                <p class="page-hero__subtitle">Expert advice on tree health, seasonal maintenance, and property care from the Miller Tree Experts team.</p>
            </div>
        </section>

        <!-- FEATURED POST -->
        <?php
        $sticky = get_option('sticky_posts');
        $featured_args = [
            'posts_per_page' => 1,
            'post__in' => $sticky ?: [],
            'ignore_sticky_posts' => empty($sticky) ? 1 : 0,
        ];
        if (empty($sticky)) {
            $featured_args = ['posts_per_page' => 1];
        }
        $featured = new WP_Query($featured_args);
        if ($featured->have_posts()) : $featured->the_post();
        ?>
        <section class="featured" aria-labelledby="featured-title">
            <div class="container">
                <a href="<?php the_permalink(); ?>" class="featured__card reveal" aria-label="Read featured post: <?php the_title_attribute(); ?>">
                    <div class="featured__image">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', ['alt' => get_the_title(), 'loading' => 'lazy']); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url($uri); ?>/images/generated/hero-bg.jpg" alt="" loading="lazy">
                        <?php endif; ?>
                        <div class="featured__image-overlay">
                            <span class="featured__badge featured__badge--highlight">Featured</span>
                        </div>
                    </div>
                    <div class="featured__body">
                        <span class="featured__category"><?php $cats = get_the_category(); if ($cats) echo esc_html($cats[0]->name); ?></span>
                        <h2 id="featured-title" class="featured__title"><?php the_title(); ?></h2>
                        <p class="featured__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                        <div class="featured__meta">
                            <span class="featured__date">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                <?php echo get_the_date('F j, Y'); ?>
                            </span>
                            <span class="featured__link">
                                Read More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <?php
        $featured_post_id = get_the_ID();
        wp_reset_postdata();
        endif;
        ?>

        <!-- BLOG GRID -->
        <section class="section section--gray" aria-labelledby="posts-title">
            <div class="container">
                <div class="section__header reveal">
                    <div class="section__eyebrow">Browse Articles</div>
                    <h2 id="posts-title" class="section__title">Latest Posts</h2>
                    <p class="section__desc">Practical advice from our team to help you make informed decisions about the trees on your property.</p>
                </div>

                <!-- Category Filter Bar -->
                <div class="filter-bar reveal" role="navigation" aria-label="Blog category filters">
                    <button class="filter-btn active" data-filter="all">All</button>
                    <button class="filter-btn" data-filter="tree-removal">Tree Removal</button>
                    <button class="filter-btn" data-filter="tree-care">Tree Care</button>
                    <button class="filter-btn" data-filter="tree-health">Tree Health</button>
                    <button class="filter-btn" data-filter="storm-damage">Storm Damage</button>
                    <button class="filter-btn" data-filter="stump-grinding">Stump Grinding</button>
                    <button class="filter-btn" data-filter="tips">Tips</button>
                    <button class="filter-btn" data-filter="lot-clearing">Lot Clearing</button>
                </div>

                <!-- Blog Cards Grid -->
                <?php if (have_posts()) : ?>
                <div class="blog-grid">
                    <?php while (have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="blog-card reveal">
                        <div class="blog-card__image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large', ['loading' => 'lazy']); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url($uri); ?>/images/generated/hero-bg.jpg" alt="" loading="lazy">
                            <?php endif; ?>
                        </div>
                        <div class="blog-card__body">
                            <span class="blog-card__category"><?php $cats = get_the_category(); if ($cats) echo esc_html($cats[0]->name); ?></span>
                            <h3 class="blog-card__title"><?php the_title(); ?></h3>
                            <p class="blog-card__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <div class="blog-card__meta">
                                <span class="blog-card__date">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                    <?php echo get_the_date('F j, Y'); ?>
                                </span>
                                <span class="blog-card__link">
                                    Read More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                </span>
                            </div>
                        </div>
                    </a>
                    <?php endwhile; ?>
                </div>
                <?php the_posts_navigation(); ?>
                <?php else : ?>
                <p>No posts found.</p>
                <?php endif; ?>

            </div>
        </section>

        <!-- NEWSLETTER CTA -->
        <section class="newsletter" aria-labelledby="newsletter-title">
            <div class="container reveal">
                <div class="newsletter__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </div>
                <h2 id="newsletter-title" class="newsletter__title">Stay Informed</h2>
                <p class="newsletter__desc">Get tree care tips and seasonal reminders delivered to your inbox.</p>
                <form class="newsletter__form" aria-label="Newsletter signup form">
                    <input type="email" class="newsletter__input" placeholder="Enter your email address" aria-label="Email address" required>
                    <button type="submit" class="newsletter__btn">Subscribe</button>
                </form>
            </div>
        </section>

        <!-- BOTTOM CTA -->
        <?php get_template_part('template-parts/cta-banner'); ?>



<?php get_footer();
