<?php
/**
 * Template: Static Front Page
 *
 * @package MillerTree
 */

get_header();

$uri = get_template_directory_uri();
?>

    <!-- HERO -->
    <section class="hero" aria-labelledby="hero-title">
        <div class="hero__image" role="presentation">
            <img src="<?php echo esc_url($uri); ?>/images/generated/tree-removal-action.jpg" alt="" aria-hidden="true">
        </div>
        <div class="hero__content">
            <div class="container">
                <div class="hero__pill">
                    <span class="hero__pill-stars">
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        5.0
                    </span>
                    115+ Google Reviews
                </div>
                <h1 id="hero-title" class="hero__title">
                    The Tri-State&rsquo;s Most Trusted Tree Experts
                </h1>
                <p class="hero__subtitle">
                    Professional tree removal, trimming, stump grinding, and storm damage cleanup serving Berryville, Winchester, and communities across Virginia, Maryland &amp; West Virginia.
                </p>
                <div class="hero__actions">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn--primary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                        Get Free Estimate
                    </a>
                    <a href="tel:5403131306" class="btn btn--glass">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                        (540) 313-1306
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/trust-bar'); ?>

    <!-- SERVICES -->
    <section class="section section--lg" id="services" aria-labelledby="services-title">
        <div class="container">
            <div class="section__header reveal">
                <div class="section__eyebrow">What We Do</div>
                <h2 id="services-title" class="section__title">Professional Tree Care Services</h2>
                <p class="section__desc">From precision pruning to complete removal, our experienced crew handles every job with the care and expertise your property deserves.</p>
            </div>

            <div class="services__grid">
                <article class="svc reveal reveal-d1">
                    <div class="svc__img">
                        <img src="<?php echo esc_url($uri); ?>/images/generated/tree-removal-action.jpg" alt="Professional arborist performing tree removal in Berryville, Virginia" loading="lazy">
                    </div>
                    <div class="svc__body">
                        <h3 class="svc__title">Tree Removal</h3>
                        <p class="svc__desc">Safe, efficient removal of dangerous, dead, or unwanted trees. We handle everything from small yard trees to large, complex removals near structures.</p>
                        <a href="<?php echo esc_url(home_url('/tree-removal/')); ?>" class="svc__link">
                            Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </article>

                <article class="svc reveal reveal-d2">
                    <div class="svc__img">
                        <img src="<?php echo esc_url($uri); ?>/images/yelp-tree-service-1.jpg" alt="Tree trimming and pruning service by Miller Tree Experts" loading="lazy">
                    </div>
                    <div class="svc__body">
                        <h3 class="svc__title">Tree Trimming &amp; Pruning</h3>
                        <p class="svc__desc">Expert pruning to improve tree health, shape, and safety. We follow ISA standards to protect your trees and enhance your property&rsquo;s curb appeal.</p>
                        <a href="<?php echo esc_url(home_url('/tree-trimming/')); ?>" class="svc__link">
                            Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </article>

                <article class="svc reveal reveal-d3">
                    <div class="svc__img">
                        <img src="<?php echo esc_url($uri); ?>/images/generated/stump-grinding.jpg" alt="Stump grinding service removing tree stump on residential property" loading="lazy">
                    </div>
                    <div class="svc__body">
                        <h3 class="svc__title">Stump Grinding</h3>
                        <p class="svc__desc">Complete stump removal below ground level so you can reclaim your yard. No eyesore, no tripping hazard, no regrowth&mdash;just clean, usable space.</p>
                        <a href="<?php echo esc_url(home_url('/stump-grinding/')); ?>" class="svc__link">
                            Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </article>

                <article class="svc reveal reveal-d1">
                    <div class="svc__img">
                        <img src="<?php echo esc_url($uri); ?>/images/generated/storm-damage.jpg" alt="Emergency storm damage tree removal with bucket truck" loading="lazy">
                    </div>
                    <div class="svc__body">
                        <h3 class="svc__title">Storm Damage &amp; Emergency</h3>
                        <p class="svc__desc">When severe weather strikes, we respond fast. Emergency tree removal and storm damage cleanup to make your property safe and accessible again.</p>
                        <a href="<?php echo esc_url(home_url('/storm-damage/')); ?>" class="svc__link">
                            Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </article>

                <article class="svc reveal reveal-d2">
                    <div class="svc__img">
                        <img src="<?php echo esc_url($uri); ?>/images/yelp-tree-service-3.jpg" alt="Lot clearing and land preparation service" loading="lazy">
                    </div>
                    <div class="svc__body">
                        <h3 class="svc__title">Lot Clearing</h3>
                        <p class="svc__desc">Preparing land for construction or improving your property? We clear trees, brush, and debris efficiently to get your project started on solid ground.</p>
                        <a href="<?php echo esc_url(home_url('/lot-clearing/')); ?>" class="svc__link">
                            Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </article>

                <article class="svc reveal reveal-d3">
                    <div class="svc__img">
                        <img src="<?php echo esc_url($uri); ?>/images/yelp-tree-service-7.jpg" alt="Property clean-up and debris removal service" loading="lazy">
                    </div>
                    <div class="svc__body">
                        <h3 class="svc__title">Clean-Ups</h3>
                        <p class="svc__desc">From fallen branches to overgrown properties, we handle the heavy lifting. Complete debris removal and property clean-up so your yard looks its best.</p>
                        <a href="<?php echo esc_url(home_url('/clean-ups/')); ?>" class="svc__link">
                            Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ABOUT / WHY US -->
    <section class="section section--lg section--gray" id="about" aria-labelledby="about-title">
        <div class="container">
            <div class="about__grid">
                <div class="about__image reveal">
                    <img src="<?php echo esc_url($uri); ?>/images/generated/about-bg.jpg" alt="Professional arborist equipment and climbing gear used by Miller Tree Experts" loading="lazy">
                    <div class="about__image-badge">
                        <div class="about__image-badge-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <div>
                            <div class="about__image-badge-text">Fully Licensed &amp; Insured</div>
                            <div class="about__image-badge-sub">Comprehensive liability coverage</div>
                        </div>
                    </div>
                </div>

                <div class="reveal">
                    <div class="section__eyebrow">Why Miller Tree Experts</div>
                    <h2 id="about-title" class="section__title">Built on Hard Work &amp; Honest Service</h2>
                    <p class="section__desc">When Chris Miller started Miller Tree Experts, the goal was simple: do great work, treat people right, and let the results speak for themselves. That formula has earned us a perfect 5.0 Google rating and the trust of homeowners across three states.</p>

                    <div class="about__features">
                        <div class="about__feat reveal reveal-d1">
                            <div class="about__feat-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <div class="about__feat-title">5-Star Quality, Every Time</div>
                                <div class="about__feat-desc">115+ five-star reviews. Zero compromises on safety, precision, or cleanup.</div>
                            </div>
                        </div>
                        <div class="about__feat reveal reveal-d2">
                            <div class="about__feat-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            </div>
                            <div>
                                <div class="about__feat-title">Prompt &amp; Professional</div>
                                <div class="about__feat-desc">We show up on time, communicate clearly, and leave your property cleaner than we found it.</div>
                            </div>
                        </div>
                        <div class="about__feat reveal reveal-d3">
                            <div class="about__feat-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                            </div>
                            <div>
                                <div class="about__feat-title">Tri-State Service Area</div>
                                <div class="about__feat-desc">Serving communities across Virginia, West Virginia, and Maryland from our Berryville base.</div>
                            </div>
                        </div>
                        <div class="about__feat reveal reveal-d4">
                            <div class="about__feat-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                            </div>
                            <div>
                                <div class="about__feat-title">Free Estimates</div>
                                <div class="about__feat-desc">Transparent, no-obligation quotes so you know exactly what to expect before any work begins.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="stats reveal">
                <div class="stat">
                    <div class="stat__number">5.0</div>
                    <div class="stat__label">Google Rating</div>
                </div>
                <div class="stat">
                    <div class="stat__number">115+</div>
                    <div class="stat__label">5-Star Reviews</div>
                </div>
                <div class="stat">
                    <div class="stat__number">3</div>
                    <div class="stat__label">States Served</div>
                </div>
                <div class="stat">
                    <div class="stat__number">100%</div>
                    <div class="stat__label">Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

    <!-- REVIEWS -->
    <section class="section section--lg" id="reviews" aria-labelledby="reviews-title">
        <div class="container">
            <div class="section__header reveal">
                <div class="section__eyebrow">Reviews</div>
                <h2 id="reviews-title" class="section__title">What Our Customers Say</h2>
                <p class="section__desc">Don&rsquo;t just take our word for it. Here&rsquo;s what homeowners across the Shenandoah Valley have to say about working with Miller Tree Experts.</p>
            </div>

            <div class="reviews__grid">
                <article class="review reveal reveal-d1">
                    <div class="review__stars" aria-label="5 out of 5 stars">
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                    <blockquote class="review__quote">&ldquo;Highly recommend this team for high quality, reasonable priced service. They were professional, efficient, and left the yard looking better than before.&rdquo;</blockquote>
                    <div class="review__author">
                        <div class="review__avatar">
                            <img src="<?php echo esc_url($uri); ?>/images/reviewers/reviewer-1.jpg" alt="Arlene Jones" loading="lazy">
                        </div>
                        <div>
                            <div class="review__name">Arlene Jones</div>
                            <div class="review__source">Google Review</div>
                        </div>
                    </div>
                </article>

                <article class="review reveal reveal-d2">
                    <div class="review__stars" aria-label="5 out of 5 stars">
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                    <blockquote class="review__quote">&ldquo;Excellent work and a business that is run right, with the customer in mind. From the initial estimate to the final cleanup, everything was top notch.&rdquo;</blockquote>
                    <div class="review__author">
                        <div class="review__avatar">
                            <img src="<?php echo esc_url($uri); ?>/images/reviewers/reviewer-2.jpg" alt="Matthew Harvey" loading="lazy">
                        </div>
                        <div>
                            <div class="review__name">Matthew Harvey</div>
                            <div class="review__source">Google Review</div>
                        </div>
                    </div>
                </article>

                <article class="review reveal reveal-d3">
                    <div class="review__stars" aria-label="5 out of 5 stars">
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                    <blockquote class="review__quote">&ldquo;Very personable yet professional business from the owner to employees. They treated our property with respect and the results exceeded our expectations.&rdquo;</blockquote>
                    <div class="review__author">
                        <div class="review__avatar">
                            <img src="<?php echo esc_url($uri); ?>/images/reviewers/reviewer-3.jpg" alt="Lee Ann Skinner" loading="lazy">
                        </div>
                        <div>
                            <div class="review__name">Lee Ann Skinner</div>
                            <div class="review__source">Google Review</div>
                        </div>
                    </div>
                </article>
            </div>

            <div class="reviews__badge reveal">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="#F59E0B"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <span><strong>5.0 out of 5</strong> based on 115+ Google Reviews</span>
            </div>
        </div>
    </section>

    <!-- GALLERY -->
    <div class="gallery section--gray" aria-label="Project gallery">
        <div class="container container--wide">
            <div class="section__header reveal">
                <div class="section__eyebrow">Our Work</div>
                <h2 class="section__title">See the Results</h2>
            </div>
            <div class="gallery__grid reveal">
                <div class="gallery__item">
                    <img src="<?php echo esc_url($uri); ?>/images/yelp-tree-service-1.jpg" alt="Large tree removal with crane on residential property" loading="lazy">
                </div>
                <div class="gallery__item">
                    <img src="<?php echo esc_url($uri); ?>/images/yelp-tree-service-3.jpg" alt="Tree crew working on stump after removal" loading="lazy">
                </div>
                <div class="gallery__item">
                    <img src="<?php echo esc_url($uri); ?>/images/fb-tree-work-6.jpg" alt="Large tree removal on open property" loading="lazy">
                </div>
                <div class="gallery__item">
                    <img src="<?php echo esc_url($uri); ?>/images/yelp-tree-service-4.jpg" alt="Clean property after professional tree care" loading="lazy">
                </div>
                <div class="gallery__item">
                    <img src="<?php echo esc_url($uri); ?>/images/fb-tree-work-4.jpg" alt="Aerial view of tree removal job in progress" loading="lazy">
                </div>
                <div class="gallery__item">
                    <img src="<?php echo esc_url($uri); ?>/images/fb-tree-work-3.jpg" alt="Lot clearing project in progress" loading="lazy">
                </div>
                <div class="gallery__item">
                    <img src="<?php echo esc_url($uri); ?>/images/yelp-tree-service-7.jpg" alt="Storm damage cleanup and fallen tree removal" loading="lazy">
                </div>
                <div class="gallery__item">
                    <img src="<?php echo esc_url($uri); ?>/images/yelp-tree-service-8.jpg" alt="Stump grinding service leaving clean yard" loading="lazy">
                </div>
                <div class="gallery__item">
                    <img src="<?php echo esc_url($uri); ?>/images/fb-tree-work-7.jpg" alt="Massive tree stump after professional removal" loading="lazy">
                </div>
                <div class="gallery__item">
                    <img src="<?php echo esc_url($uri); ?>/images/fb-tree-work-5.jpg" alt="Professional arborist with felled tree trunk" loading="lazy">
                </div>
                <div class="gallery__item">
                    <img src="<?php echo esc_url($uri); ?>/images/yelp-tree-service-10.jpg" alt="Professional tree care on mature hardwood" loading="lazy">
                </div>
                <div class="gallery__item">
                    <img src="<?php echo esc_url($uri); ?>/images/yelp-tree-service-6.jpg" alt="Property after full tree service cleanup" loading="lazy">
                </div>
            </div>
        </div>
    </div>

    <!-- SERVICE AREAS -->
    <section class="section section--lg" id="areas" aria-labelledby="areas-title">
        <div class="container">
            <div class="section__header reveal">
                <div class="section__eyebrow">Service Areas</div>
                <h2 id="areas-title" class="section__title">Proudly Serving Three States</h2>
                <p class="section__desc">Based in Berryville, Virginia, we serve communities across the Shenandoah Valley and beyond. If you&rsquo;re in our coverage area, we&rsquo;ll be there.</p>
            </div>

            <div class="areas__map reveal">
                <img src="<?php echo esc_url($uri); ?>/images/generated/property-trees.jpg" alt="" aria-hidden="true">
                <div class="areas__map-overlay">
                    <div class="areas__map-pin">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <div class="areas__map-title">Berryville, VA</div>
                    <div class="areas__map-sub">Home Base &mdash; Serving 50+ Mile Radius</div>
                </div>
            </div>

            <div class="areas__cards">
                <div class="areas__card reveal reveal-d1">
                    <div class="areas__card-heading">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        Virginia
                    </div>
                    <div class="areas__card-list">
                        <span>Berryville</span>
                        <span>Winchester</span>
                        <span>Front Royal</span>
                        <span>Leesburg</span>
                        <span>Purcellville</span>
                        <span>Stephens City</span>
                        <span>Strasburg</span>
                        <span>Middleburg</span>
                        <span>Round Hill</span>
                        <span>Clarke County</span>
                    </div>
                </div>

                <div class="areas__card reveal reveal-d2">
                    <div class="areas__card-heading">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        West Virginia
                    </div>
                    <div class="areas__card-list">
                        <span>Charles Town</span>
                        <span>Martinsburg</span>
                    </div>
                </div>

                <div class="areas__card reveal reveal-d3">
                    <div class="areas__card-heading">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        Maryland
                    </div>
                    <div class="areas__card-list">
                        <span>Hagerstown</span>
                        <span>Frederick</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/cta-banner'); ?>

<?php get_footer();
