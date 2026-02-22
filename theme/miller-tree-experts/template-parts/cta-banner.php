<?php
/**
 * Template Part — CTA Banner
 *
 * Reusable call-to-action block used across most pages.
 * Pass custom copy via set_query_var() before get_template_part(),
 * or it falls back to defaults.
 *
 * Variables (optional):
 *   $args['cta_title']    — headline (default: "Ready for a Free Estimate?")
 *   $args['cta_text']     — body copy
 *   $args['cta_id']       — section id attribute (default: "contact")
 *
 * @package MillerTree
 */

defined('ABSPATH') || exit;

$cta_title = $args['cta_title'] ?? 'Ready for a Free Estimate?';
$cta_text  = $args['cta_text']  ?? 'Whether it&rsquo;s a single tree or a full lot clearing, we&rsquo;ll come out, assess the job, and give you an honest, competitive quote. No pressure, no obligation.';
$cta_id    = $args['cta_id']    ?? 'contact';
?>

<!-- CTA -->
<section class="cta" id="<?php echo esc_attr($cta_id); ?>" aria-labelledby="cta-title">
    <div class="container">
        <div class="reveal">
            <div class="section__eyebrow" style="color: var(--green-light);">Get In Touch</div>
            <h2 id="cta-title" class="cta__title"><?php echo $cta_title; ?></h2>
            <p class="cta__text"><?php echo $cta_text; ?></p>
            <a href="tel:5403131306" class="cta__phone">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                (540) 313-1306
            </a>
            <div class="cta__hours">Monday&ndash;Friday &middot; 9:00 AM &ndash; 5:00 PM</div>
        </div>

        <div class="cta__form reveal">
            <div class="cta__form-title">Request Your Free Estimate</div>
            <form action="#" method="POST" aria-label="Free estimate request form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="cta-name">Full Name</label>
                        <input type="text" id="cta-name" name="name" placeholder="John Smith" required>
                    </div>
                    <div class="form-group">
                        <label for="cta-phone">Phone Number</label>
                        <input type="tel" id="cta-phone" name="phone" placeholder="(540) 555-0123" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cta-email">Email Address</label>
                    <input type="email" id="cta-email" name="email" placeholder="john@example.com">
                </div>
                <div class="form-group">
                    <label for="cta-service">Service Needed</label>
                    <select id="cta-service" name="service" required>
                        <option value="" disabled selected>Select a service...</option>
                        <option value="tree-removal">Tree Removal</option>
                        <option value="tree-trimming">Tree Trimming &amp; Pruning</option>
                        <option value="stump-grinding">Stump Grinding</option>
                        <option value="storm-damage">Storm Damage &amp; Emergency</option>
                        <option value="lot-clearing">Lot Clearing</option>
                        <option value="clean-up">Clean-Up</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cta-message">Tell Us About Your Project</label>
                    <textarea id="cta-message" name="message" placeholder="Describe the trees, the job, and any details..."></textarea>
                </div>
                <button type="submit" class="btn btn--primary">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    Send Request
                </button>
            </form>
        </div>
    </div>
</section>
