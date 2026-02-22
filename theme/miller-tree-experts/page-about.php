<?php get_header(); $uri = get_template_directory_uri(); ?>



        <!-- PAGE HERO -->
        <section class="page-hero" aria-labelledby="page-hero-title">
            <div class="page-hero__image" role="presentation">
                <img src="<?php echo esc_url($uri); ?>/images/generated/about-bg.jpg" alt="" aria-hidden="true">
            </div>
            <div class="page-hero__content">
                <div class="container">
                    <nav class="page-hero__breadcrumb" aria-label="Breadcrumb">
                        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                        <span>About Us</span>
                    </nav>
                    <h1 id="page-hero-title" class="page-hero__title">About Miller Tree Experts</h1>
                    <p class="page-hero__subtitle">Family-owned. Community-driven. Committed to the Shenandoah Valley since day one.</p>
                </div>
            </div>
        </section>

        <!-- OUR STORY -->
        <section class="section section--lg" aria-labelledby="story-title">
            <div class="container">
                <div class="story__grid">
                    <div class="story__image reveal">
                        <img src="<?php echo esc_url($uri); ?>/images/generated/about-bg.jpg" alt="Miller Tree Experts crew working on a tree care project in the Shenandoah Valley" loading="lazy">
                        <div class="story__image-badge">
                            <div class="story__image-badge-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                            </div>
                            <div>
                                <div class="story__image-badge-text">Locally Owned &amp; Operated</div>
                                <div class="story__image-badge-sub">Berryville, Virginia</div>
                            </div>
                        </div>
                    </div>

                    <div class="reveal">
                        <div class="section__eyebrow">Our Story</div>
                        <h2 id="story-title" class="section__title">Built on Hard Work &amp; Honest Service</h2>
                        <div class="story__text">
                            <p>Chris Miller grew up in the Shenandoah Valley, surrounded by the rolling hills, dense hardwoods, and tight-knit communities that make this part of Virginia unlike anywhere else. He spent his early years working outdoors, learning the landscape, and developing a deep respect for both the land and the people who call it home.</p>
                            <p>After years of working alongside experienced arborists and learning the tree care trade from the ground up, Chris saw an opportunity to do things his own way. He founded Miller Tree Experts LLC with a straightforward idea: provide the kind of tree service he would want for his own property. That meant showing up when promised, doing the job right, pricing it fairly, and leaving every yard cleaner than he found it.</p>
                            <p>What started as a one-man operation with a truck and a chainsaw has grown into a trusted tree care company serving homeowners and businesses across Virginia, Maryland, and West Virginia. But some things have not changed. Chris still meets with customers personally, still oversees every project, and still believes that a handshake and your word are worth more than any contract.</p>
                            <p>Today, Miller Tree Experts is proud to hold a perfect 5.0 Google rating backed by over 115 five-star reviews. That track record is not the result of clever marketing. It is the result of treating every customer like a neighbor, because in most cases, they are.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- VALUES -->
        <section class="section section--lg section--gray" aria-labelledby="values-title">
            <div class="container">
                <div class="section__header reveal">
                    <div class="section__eyebrow">Our Values</div>
                    <h2 id="values-title" class="section__title">What We Stand For</h2>
                    <p class="section__desc">Every decision we make comes back to these core principles. They are not just words on a page. They guide how we treat your property, your time, and your trust.</p>
                </div>

                <div class="values__grid">
                    <article class="value-card reveal reveal-d1">
                        <div class="value-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <h3 class="value-card__title">Safety First</h3>
                        <p class="value-card__desc">Tree work is inherently dangerous, and we never cut corners on safety. Our crew follows strict protocols, wears proper protective equipment, and assesses every job site before starting. Your family, your property, and our team all go home safe at the end of the day.</p>
                    </article>

                    <article class="value-card reveal reveal-d2">
                        <div class="value-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </div>
                        <h3 class="value-card__title">Quality Workmanship</h3>
                        <p class="value-card__desc">We do the job right the first time, every time. From clean cuts that promote healthy regrowth to thorough cleanup that leaves your property spotless, our attention to detail is what sets us apart. Our 5.0 rating is not a coincidence.</p>
                    </article>

                    <article class="value-card reveal reveal-d3">
                        <div class="value-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                        </div>
                        <h3 class="value-card__title">Honest Pricing</h3>
                        <p class="value-card__desc">No hidden fees, no surprise charges, no pressure tactics. We give you a straightforward estimate before we start, explain exactly what needs to be done, and stick to the quoted price. If something changes, we talk to you first.</p>
                    </article>

                    <article class="value-card reveal reveal-d4">
                        <div class="value-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4-4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                        </div>
                        <h3 class="value-card__title">Customer Respect</h3>
                        <p class="value-card__desc">We treat every property like it is our own. That means returning phone calls promptly, showing up on schedule, keeping you informed throughout the project, and making sure you are completely satisfied before we consider the job done.</p>
                    </article>

                    <article class="value-card reveal reveal-d5">
                        <div class="value-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c-4.97 0-9-2.686-9-6v-4"/><path d="M12 22c4.97 0 9-2.686 9-6v-4"/><path d="M12 14c-4.97 0-9-2.686-9-6S7.03 2 12 2s9 2.686 9 6-4.03 6-9 6z"/><path d="M12 14v8"/></svg>
                        </div>
                        <h3 class="value-card__title">Environmental Care</h3>
                        <p class="value-card__desc">We love trees. When removal is not necessary, we recommend pruning or treatment instead. We recycle wood waste, minimize our footprint on your property, and always look for the approach that keeps your landscape healthy and thriving for years to come.</p>
                    </article>

                    <article class="value-card reveal reveal-d6">
                        <div class="value-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <h3 class="value-card__title">Community Roots</h3>
                        <p class="value-card__desc">We live and work in the same communities we serve. Our reputation is everything, and it is built one job at a time. When you hire Miller Tree Experts, you are supporting a local family business that is invested in this valley for the long haul.</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- MEET THE TEAM -->
        <section class="section section--lg" aria-labelledby="team-title">
            <div class="container">
                <div class="team__grid">
                    <div class="reveal">
                        <div class="section__eyebrow">Meet the Team</div>
                        <h2 id="team-title" class="section__title">Experienced. Certified. Ready to Work.</h2>
                        <div class="team__content">
                            <p>Behind every project is a crew that takes pride in what they do. Our team members are trained in proper cutting techniques, rigging systems, and safe work practices. They understand that working on your property is a privilege, and they treat it accordingly.</p>
                            <p>From the initial consultation to the final rake of the yard, you will find our team to be courteous, communicative, and committed to getting the job done right. We invest in ongoing training to stay current with the latest arboricultural practices and safety standards, because the trees in the Shenandoah Valley deserve the best care available.</p>
                        </div>
                    </div>

                    <div class="team__members reveal">
                        <div class="team-card reveal reveal-d1">
                            <div class="team-card__avatar">
                                <img src="<?php echo esc_url($uri); ?>/images/fb-profile-1.jpg" alt="Chris Miller, Owner of Miller Tree Experts">
                            </div>
                            <div>
                                <div class="team-card__name">Chris Miller</div>
                                <div class="team-card__role">Owner / Lead Arborist</div>
                                <div class="team-card__desc">Founded Miller Tree Experts with a commitment to honest service and quality workmanship. Personally oversees every project and meets with each customer.</div>
                            </div>
                        </div>
                        <div class="team-card reveal reveal-d2">
                            <div class="team-card__avatar">
                                <img src="<?php echo esc_url($uri); ?>/images/yelp-tree-service-4.jpg" alt="The Miller Tree Experts crew">
                            </div>
                            <div>
                                <div class="team-card__name">The Miller Crew</div>
                                <div class="team-card__role">Skilled Tree Care Professionals</div>
                                <div class="team-card__desc">An experienced team of climbers, operators, and ground crew trained in safe, efficient tree care across residential and commercial properties.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- STATS -->
        <section class="section section--lg section--gray" aria-labelledby="stats-title">
            <div class="container">
                <div class="section__header reveal">
                    <div class="section__eyebrow">By The Numbers</div>
                    <h2 id="stats-title" class="section__title">Our Track Record Speaks</h2>
                    <p class="section__desc">We let our results do the talking. Here are the numbers behind the Shenandoah Valley&rsquo;s most trusted tree service.</p>
                </div>

                <div class="stats-big reveal">
                    <div class="stat-big reveal reveal-d1">
                        <div class="stat-big__number" data-count="5.0" data-decimals="1">0</div>
                        <div class="stat-big__label">Google Rating</div>
                    </div>
                    <div class="stat-big reveal reveal-d2">
                        <div class="stat-big__number" data-count="115" data-suffix="+">0</div>
                        <div class="stat-big__label">5-Star Reviews</div>
                    </div>
                    <div class="stat-big reveal reveal-d3">
                        <div class="stat-big__number" data-count="3">0</div>
                        <div class="stat-big__label">States Served</div>
                    </div>
                    <div class="stat-big reveal reveal-d4">
                        <div class="stat-big__number" data-count="1000" data-suffix="+">0</div>
                        <div class="stat-big__label">Projects Complete</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- EQUIPMENT & SAFETY -->
        <section class="section section--lg" aria-labelledby="equipment-title">
            <div class="container">
                <div class="equipment__grid">
                    <div class="equipment__image reveal">
                        <img src="<?php echo esc_url($uri); ?>/images/generated/property-trees.jpg" alt="Miller Tree Experts professional equipment at a residential job site" loading="lazy">
                    </div>

                    <div class="reveal">
                        <div class="section__eyebrow">Equipment &amp; Safety</div>
                        <h2 id="equipment-title" class="section__title">Professional Grade, Every Job</h2>
                        <p class="section__desc">We invest in the right tools and the right training so every project is completed safely, efficiently, and to the highest standard. Your property and our crew are always protected.</p>

                        <div class="equipment__features">
                            <div class="equipment__feat reveal reveal-d1">
                                <div class="equipment__feat-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                </div>
                                <div>
                                    <div class="equipment__feat-title">Fully Licensed &amp; Insured</div>
                                    <div class="equipment__feat-desc">Comprehensive general liability and workers' compensation coverage on every job. Your property is always protected.</div>
                                </div>
                            </div>
                            <div class="equipment__feat reveal reveal-d2">
                                <div class="equipment__feat-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"/></svg>
                                </div>
                                <div>
                                    <div class="equipment__feat-title">Professional-Grade Equipment</div>
                                    <div class="equipment__feat-desc">Commercial chainsaws, chippers, stump grinders, and rigging systems maintained to manufacturer specifications for safe, efficient work.</div>
                                </div>
                            </div>
                            <div class="equipment__feat reveal reveal-d3">
                                <div class="equipment__feat-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                                </div>
                                <div>
                                    <div class="equipment__feat-title">Rigorous Safety Protocols</div>
                                    <div class="equipment__feat-desc">Every job begins with a thorough site assessment. Our crew follows established safety procedures, wear PPE, and communicate constantly during complex operations.</div>
                                </div>
                            </div>
                            <div class="equipment__feat reveal reveal-d4">
                                <div class="equipment__feat-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 16 12 12 8 16"/><line x1="12" y1="12" x2="12" y2="21"/><path d="M20.39 18.39A5 5 0 0018 9h-1.26A8 8 0 103 16.3"/></svg>
                                </div>
                                <div>
                                    <div class="equipment__feat-title">Clean Job Sites</div>
                                    <div class="equipment__feat-desc">We haul away all debris, rake the work area, and leave your property looking better than when we arrived. Complete cleanup is standard, never an add-on.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <?php get_template_part('template-parts/cta-banner', null, ['cta_title' => 'Ready to Work With Us?', 'cta_text' => 'Now that you know who we are and how we work, let us show you in person. Reach out for a free, no-obligation estimate and experience the Miller Tree Experts difference for yourself.']); ?>



<?php get_footer();
