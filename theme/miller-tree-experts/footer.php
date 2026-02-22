<?php
/**
 * Theme Footer — footer markup, wp_footer(), closing tags.
 *
 * @package MillerTree
 */

defined('ABSPATH') || exit;

$uri = get_template_directory_uri();
?>

    </main>

    <!-- FOOTER -->
    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="footer__brand">
                <img src="<?php echo esc_url($uri); ?>/images/miller-tree-logo.png" alt="<?php bloginfo('name'); ?>" width="140" height="44">
                <p class="footer__brand-text">Professional tree care serving Virginia, Maryland, and West Virginia. Licensed, insured, and committed to quality on every job.</p>
                <div class="footer__social">
                    <a href="https://www.facebook.com/millertreeexpert/" target="_blank" rel="noopener noreferrer" aria-label="Follow us on Facebook">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/millertreeexperts/" target="_blank" rel="noopener noreferrer" aria-label="Follow us on Instagram">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                </div>
            </div>

            <div class="footer__col">
                <h3 class="footer__col-title">Services</h3>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/tree-removal/')); ?>">Tree Removal</a></li>
                    <li><a href="<?php echo esc_url(home_url('/tree-trimming/')); ?>">Tree Trimming &amp; Pruning</a></li>
                    <li><a href="<?php echo esc_url(home_url('/stump-grinding/')); ?>">Stump Grinding</a></li>
                    <li><a href="<?php echo esc_url(home_url('/storm-damage/')); ?>">Storm Damage</a></li>
                    <li><a href="<?php echo esc_url(home_url('/lot-clearing/')); ?>">Lot Clearing</a></li>
                    <li><a href="<?php echo esc_url(home_url('/clean-ups/')); ?>">Clean-Ups</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h3 class="footer__col-title">Service Areas</h3>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/#areas')); ?>">Berryville, VA</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#areas')); ?>">Winchester, VA</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#areas')); ?>">Front Royal, VA</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#areas')); ?>">Leesburg, VA</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#areas')); ?>">Charles Town, WV</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#areas')); ?>">Martinsburg, WV</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#areas')); ?>">Hagerstown, MD</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h3 class="footer__col-title">Contact</h3>
                <div class="footer__contact-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                    <a href="tel:5403131306">(540) 313-1306</a>
                </div>
                <div class="footer__contact-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <span>253 Chilly Hollow Rd<br>Berryville, VA 22611</span>
                </div>
                <div class="footer__contact-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    <span>Mon&ndash;Fri: 9AM &ndash; 5PM<br>Sat&ndash;Sun: Closed</span>
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <div class="container">
                &copy; <?php echo date('Y'); ?> Miller Tree Experts LLC. All rights reserved. &middot; Berryville, Virginia
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
