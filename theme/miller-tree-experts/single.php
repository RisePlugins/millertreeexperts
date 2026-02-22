<?php get_header(); $uri = get_template_directory_uri(); ?>

    <!-- READING PROGRESS BAR -->
    <div class="progress-bar" id="progressBar" aria-hidden="true"></div>



        <!-- BREADCRUMB -->
        <div class="breadcrumb">
            <div class="container">
                <ol class="breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="<?php echo esc_url(home_url('/')); ?>" itemprop="item"><span itemprop="name">Home</span></a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="breadcrumb__sep" aria-hidden="true">&rsaquo;</li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" itemprop="item"><span itemprop="name">Blog</span></a>
                        <meta itemprop="position" content="2">
                    </li>
                    <li class="breadcrumb__sep" aria-hidden="true">&rsaquo;</li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <span class="breadcrumb__current" itemprop="name"><?php the_title(); ?></span>
                        <meta itemprop="position" content="3">
                    </li>
                </ol>
            </div>
        </div>

        <?php while (have_posts()) : the_post(); ?>

        <!-- POST HEADER -->
        <div class="container">
            <div class="post-header">
                <span class="post-header__category"><?php $cats = get_the_category(); if ($cats) echo esc_html($cats[0]->name); ?></span>
                <h1 class="post-header__title"><?php the_title(); ?></h1>
                <div class="post-header__meta">
                    <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('F j, Y'); ?></time>
                    <span class="post-header__meta-sep">&middot;</span>
                    <span><?php
                        $content = get_the_content();
                        $word_count = str_word_count(wp_strip_all_tags($content));
                        $reading_time = max(1, ceil($word_count / 250));
                        echo $reading_time . ' min read';
                    ?></span>
                    <span class="post-header__meta-sep">&middot;</span>
                    <span>By <span class="post-header__author"><?php the_author(); ?></span></span>
                </div>
            </div>
        </div>

        <!-- ARTICLE LAYOUT -->
        <div class="article-layout">

            <!-- ARTICLE BODY -->
            <article class="article" id="article-content">

                <!-- FEATURED IMAGE -->
                <?php if (has_post_thumbnail()) : ?>
                <figure class="post-featured">
                    <?php the_post_thumbnail('full', ['width' => 840, 'height' => 473]); ?>
                </figure>
                <?php endif; ?>

                <?php the_content(); ?>

            </article>

            <!-- TABLE OF CONTENTS (sidebar) -->
            <aside class="toc" aria-label="Table of Contents">
                <div class="toc__inner">
                    <div class="toc__title">In This Article</div>
                    <nav class="toc__list" id="toc-list">
                        <!-- Populated via JS from h2 headings -->
                    </nav>
                </div>
            </aside>

        </div>

        <!-- AUTHOR BOX -->
        <div class="container">
            <div class="author-box reveal">
                <div class="author-box__avatar">CM</div>
                <div class="author-box__info">
                    <div class="author-box__label">Written by</div>
                    <div class="author-box__name">Chris Miller</div>
                    <div class="author-box__title">Owner &amp; Lead Arborist</div>
                    <p class="author-box__bio">Chris founded Miller Tree Experts with a simple mission: deliver exceptional tree care with honest, straightforward service. With years of hands-on experience and a commitment to safety, Chris and his team have earned a 5.0 Google rating and the trust of homeowners across Virginia, Maryland, and West Virginia.</p>
                    <div class="author-box__social">
                        <a href="https://www.facebook.com/millertreeexpert/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/millertreeexperts/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php endwhile; ?>

        <!-- RELATED POSTS -->
        <?php
        $related = new WP_Query([
            'posts_per_page' => 3,
            'post__not_in' => [get_the_ID()],
            'orderby' => 'rand',
        ]);
        if ($related->have_posts()) :
        ?>
        <section class="related" aria-labelledby="related-title">
            <div class="container">
                <div class="section__header reveal">
                    <div class="section__eyebrow">Keep Reading</div>
                    <h2 id="related-title" class="section__title">More Tree Care Tips</h2>
                </div>

                <div class="related__grid">
                    <?php while ($related->have_posts()) : $related->the_post(); ?>
                    <article class="related-card reveal">
                        <a href="<?php the_permalink(); ?>">
                            <div class="related-card__img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium_large', ['loading' => 'lazy']); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url($uri); ?>/images/generated/hero-bg.jpg" alt="" loading="lazy">
                                <?php endif; ?>
                            </div>
                            <div class="related-card__body">
                                <span class="related-card__category"><?php $cats = get_the_category(); if ($cats) echo esc_html($cats[0]->name); ?></span>
                                <h3 class="related-card__title"><?php the_title(); ?></h3>
                                <p class="related-card__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
                                <span class="related-card__link">
                                    Read article <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                </span>
                            </div>
                        </a>
                    </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- CTA -->
        <?php get_template_part('template-parts/cta-banner'); ?>



    <script>
        // ========================================
        // AUTO-GENERATE TABLE OF CONTENTS
        // ========================================
        (function() {
            const article = document.getElementById('article-content');
            const tocList = document.getElementById('toc-list');
            if (!article || !tocList) return;

            const headings = article.querySelectorAll('h2');
            headings.forEach(function(heading, index) {
                if (!heading.id) {
                    heading.id = 'section-' + index;
                }
                const link = document.createElement('a');
                link.href = '#' + heading.id;
                link.className = 'toc__link';
                link.setAttribute('data-target', heading.id);
                link.textContent = heading.textContent;
                tocList.appendChild(link);
            });

            // Highlight active TOC section
            var tocLinks = tocList.querySelectorAll('.toc__link');
            var tocObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var id = entry.target.getAttribute('id');
                        tocLinks.forEach(function(link) {
                            link.classList.toggle('active', link.getAttribute('data-target') === id);
                        });
                    }
                });
            }, {
                rootMargin: '-96px 0px -70% 0px',
                threshold: 0
            });

            headings.forEach(function(h) { tocObserver.observe(h); });

            // Smooth scroll for TOC links
            tocLinks.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    var targetId = link.getAttribute('data-target');
                    var target = document.getElementById(targetId);
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                });
            });
        })();

        // ========================================
        // READING PROGRESS BAR
        // ========================================
        (function() {
            var progressBar = document.getElementById('progressBar');
            var article = document.getElementById('article-content');

            function updateProgress() {
                if (!article) return;
                var articleTop = article.offsetTop;
                var articleHeight = article.offsetHeight;
                var windowHeight = window.innerHeight;
                var scrollY = window.scrollY;

                var start = articleTop - windowHeight;
                var end = articleTop + articleHeight;
                var progress = Math.min(Math.max((scrollY - start) / (end - start), 0), 1);
                progressBar.style.width = (progress * 100) + '%';
            }

            window.addEventListener('scroll', updateProgress, { passive: true });
            window.addEventListener('resize', updateProgress, { passive: true });
            updateProgress();
        })();
    </script>

<?php get_footer();
