<?php get_header(); $uri = get_template_directory_uri(); ?>



        <!-- PAGE HERO -->
        <section class="page-hero" aria-labelledby="page-hero-title">
            <div class="container">
                <div class="page-hero__quote-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                </div>
                <div class="page-hero__rating">
                    <span class="page-hero__rating-number">5.0</span>
                    <div class="page-hero__rating-stars">
                        <div class="page-hero__stars-row">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <span class="page-hero__rating-text">Google Reviews</span>
                    </div>
                </div>
                <h1 id="page-hero-title" class="page-hero__title">What Our Customers Say</h1>
                <p class="page-hero__subtitle">115+ five-star reviews from homeowners across Virginia, Maryland &amp; West Virginia. Real feedback from real customers who trust Miller Tree Experts.</p>

                <div class="page-hero__faces">
                    <div class="page-hero__face">
                        <img src="<?php echo esc_url($uri); ?>/images/reviewers/reviewer-1.jpg" alt="Reviewer Sarah M." loading="lazy">
                    </div>
                    <div class="page-hero__face">
                        <img src="<?php echo esc_url($uri); ?>/images/reviewers/reviewer-2.jpg" alt="Reviewer James R." loading="lazy">
                    </div>
                    <div class="page-hero__face">
                        <img src="<?php echo esc_url($uri); ?>/images/reviewers/reviewer-3.jpg" alt="Reviewer David K." loading="lazy">
                    </div>
                    <div class="page-hero__face">
                        <img src="<?php echo esc_url($uri); ?>/images/reviewers/reviewer-4.jpg" alt="Reviewer Patricia H." loading="lazy">
                    </div>
                    <div class="page-hero__face">
                        <img src="<?php echo esc_url($uri); ?>/images/reviewers/reviewer-5.jpg" alt="Reviewer Robert T." loading="lazy">
                    </div>
                    <span class="page-hero__faces-label"><strong>115+</strong> happy<br>customers</span>
                </div>
            </div>
        </section>

        <!-- RATING SUMMARY BAR -->
        <div class="rating-bar" role="complementary" aria-label="Rating summary">
            <div class="container">
                <div class="rating-bar__item">
                    <div class="rating-bar__icon">
                        <svg viewBox="0 0 24 24" fill="var(--green)" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                    <div>
                        <div class="rating-bar__value">5.0 / 5</div>
                        <div class="rating-bar__label">Overall Rating</div>
                    </div>
                </div>
                <div class="rating-bar__item">
                    <div class="rating-bar__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4-4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                    </div>
                    <div>
                        <div class="rating-bar__value">115+</div>
                        <div class="rating-bar__label">Total Reviews</div>
                    </div>
                </div>
                <div class="rating-bar__item">
                    <div class="rating-bar__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <div>
                        <div class="rating-bar__value">100%</div>
                        <div class="rating-bar__label">Recommendation Rate</div>
                    </div>
                </div>
                <div class="rating-bar__google">
                    <svg viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                    Google Reviews
                </div>
            </div>
        </div>

        <!-- FEATURED REVIEW -->
        <section class="section section--lg" aria-label="Featured review">
            <div class="container">
                <div class="featured-review reveal">
                    <div class="featured-review__badge">
                        <svg viewBox="0 0 24 24" fill="#F59E0B"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        Featured Review
                    </div>
                    <div class="featured-review__quote-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    </div>
                    <div class="featured-review__stars" aria-label="5 out of 5 stars">
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                    <blockquote class="featured-review__text">&ldquo;I highly recommend this company for any work related to trees in your property. Chris knows and understands trees, he gives excellent advice on what work is recommended and what trees to save. He and his team trimmed and cut some trees on our driveway and did a fabulous job.&rdquo;</blockquote>
                    <div class="featured-review__author">
                        <div class="featured-review__avatar">CB</div>
                        <div class="featured-review__info">
                            <div class="featured-review__name">Cecilia Breinbauer</div>
                            <div class="featured-review__location">Google Review &middot; 4 months ago</div>
                        </div>
                    </div>
                </div>

                <!-- REVIEWS GRID -->
                <div class="section__header reveal">
                    <div class="section__eyebrow">Customer Testimonials</div>
                    <h2 class="section__title">More Reviews from Our Customers</h2>
                    <p class="section__desc">Every review is from a verified customer on Google or Yelp. We let our work and our customers speak for themselves.</p>
                </div>

                <div class="reviews__grid">
                    <!-- Review 1 - Drew Scala (Google) -->
                    <article class="review reveal reveal-d1">
                        <div class="review__stars" aria-label="5 out of 5 stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <blockquote class="review__quote">&ldquo;Miller Tree Experts were incredible! I asked for an estimate from Chris on a Tuesday, he was out to my place Wednesday and the trees were taken down Thursday. His crew was so fast and my yard never looked so good.&rdquo;</blockquote>
                        <div class="review__footer">
                            <div class="review__author">
                                <img class="review__avatar review__avatar--photo" src="<?php echo esc_url($uri); ?>/images/reviewers/drew-s-yelp.jpg" alt="Drew Scala">
                                <div>
                                    <div class="review__name">Drew Scala</div>
                                    <div class="review__location">Harrisonburg, VA</div>
                                </div>
                            </div>
                            <span class="review__source-tag">
                                <svg viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google
                            </span>
                        </div>
                    </article>

                    <!-- Review 2 - Jennifer Garcia (Google) -->
                    <article class="review reveal reveal-d2">
                        <div class="review__stars" aria-label="5 out of 5 stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <blockquote class="review__quote">&ldquo;Chris and his team were fantastic to work with! I contacted him about what I could do with a tree in the backyard of my townhouse that was too big for the space. Chris advised me and recommended removal. Great work!&rdquo;</blockquote>
                        <div class="review__footer">
                            <div class="review__author">
                                <div class="review__avatar">JG</div>
                                <div>
                                    <div class="review__name">Jennifer Garcia</div>
                                    <div class="review__location">Google Review</div>
                                </div>
                            </div>
                            <span class="review__source-tag">
                                <svg viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google
                            </span>
                        </div>
                    </article>

                    <!-- Review 3 - Round Hill (Google) -->
                    <article class="review reveal reveal-d3">
                        <div class="review__stars" aria-label="5 out of 5 stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <blockquote class="review__quote">&ldquo;Miller Tree Experts provided valuable advice on tree care, arrived as scheduled, and professionally accomplished the tasks. Great job.&rdquo;</blockquote>
                        <div class="review__footer">
                            <div class="review__author">
                                <div class="review__avatar">RH</div>
                                <div>
                                    <div class="review__name">Round Hill</div>
                                    <div class="review__location">Google Review</div>
                                </div>
                            </div>
                            <span class="review__source-tag">
                                <svg viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google
                            </span>
                        </div>
                    </article>

                    <!-- Review 4 - George D. (Yelp) -->
                    <article class="review reveal reveal-d1">
                        <div class="review__stars" aria-label="5 out of 5 stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <blockquote class="review__quote">&ldquo;Miller Tree Experts are fantastic. Chris and his team expertly cleared large tree branches that were close to our house. We were very pleased with the friendly team and quite impressed by their professionalism.&rdquo;</blockquote>
                        <div class="review__footer">
                            <div class="review__author">
                                <div class="review__avatar">GD</div>
                                <div>
                                    <div class="review__name">George D.</div>
                                    <div class="review__location">Bluemont, VA</div>
                                </div>
                            </div>
                            <span class="review__source-tag">
                                <svg viewBox="0 0 24 24" fill="none"><path d="M21.111 18.548c-.177.59-.913 1.028-1.536 1.028h-2.592c-.622 0-1.173-.528-1.173-1.12 0-.048.004-.097.013-.145l.47-2.5c.097-.558.646-.98 1.217-.98h2.592c.626 0 1.173.413 1.173 1.001 0 .049-.004.098-.013.147l-.151.568zm-3.654-5.436c-.576 0-1.072-.422-1.17-.98l-.468-2.5c-.11-.596.287-1.145.872-1.145h2.592c.622 0 1.12.467 1.17.98l.47 2.5c.11.596-.287 1.145-.872 1.145h-2.594zm-5.457-9c.02-.594.49-1.062 1.083-1.062h.008c.593.008 1.063.487 1.055 1.08l-.139 7.445c-.006.371-.239.689-.571.838l-3.467 1.45c-.537.226-1.13-.04-1.34-.585l-.025-.073c-.196-.51.03-1.09.527-1.35l2.686-1.41.183-6.333zM8.15 13.564l-3.48 1.418c-.55.223-1.144-.037-1.35-.586l-.024-.075c-.193-.514.042-1.097.543-1.351l3.47-1.404c.55-.223 1.143.037 1.35.586l.024.075c.193.514-.042 1.097-.543 1.35l.01-.013zm-.636 5.005l-2.586-.019c-.622-.004-1.16-.451-1.16-1.04 0-.05.003-.1.012-.149l.487-2.495c.102-.556.654-.97 1.228-.966l2.586.019c.622.004 1.16.451 1.16 1.04 0 .05-.003.1-.012.149l-.487 2.495c-.102.556-.654.97-1.228.966z" fill="#D32323"/></svg>
                                Yelp
                            </span>
                        </div>
                    </article>

                    <!-- Review 5 - Nancy Cropper (Google) -->
                    <article class="review reveal reveal-d2">
                        <div class="review__stars" aria-label="5 out of 5 stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <blockquote class="review__quote">&ldquo;Chris was informative, knowledgeable, and well spoken. I appreciate his time and advice.&rdquo;</blockquote>
                        <div class="review__footer">
                            <div class="review__author">
                                <div class="review__avatar">NC</div>
                                <div>
                                    <div class="review__name">Nancy Cropper</div>
                                    <div class="review__location">Google Review</div>
                                </div>
                            </div>
                            <span class="review__source-tag">
                                <svg viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google
                            </span>
                        </div>
                    </article>

                    <!-- Review 6 - Kate K. (Yelp) -->
                    <article class="review reveal reveal-d3">
                        <div class="review__stars" aria-label="5 out of 5 stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <blockquote class="review__quote">&ldquo;Chris came out to remove a few trees and clean up from a storm that damaged a large branch leaning against our house. His team was on point. Very professional, fast, and left no sign of debris.&rdquo;</blockquote>
                        <div class="review__footer">
                            <div class="review__author">
                                <div class="review__avatar">KK</div>
                                <div>
                                    <div class="review__name">Kate K.</div>
                                    <div class="review__location">Round Hill, VA</div>
                                </div>
                            </div>
                            <span class="review__source-tag">
                                <svg viewBox="0 0 24 24" fill="none"><path d="M21.111 18.548c-.177.59-.913 1.028-1.536 1.028h-2.592c-.622 0-1.173-.528-1.173-1.12 0-.048.004-.097.013-.145l.47-2.5c.097-.558.646-.98 1.217-.98h2.592c.626 0 1.173.413 1.173 1.001 0 .049-.004.098-.013.147l-.151.568zm-3.654-5.436c-.576 0-1.072-.422-1.17-.98l-.468-2.5c-.11-.596.287-1.145.872-1.145h2.592c.622 0 1.12.467 1.17.98l.47 2.5c.11.596-.287 1.145-.872 1.145h-2.594zm-5.457-9c.02-.594.49-1.062 1.083-1.062h.008c.593.008 1.063.487 1.055 1.08l-.139 7.445c-.006.371-.239.689-.571.838l-3.467 1.45c-.537.226-1.13-.04-1.34-.585l-.025-.073c-.196-.51.03-1.09.527-1.35l2.686-1.41.183-6.333zM8.15 13.564l-3.48 1.418c-.55.223-1.144-.037-1.35-.586l-.024-.075c-.193-.514.042-1.097.543-1.351l3.47-1.404c.55-.223 1.143.037 1.35.586l.024.075c.193.514-.042 1.097-.543 1.35l.01-.013zm-.636 5.005l-2.586-.019c-.622-.004-1.16-.451-1.16-1.04 0-.05.003-.1.012-.149l.487-2.495c.102-.556.654-.97 1.228-.966l2.586.019c.622.004 1.16.451 1.16 1.04 0 .05-.003.1-.012.149l-.487 2.495c-.102.556-.654.97-1.228.966z" fill="#D32323"/></svg>
                                Yelp
                            </span>
                        </div>
                    </article>

                    <!-- Review 7 - Verified Customer (Google) -->
                    <article class="review reveal reveal-d1">
                        <div class="review__stars" aria-label="5 out of 5 stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <blockquote class="review__quote">&ldquo;I&rsquo;ve dealt with other tree companies and this was, by far the best experience. They were fast, thorough and knowledgeable. They even cut the trees into smaller sections so I can split later. I couldn&rsquo;t believe how efficient they were. 5 stars easily!&rdquo;</blockquote>
                        <div class="review__footer">
                            <div class="review__author">
                                <div class="review__avatar">VC</div>
                                <div>
                                    <div class="review__name">Verified Customer</div>
                                    <div class="review__location">Google Review</div>
                                </div>
                            </div>
                            <span class="review__source-tag">
                                <svg viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google
                            </span>
                        </div>
                    </article>

                    <!-- Review 8 - Leonard S. (Yelp) -->
                    <article class="review reveal reveal-d2">
                        <div class="review__stars" aria-label="5 out of 5 stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <blockquote class="review__quote">&ldquo;Best tree service I&rsquo;ve found. Great communication, got the job done under budget and early. Hyper professional, friendly, fairly priced and just solid good people.&rdquo;</blockquote>
                        <div class="review__footer">
                            <div class="review__author">
                                <div class="review__avatar">LS</div>
                                <div>
                                    <div class="review__name">Leonard S.</div>
                                    <div class="review__location">Bluemont, VA</div>
                                </div>
                            </div>
                            <span class="review__source-tag">
                                <svg viewBox="0 0 24 24" fill="none"><path d="M21.111 18.548c-.177.59-.913 1.028-1.536 1.028h-2.592c-.622 0-1.173-.528-1.173-1.12 0-.048.004-.097.013-.145l.47-2.5c.097-.558.646-.98 1.217-.98h2.592c.626 0 1.173.413 1.173 1.001 0 .049-.004.098-.013.147l-.151.568zm-3.654-5.436c-.576 0-1.072-.422-1.17-.98l-.468-2.5c-.11-.596.287-1.145.872-1.145h2.592c.622 0 1.12.467 1.17.98l.47 2.5c.11.596-.287 1.145-.872 1.145h-2.594zm-5.457-9c.02-.594.49-1.062 1.083-1.062h.008c.593.008 1.063.487 1.055 1.08l-.139 7.445c-.006.371-.239.689-.571.838l-3.467 1.45c-.537.226-1.13-.04-1.34-.585l-.025-.073c-.196-.51.03-1.09.527-1.35l2.686-1.41.183-6.333zM8.15 13.564l-3.48 1.418c-.55.223-1.144-.037-1.35-.586l-.024-.075c-.193-.514.042-1.097.543-1.351l3.47-1.404c.55-.223 1.143.037 1.35.586l.024.075c.193.514-.042 1.097-.543 1.35l.01-.013zm-.636 5.005l-2.586-.019c-.622-.004-1.16-.451-1.16-1.04 0-.05.003-.1.012-.149l.487-2.495c.102-.556.654-.97 1.228-.966l2.586.019c.622.004 1.16.451 1.16 1.04 0 .05-.003.1-.012.149l-.487 2.495c-.102.556-.654.97-1.228.966z" fill="#D32323"/></svg>
                                Yelp
                            </span>
                        </div>
                    </article>

                    <!-- Review 9 - Verified Customer (Google) -->
                    <article class="review reveal reveal-d3">
                        <div class="review__stars" aria-label="5 out of 5 stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <blockquote class="review__quote">&ldquo;Chris and his team recently completed a 5 tree job for me, and I can not recommend them highly enough. They did a fantastic job for a reasonable price. They were prompt, professional and knowledgeable about trees.&rdquo;</blockquote>
                        <div class="review__footer">
                            <div class="review__author">
                                <div class="review__avatar">VC</div>
                                <div>
                                    <div class="review__name">Verified Customer</div>
                                    <div class="review__location">Google Review</div>
                                </div>
                            </div>
                            <span class="review__source-tag">
                                <svg viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google
                            </span>
                        </div>
                    </article>

                    <!-- Review 10 - C V. (Yelp) -->
                    <article class="review reveal reveal-d1">
                        <div class="review__stars" aria-label="5 out of 5 stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <blockquote class="review__quote">&ldquo;Chris and his team were awesome! They had the best quote in town &mdash; fair and honest pricing. They were also super friendly and explained everything along the way.&rdquo;</blockquote>
                        <div class="review__footer">
                            <div class="review__author">
                                <div class="review__avatar">CV</div>
                                <div>
                                    <div class="review__name">C V.</div>
                                    <div class="review__location">Google Review</div>
                                </div>
                            </div>
                            <span class="review__source-tag">
                                <svg viewBox="0 0 24 24" fill="none"><path d="M21.111 18.548c-.177.59-.913 1.028-1.536 1.028h-2.592c-.622 0-1.173-.528-1.173-1.12 0-.048.004-.097.013-.145l.47-2.5c.097-.558.646-.98 1.217-.98h2.592c.626 0 1.173.413 1.173 1.001 0 .049-.004.098-.013.147l-.151.568zm-3.654-5.436c-.576 0-1.072-.422-1.17-.98l-.468-2.5c-.11-.596.287-1.145.872-1.145h2.592c.622 0 1.12.467 1.17.98l.47 2.5c.11.596-.287 1.145-.872 1.145h-2.594zm-5.457-9c.02-.594.49-1.062 1.083-1.062h.008c.593.008 1.063.487 1.055 1.08l-.139 7.445c-.006.371-.239.689-.571.838l-3.467 1.45c-.537.226-1.13-.04-1.34-.585l-.025-.073c-.196-.51.03-1.09.527-1.35l2.686-1.41.183-6.333zM8.15 13.564l-3.48 1.418c-.55.223-1.144-.037-1.35-.586l-.024-.075c-.193-.514.042-1.097.543-1.351l3.47-1.404c.55-.223 1.143.037 1.35.586l.024.075c.193.514-.042 1.097-.543 1.35l.01-.013zm-.636 5.005l-2.586-.019c-.622-.004-1.16-.451-1.16-1.04 0-.05.003-.1.012-.149l.487-2.495c.102-.556.654-.97 1.228-.966l2.586.019c.622.004 1.16.451 1.16 1.04 0 .05-.003.1-.012.149l-.487 2.495c-.102.556-.654.97-1.228.966z" fill="#D32323"/></svg>
                                Yelp
                            </span>
                        </div>
                    </article>

                    <!-- Review 11 - Aaron O. (Yelp) -->
                    <article class="review reveal reveal-d2">
                        <div class="review__stars" aria-label="5 out of 5 stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <blockquote class="review__quote">&ldquo;I&rsquo;ve hired this company several times. Couldn&rsquo;t recommend Chris more. He is knowledgeable, reasonably priced and very pleasant to deal with.&rdquo;</blockquote>
                        <div class="review__footer">
                            <div class="review__author">
                                <div class="review__avatar">AO</div>
                                <div>
                                    <div class="review__name">Aaron O.</div>
                                    <div class="review__location">Hillsboro, VA</div>
                                </div>
                            </div>
                            <span class="review__source-tag">
                                <svg viewBox="0 0 24 24" fill="none"><path d="M21.111 18.548c-.177.59-.913 1.028-1.536 1.028h-2.592c-.622 0-1.173-.528-1.173-1.12 0-.048.004-.097.013-.145l.47-2.5c.097-.558.646-.98 1.217-.98h2.592c.626 0 1.173.413 1.173 1.001 0 .049-.004.098-.013.147l-.151.568zm-3.654-5.436c-.576 0-1.072-.422-1.17-.98l-.468-2.5c-.11-.596.287-1.145.872-1.145h2.592c.622 0 1.12.467 1.17.98l.47 2.5c.11.596-.287 1.145-.872 1.145h-2.594zm-5.457-9c.02-.594.49-1.062 1.083-1.062h.008c.593.008 1.063.487 1.055 1.08l-.139 7.445c-.006.371-.239.689-.571.838l-3.467 1.45c-.537.226-1.13-.04-1.34-.585l-.025-.073c-.196-.51.03-1.09.527-1.35l2.686-1.41.183-6.333zM8.15 13.564l-3.48 1.418c-.55.223-1.144-.037-1.35-.586l-.024-.075c-.193-.514.042-1.097.543-1.351l3.47-1.404c.55-.223 1.143.037 1.35.586l.024.075c.193.514-.042 1.097-.543 1.35l.01-.013zm-.636 5.005l-2.586-.019c-.622-.004-1.16-.451-1.16-1.04 0-.05.003-.1.012-.149l.487-2.495c.102-.556.654-.97 1.228-.966l2.586.019c.622.004 1.16.451 1.16 1.04 0 .05-.003.1-.012.149l-.487 2.495c-.102.556-.654.97-1.228.966z" fill="#D32323"/></svg>
                                Yelp
                            </span>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- LEAVE A REVIEW CTA -->
        <section class="review-cta" aria-labelledby="review-cta-title">
            <div class="container">
                <div class="review-cta__icon reveal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                </div>
                <h2 id="review-cta-title" class="review-cta__title reveal">Had a Great Experience?</h2>
                <p class="review-cta__text reveal">We&rsquo;d love to hear about it. Your feedback helps other homeowners find reliable tree care and helps us keep improving our service.</p>
                <a href="https://share.google/PUUn1vuSEEP7BMsIl" class="btn btn--primary reveal" target="_blank" rel="noopener noreferrer">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    Leave Us a Google Review
                </a>
            </div>
        </section>

        <!-- BOTTOM CTA -->
        <?php get_template_part('template-parts/cta-banner'); ?>



<?php get_footer();
