# Miller Tree Experts — Launch Plan

## Overview

Convert the HTML/CSS prototype into a custom WordPress theme and deploy to Hostinger. The theme is code-only (no custom fields or page builder) — all content lives in PHP templates.

---

## Phase 5: WordPress Theme Conversion (Claude builds this)

### Step 1 — Theme Scaffolding

Claude creates the theme files in `/theme/miller-tree-experts/`:

- [x] `style.css` with WP theme header + imported CSS
- [x] `functions.php` — enqueue styles/scripts, register nav menus, add theme support
- [x] `screenshot.png` — theme preview image for WP admin
- [x] `index.php` — required fallback template

### Step 2 — Shared Partials

Extract repeated sections into reusable template parts:

- [x] `header.php` — doctype, head, nav bar, mobile menu
- [x] `footer.php` — footer, `wp_footer()`, closing tags
- [x] `template-parts/cta-banner.php` — call-to-action block reused across pages
- [x] `template-parts/trust-bar.php` — reviews/trust signals strip
- [x] `js/main.js` — shared JS (scroll reveal, sticky nav, mobile menu, FAQ accordion, count-up, smooth scroll)

### Step 3 — Page Templates

Convert each prototype HTML file into a WP template:

| Done | Prototype | WP Template | Type |
|------|-----------|-------------|------|
| [x] | `index-v2.html` | `front-page.php` | Static front page |
| [x] | `about.html` | `page-about.php` | Page template |
| [x] | `contact.html` | `page-contact.php` | Page template |
| [x] | `services.html` | `page-services.php` | Page template |
| [x] | `reviews.html` | `page-reviews.php` | Page template |
| [x] | `tree-removal.html` | `page-tree-removal.php` | Page template |
| [x] | `tree-trimming.html` | `page-tree-trimming.php` | Page template |
| [x] | `stump-grinding.html` | `page-stump-grinding.php` | Page template |
| [x] | `storm-damage.html` | `page-storm-damage.php` | Page template |
| [x] | `lot-clearing.html` | `page-lot-clearing.php` | Page template |
| [x] | `clean-ups.html` | `page-clean-ups.php` | Page template |
| [x] | `blog.html` | `home.php` | Blog posts listing |
| [x] | `blog-post.html` | `single.php` | Single blog post |

### Step 4 — Assets

- [x] Copy all CSS into `/theme/miller-tree-experts/css/` (keep component/page structure)
- [x] Copy all images into `/theme/miller-tree-experts/images/`
- [x] Replace hardcoded paths with `<?php echo get_template_directory_uri(); ?>/images/...`
- [x] Add JS for mobile menu toggle, smooth scroll, FAQ accordion
- [x] Enqueue all assets through `functions.php`

### Step 5 — WordPress Integration

- [x] Replace hardcoded nav with `wp_nav_menu()`
- [x] Replace all internal links with `get_permalink()` / `home_url()`
- [x] Add `wp_head()` in `<head>` and `wp_footer()` before `</body>`
- [x] Add `body_class()` to `<body>` tag
- [x] Blog listing uses the WP Loop (`have_posts()` / `the_post()`)
- [x] Single post template uses `the_title()`, `the_content()`, `the_post_thumbnail()`

---

## Phase 6: Hostinger Setup (You do this)

### Step 6 — Install WordPress on Hostinger

1. [ ] Log into Hostinger hPanel
2. [ ] Go to **Websites > Manage > Auto Installer** (or **WordPress > Install**)
3. [ ] Run the one-click WordPress install
4. [ ] Set admin username, password, and email — save these somewhere safe
5. [ ] Go to **SSL > Install SSL** and enable the free SSL certificate
6. [ ] Verify the site loads at `https://yourdomain.com/wp-admin`

### Step 7 — SSH & Git Setup on Hostinger

1. [ ] In hPanel, go to **Advanced > SSH Access**
2. [ ] Enable SSH and note your credentials (host, port, username)
3. [ ] Add your local machine's SSH public key to Hostinger (or use password auth)
4. [ ] Test the connection from your terminal:
   ```bash
   ssh -p PORT username@your-server-ip
   ```
5. [ ] Once connected via SSH, navigate to the theme directory:
   ```bash
   cd ~/public_html/wp-content/themes/
   ```
6. [ ] Clone the repo (theme only):
   ```bash
   git clone https://github.com/YOUR_USERNAME/millertreeexperts.git miller-tree-experts
   ```
   Or if the theme lives in a subdirectory of the repo, clone the full repo and symlink:
   ```bash
   cd ~
   git clone https://github.com/YOUR_USERNAME/millertreeexperts.git
   ln -s ~/millertreeexperts/theme/miller-tree-experts ~/public_html/wp-content/themes/miller-tree-experts
   ```
7. [ ] In WP admin, go to **Appearance > Themes** and **Activate** "Miller Tree Experts"
8. [ ] Verify the homepage loads with the correct design

### Deploying Updates (ongoing)

After Claude pushes changes to GitHub, pull them on the server:

```bash
ssh -p PORT username@your-server-ip
cd ~/public_html/wp-content/themes/miller-tree-experts  # or wherever you cloned
git pull origin main
```

Or set up a one-liner you can run from your local machine:

```bash
ssh -p PORT username@your-server-ip "cd ~/public_html/wp-content/themes/miller-tree-experts && git pull origin main"
```

### Step 8 — Create Pages in WordPress Admin

Create these pages in **Pages > Add New**. The title must match exactly (the theme uses the page slug for template assignment):

1. [ ] **Home** — set slug to `home`
2. [ ] **About** — slug: `about`
3. [ ] **Contact** — slug: `contact`
4. [ ] **Services** — slug: `services`
5. [ ] **Reviews** — slug: `reviews`
6. [ ] **Tree Removal** — slug: `tree-removal`
7. [ ] **Tree Trimming** — slug: `tree-trimming`
8. [ ] **Stump Grinding** — slug: `stump-grinding`
9. [ ] **Storm Damage** — slug: `storm-damage`
10. [ ] **Lot Clearing** — slug: `lot-clearing`
11. [ ] **Clean-ups** — slug: `clean-ups`

Leave the page content blank — the templates handle everything.

### Step 9 — Configure WordPress Settings

1. [ ] **Settings > Reading** — set "Your homepage displays" to **A static page**
   - Homepage: **Home**
   - Posts page: (create a page called **Blog** with slug `blog`)
2. [ ] **Settings > Permalinks** — select **Post name** (`/%postname%/`)
3. [ ] **Appearance > Menus** — create a menu called "Primary" and assign it to the **Primary Menu** location
   - Add your pages in the desired order
4. [ ] **Settings > General** — set Site Title to "Miller Tree Experts" and Tagline to "Professional Tree Care in Virginia, Maryland & West Virginia"

### Step 10 — Install Plugins (keep it minimal)

1. [ ] **Rank Math SEO** (or Yoast SEO) — handles meta tags, sitemaps, schema
2. [ ] **Contact Form 7** (or WPForms Lite) — contact form
3. [ ] **LiteSpeed Cache** — Hostinger runs LiteSpeed, this pairs perfectly
4. [ ] That's it. No page builders, no bloat.

### Step 11 — Contact Form Setup

1. [ ] Install Contact Form 7 (or WPForms Lite)
2. [ ] Create a form with fields: Name, Phone, Email, Service Needed (dropdown), Message
3. [ ] Set the recipient email to Chris's email
4. [ ] Copy the form shortcode
5. [ ] Give me the shortcode and I'll wire it into `page-contact.php`

### Step 12 — SEO Configuration

1. [ ] Open Rank Math (or Yoast) setup wizard and complete it
2. [ ] Go to **Rank Math > Sitemap Settings** — verify sitemap is enabled
3. [ ] **Google Search Console** — add the property and verify ownership (Rank Math can help)
4. [ ] Submit `https://yourdomain.com/sitemap_index.xml` to Search Console
5. [ ] **Google Business Profile** — update the website URL to the new domain

### Step 13 — Domain & DNS (if not already pointed to Hostinger)

1. [ ] Get Hostinger's nameservers from **hPanel > DNS / Nameservers**
   - Usually: `ns1.dns-parking.com` and `ns2.dns-parking.com` (Hostinger will show the exact ones)
2. [ ] Log into your domain registrar and update nameservers
3. [ ] Wait for propagation (usually 15 min–48 hours)
4. [ ] Verify SSL is working on the live domain

---

## Pre-Launch Checklist

### Design & Content
- [ ] All 13 pages render correctly
- [ ] Mobile navigation works
- [ ] All images load properly
- [ ] Contact form sends emails
- [ ] Blog page shows posts (create 1 test post to verify)
- [ ] Internal links all work (no 404s)

### Performance
- [ ] Run Google PageSpeed Insights — target 90+ on mobile
- [ ] Images are optimized (compressed, correct dimensions)
- [ ] Caching plugin is active and configured
- [ ] No render-blocking resources flagged

### SEO
- [ ] Each page has a unique title and meta description (via Rank Math/Yoast)
- [ ] Schema.org markup verified with [Google Rich Results Test](https://search.google.com/test/rich-results)
- [ ] Sitemap submitted to Google Search Console
- [ ] `robots.txt` is not blocking crawlers
- [ ] Google Business Profile updated with new URL
- [ ] Open Graph tags working (test with [Facebook Debugger](https://developers.facebook.com/tools/debug/))

### Security
- [ ] SSL certificate active (green padlock)
- [ ] WP admin uses a strong password
- [ ] Remove default "Hello World" post and "Sample Page"
- [ ] Delete unused default themes (Twenty Twenty-*)

---

## Order of Operations (TL;DR)

1. **Claude builds the theme** (Steps 1–5)
2. **You install WordPress on Hostinger** (Step 6)
3. **You set up SSH + Git on Hostinger and clone the repo** (Step 7)
4. **You create the pages** (Step 8)
5. **You configure WP settings** (Step 9)
6. **You install 3 plugins** (Step 10)
7. **You set up the contact form, give me the shortcode** (Step 11)
8. **You configure SEO plugin + Search Console** (Step 12)
9. **You point the domain** (Step 13)
10. **We run through the pre-launch checklist together**

> **Why Git?** No more zipping and re-uploading. I push code to GitHub, you run `git pull` on the server (one command). Makes iterating on fixes and updates dead simple.
