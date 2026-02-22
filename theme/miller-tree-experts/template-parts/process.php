<?php
/**
 * Template Part — Our Process
 *
 * 4-step process section reused across service pages.
 *
 * @package MillerTree
 */

defined('ABSPATH') || exit;

$uri = get_template_directory_uri();
?>

<!-- OUR PROCESS -->
<section class="section section--lg section--green-wash" id="process" aria-labelledby="process-title">
    <div class="container">
        <div class="section__header reveal">
            <div class="section__eyebrow">How It Works</div>
            <h2 id="process-title" class="section__title">Our Process</h2>
            <p class="section__desc">From your first call to the final cleanup, we make professional tree care simple and stress-free.</p>
        </div>

        <div class="process__grid">
            <div class="process__step reveal reveal-d1">
                <img src="<?php echo esc_url($uri); ?>/images/generated/property-trees.jpg" alt="Aerial view of Shenandoah Valley property surrounded by mature trees" class="process__step-image" loading="lazy">
                <div class="process__step-body">
                    <div class="process__step-number">1</div>
                    <h3 class="process__step-title">Free Estimate</h3>
                    <p class="process__step-desc">We come to your property, assess the job in person, and provide an honest evaluation of what needs to be done.</p>
                </div>
                <div class="process__connector"></div>
            </div>
            <div class="process__step reveal reveal-d2">
                <img src="<?php echo esc_url($uri); ?>/images/yelp-tree-service-4.jpg" alt="Miller Tree Experts crew members ready to work with professional equipment" class="process__step-image" loading="lazy">
                <div class="process__step-body">
                    <div class="process__step-number">2</div>
                    <h3 class="process__step-title">Clear Quote</h3>
                    <p class="process__step-desc">You receive transparent pricing with no hidden fees or surprise charges. The price we quote is the price you pay.</p>
                </div>
                <div class="process__connector"></div>
            </div>
            <div class="process__step reveal reveal-d3">
                <img src="<?php echo esc_url($uri); ?>/images/generated/tree-removal-action.jpg" alt="Professional arborist performing expert tree work with climbing gear" class="process__step-image" loading="lazy">
                <div class="process__step-body">
                    <div class="process__step-number">3</div>
                    <h3 class="process__step-title">Expert Execution</h3>
                    <p class="process__step-desc">Our trained, experienced crew handles the work safely and efficiently using professional-grade equipment.</p>
                </div>
                <div class="process__connector"></div>
            </div>
            <div class="process__step reveal reveal-d4">
                <img src="<?php echo esc_url($uri); ?>/images/yelp-tree-service-7.jpg" alt="Completed tree removal job with logs hauled away on trailer" class="process__step-image" loading="lazy">
                <div class="process__step-body">
                    <div class="process__step-number">4</div>
                    <h3 class="process__step-title">Clean Finish</h3>
                    <p class="process__step-desc">We leave your property spotless. All debris is removed, and you&rsquo;d never know we were there &mdash; except for the results.</p>
                </div>
            </div>
        </div>
    </div>
</section>
