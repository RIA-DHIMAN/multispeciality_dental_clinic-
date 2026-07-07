<?php
$wordpress_installed = false;
if (file_exists(__DIR__ . '/blogs/wp-config.php')) {
    try {
        $conn = new mysqli('127.0.0.1', 'root', '', 'multispeciality_blog');
        if (!$conn->connect_error) {
            $result = $conn->query("SHOW TABLES LIKE 'wp_posts'");
            if ($result && $result->num_rows > 0) {
                $wordpress_installed = true;
            }
            $conn->close();
        }
    } catch (Exception $e) {}
}

$post_found = false;
$post_title = "Insights for a Healthier, Brighter Smile";
$post_excerpt = "Explore expert dental tips, oral care guidance, treatment information, and the latest updates from our clinic — helping you make informed decisions for your smile and overall dental health.";
$post_content = "";
$post_date = "January 21, 2026";
$post_year_month = "December 2025";
$post_category = "Dental Care";
$post_img = "image_80c603.jpg"; // fallback
$categories_list = [];
$related_posts = [];
$toc_data = array('toc' => '', 'content' => '');

if (!function_exists('generate_toc_and_modify_content')) {
    function generate_toc_and_modify_content($content) {
        preg_match_all('/<h([2-3])[^>]*>(.*?)<\/h\1>/is', $content, $matches, PREG_SET_ORDER);
        if (empty($matches)) {
            return array('toc' => '<p class="text-muted fs-7">No headings found in this article.</p>', 'content' => $content);
        }
        $toc_html = '<ul class="toc-list list-unstyled mb-0">';
        $modified_content = $content;
        $heading_index = 1;
        foreach ($matches as $match) {
            $level = $match[1];
            $text = strip_tags($match[2]);
            $slug = sanitize_title($text) . '-' . $heading_index;
            $indent_class = ($level == '3') ? 'ps-3 text-muted' : 'fw-semibold';
            $toc_html .= '<li class="toc-item py-1 ' . $indent_class . '" style="font-size: 14px;"><a href="#' . $slug . '" class="text-decoration-none toc-link">' . esc_html($text) . '</a></li>';
            $old_heading = $match[0];
            $new_heading = '<h' . $level . ' id="' . $slug . '">' . $match[2] . '</h' . $level . '>';
            $modified_content = preg_replace('/' . preg_quote($old_heading, '/') . '/', $new_heading, $modified_content, 1);
            $heading_index++;
        }
        $toc_html .= '</ul>';
        return array('toc' => $toc_html, 'content' => $modified_content);
    }
}

if ($wordpress_installed) {
    define('WP_USE_THEMES', false);
    require_once(__DIR__ . '/blogs/wp-load.php');

    // Fetch categories for sidebar
    $categories_list = get_categories([
        'orderby' => 'name',
        'order' => 'ASC',
        'hide_empty' => false
    ]);

    $post_slug = isset($_GET['slug']) ? sanitize_title($_GET['slug']) : '';
    $post_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    
    if ($post_slug) {
        $posts_query = get_posts([
            'name' => $post_slug,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 1
        ]);
        if (!empty($posts_query)) {
            $wp_post = $posts_query[0];
            $post_id = $wp_post->ID;
        }
    } else if ($post_id > 0) {
        $wp_post = get_post($post_id);
    }
    
    if (isset($wp_post) && $wp_post && $wp_post->post_status == 'publish') {
            $post_found = true;
            $post_title = $wp_post->post_title;
            $post_excerpt = $wp_post->post_excerpt ? $wp_post->post_excerpt : wp_trim_words($wp_post->post_content, 30);
            $post_content = apply_filters('the_content', $wp_post->post_content);
            $toc_data = generate_toc_and_modify_content($post_content);
            $post_date = get_the_date('F j, Y', $wp_post);
            $post_year_month = get_the_date('F Y', $wp_post);
            
            $post_cats = get_the_category($wp_post->ID);
            $post_category = !empty($post_cats) ? $post_cats[0]->name : 'Dental Care';
            
            $feat_img = get_post_meta($wp_post->ID, 'featured_image_url', true);
            if (empty($feat_img)) {
                $feat_img = get_the_post_thumbnail_url($wp_post->ID, 'full');
            }
            if (!empty($feat_img)) {
                $post_img = $feat_img;
            }

            // Fetch related posts
            $related_args = [
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'post__not_in' => [$wp_post->ID],
                'orderby' => 'rand'
            ];
            if (!empty($post_cats)) {
                $related_args['category__in'] = wp_list_pluck($post_cats, 'term_id');
            }
            $related_posts = get_posts($related_args);
        }

    if (empty($related_posts) && $post_found) {
        $related_posts = get_posts([
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'post__not_in' => [$post_id],
            'orderby' => 'date',
            'order' => 'DESC'
        ]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Avneesh Tyagi's Multispeciality Dental Care Clinic & Implant Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./blog.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="container-fluid">
    <div class="hero-container p-4 p-md-5 pt-0 pt-md-0" style="background-image: linear-gradient(rgba(15, 42, 68, 0.45), rgba(15, 42, 68, 0.75)), url('<?php echo esc_url($post_img); ?>');">
        
        <!-- Top Navigation Component Wrapper Include -->
        <div class="w-100">
            <?php include "./components/navbar.php" ?>
        </div>
        
        <!-- Main Hero Body Content Element Layer -->
        <div class="row hero-content align-items-end mt-5">
            <div class="col-lg-10">

                <div class="hero-meta-subline">
                    <span><?php echo esc_html($post_category); ?></span>
                    <span class="hero-meta-dot"></span>
                    <span class="hero-meta-date" style="opacity: 0.9;"><?php echo esc_html($post_date); ?></span>
                    <span class="hero-meta-dot"></span>
                    <span>By Dental Care</span>
                </div>

                <!-- Text Overlay Content Block -->
                <h1 class="hero-title"><?php echo esc_html($post_title); ?></h1>

                <p class="hero-desc mb-0">
                    <?php echo esc_html($post_excerpt); ?>
                </p>

                <!-- Data Footnotes Group Layer -->
                <?php
                $cats_arr = array();
                if (!empty($categories_list)) {
                    foreach ($categories_list as $cat) {
                        if ($cat->count > 0) {
                            $cats_arr[] = esc_html($cat->name);
                        }
                    }
                }
                if (empty($cats_arr)) {
                    $cats_arr = array('Dental Care', 'Cosmetic Dentistry', 'Implants', 'Oral Hygiene');
                }
                ?>
                <div class="mt-4 pt-2 hero-meta-bottom-row">
                    <p class="clinic-hours mb-0">
                        <strong>Latest Topics:</strong> <?php echo implode(' &nbsp;|&nbsp; ', $cats_arr); ?>
                    </p>
                </div>

            </div>
        </div>

    </div>
</div>
<style>
    /* Premium Back to Blogs Button */
    .back-btn {
        border-color: #0F2A44;
        color: #0F2A44;
        font-weight: 500;
        transition: all 0.3s ease;
        border-radius: var(--radius-pill);
        padding: 8px 20px;
        text-decoration: none;
    }
    .back-btn:hover {
        background-color: #0F2A44;
        color: #ffffff !important;
        transform: translateX(-3px);
    }
    .back-btn svg {
        transition: transform 0.3s ease;
    }
    .back-btn:hover svg {
        transform: translateX(-2px);
    }

    /* Table of Contents Styling */
    .toc-list {
        padding-left: 0;
    }
    .toc-item {
        border-left: 2px solid rgba(15, 42, 68, 0.05);
        padding-left: 12px;
        margin-left: 4px;
        transition: border-color 0.2s ease;
    }
    .toc-item:hover {
        border-color: var(--accent-color, #C8A964);
    }
    .toc-link {
        color: #0F2A44;
        opacity: 0.8;
        font-size: 14.5px;
        transition: opacity 0.2s ease, color 0.2s ease;
    }
    .toc-link:hover {
        color: var(--accent-color, #C8A964) !important;
        opacity: 1;
    }

    /* Styling specifically tuned to integrate seamlessly with your design tokens */
    .hero-container {
        font-family: var(--font-main);
        border-radius: var(--radius-container);
        position: relative;
        overflow: hidden;
        min-height: 560px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        
        /* Premium Background Treatment matching image_80c603.jpg */
        background-image: linear-gradient(
            rgba(15, 42, 68, 0.45), 
            rgba(15, 42, 68, 0.75)
        ), url('image_80c603.jpg');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* Meta Layer Date matching top-left positioning rules */
    .hero-meta-year {
        font-size: 14px;
        font-weight: 500;
        color: var(--text-light);
        opacity: 0.8;
        letter-spacing: 0.5px;
        margin-bottom: 20px;
    }

    /* Custom Category Pillar Capsule Badge */
    .hero-badge-pill {
        display: inline-block;
        padding: 5px 16px;
        background: rgba(255, 255, 255, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.4);
        border-radius: var(--radius-pill);
        font-size: 12px;
        font-weight: 500;
        color: var(--text-light);
        margin-bottom: 16px;
        backdrop-filter: blur(4px);
    }

    /* Meta tag subheader layout row styling */
    .hero-meta-subline {
        font-size: 14px;
        font-weight: 500;
        color: var(--text-light);
        margin-bottom: 18px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .hero-meta-dot {
        width: 5px;
        height: 5px;
        background-color: var(--secondary-color); /* Premium light mint pop dot */
        border-radius: 50%;
        display: inline-block;
    }

    /* Core Hero Text Architecture */
    .hero-title {
        font-size: 48px;
        font-weight: 700;
        line-height: 1.2;
        color: var(--text-light);
        letter-spacing: -1.5px;
        margin-bottom: 20px;
    }

    .hero-desc {
        font-size: 15.5px;
        line-height: 1.65;
        color: var(--text-muted);
        max-width: 680px;
    }

    /* Bottom Micro-Data Text Row Elements */
    .hero-meta-bottom-row {
        border-top: 1px solid rgba(255, 255, 255, 0.15);
        padding-top: 20px;
    }

    .clinic-hours {
        font-size: 14px;
        color: var(--text-light);
    }

    .clinic-hours strong {
        color: var(--secondary-color); /* Highlight with custom brand token */
    }

    .clinic-contact {
        font-size: 13.5px;
        color: var(--text-muted);
    }

    /* Responsive Breakpoint Matrix Adjustments */
    @media (max-width: 991.98px) {
        .hero-title { font-size: 38px; }
        .hero-container { min-height: 500px; }
    }

    @media (max-width: 767.98px) {
        .hero-container { min-height: 460px; }
        .hero-title { font-size: 28px; }
        .hero-desc { font-size: 14px; }
        .hero-meta-bottom-row { margin-top: 15px !important; }
    }
    .blog-body-section {
            font-family: var(--font-main);
            background-color: var(--card-white);
            padding: 80px 0 120px 0;
        }

        /* Narrative Column Typography System */
        .article-rich-text p {
            font-size: 16px;
            line-height: 1.8;
            color: var(--text-desc-gray);
            margin-bottom: 28px;
        }

        .article-rich-text h2 {
            font-size: 28px;
            font-weight: 700;
            color: var(--text-heading-dark);
            margin-top: 45px;
            margin-bottom: 20px;
            letter-spacing: -0.5px;
        }

        /* High-End Editorial Blockquote Using Brand Palette Tokens */
        .article-pullquote {
            border-left: 4px solid var(--accent-gold);
            background-color: var(--bg-section-tint);
            padding: 30px 40px;
            border-radius: 0 var(--radius-card) var(--radius-card) 0;
            margin: 40px 0;
        }

        .article-pullquote p {
            font-size: 18px;
            font-style: italic;
            font-weight: 500;
            line-height: 1.6;
            color: var(--dark-navy);
            margin-bottom: 0;
        }

        /* Clean Bullet Matrix Arrays */
        .article-list {
            margin-bottom: 35px;
            padding-left: 20px;
        }

        .article-list li {
            font-size: 15.5px;
            line-height: 1.75;
            color: var(--text-desc-gray);
            margin-bottom: 12px;
            position: relative;
            list-style: none;
        }

        /* Custom Mint Green list bullet anchors */
        .article-list li::before {
            content: "•";
            color: var(--secondary-color);
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
            font-size: 20px;
            vertical-align: middle;
            line-height: 1;
        }

        /* Premium Sticky Sidebar Framework */
        .blog-sidebar-sticky {
            position: sticky;
            top: 40px;
        }

        .sidebar-widget-card {
            background-color: var(--bg-section-tint);
            border-radius: var(--radius-card);
            padding: 35px;
            margin-bottom: 30px;
            border: 1px solid var(--border-muted);
        }

        .widget-title {
            font-size: 18px;
            font-weight: 700;
            color: var(--text-heading-dark);
            margin-bottom: 24px;
            letter-spacing: -0.3px;
            position: relative;
            padding-bottom: 10px;
        }

        .widget-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background-color: var(--accent-gold);
        }

        /* Shared Quick Link Matrix Components using explicit --dark-navy token */
        .category-link-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            color: var(--text-desc-gray);
            text-decoration: none;
            font-size: 14.5px;
            font-weight: 500;
            border-bottom: 1px solid var(--border-muted);
            transition: color 0.2s ease, padding-left 0.2s ease;
        }

        .category-link-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .category-link-item:hover {
            color: var(--dark-navy);
            padding-left: 6px;
        }

        .category-count-badge {
            background-color: var(--card-white);
            color: var(--text-heading-dark);
            font-size: 12px;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: var(--radius-pill);
            border: 1px solid var(--border-muted);
        }

        /* Action Form Integration Overrides */
        .sidebar-newsletter-form input {
            width: 100%;
            background-color: var(--card-white);
            border: 1px solid var(--border-muted);
            border-radius: var(--radius-pill);
            padding: 12px 20px;
            font-size: 14px;
            color: var(--text-dark);
            outline: none;
            margin-bottom: 16px;
            transition: border-color 0.2s ease;
        }

        .sidebar-newsletter-form input:focus {
            border-color: var(--dark-navy);
        }

        .btn-sidebar-submit {
            width: 100%;
            background-color: var(--dark-navy);
            color: var(--card-white);
            border: none;
            border-radius: var(--radius-pill);
            padding: 12px 24px;
            font-size: 14px;
            font-weight: 600;
            transition: background-color 0.2s ease;
        }

        .btn-sidebar-submit:hover {
            background-color: var(--primary-hover);
            color: var(--card-white);
        }

        /* Responsive Breakpoint Corrections */
        @media (max-width: 991.98px) {
            .blog-body-section { padding: 60px 0 80px 0; }
            .blog-sidebar-sticky { position: static; margin-top: 50px; }
            .article-rich-text h2 { font-size: 24px; }
        }
        .related-blogs-section {
            font-family: var(--font-main);
            background-color: var(--card-white);
            padding: 80px 0 120px 0;
            border-top: 1px solid var(--border-muted);
        }

        /* Section Subsection Header */
        .related-section-title {
            font-size: 32px;
            font-weight: 700;
            color: var(--text-heading-dark);
            letter-spacing: -1px;
            margin-bottom: 45px;
        }

        /* Related Article Flex Card Structure */
        .related-card {
            background: transparent;
            border: none;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        /* Image Display Box Proportions */
        .related-img-wrapper {
            width: 100%;
            aspect-ratio: 16 / 10;
            border-radius: var(--radius-card);
            overflow: hidden;
            margin-bottom: 20px;
        }

        .related-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .related-card:hover .related-img-wrapper img {
            transform: scale(1.03);
        }

        /* Post Metadata String Layer */
        .related-meta {
            font-size: 13px;
            font-weight: 500;
            color: var(--text-heading-dark);
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .related-meta-dot {
            width: 4px;
            height: 4px;
            background-color: var(--dark-navy);
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .related-meta-date {
            color: var(--text-desc-gray);
        }

        /* Heading Structural Typographies */
        .related-title {
            font-size: 19px;
            font-weight: 700;
            line-height: 1.4;
            color: var(--text-heading-dark);
            margin-bottom: 12px;
            letter-spacing: -0.2px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            height: 54px; /* Keeps card titles uniformly aligned across columns */
        }

        .related-title a {
            color: inherit;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .related-title a:hover {
            color: var(--dark-navy);
        }

        /* Excerpt Summary Text Rules */
        .related-desc {
            font-size: 13.5px;
            line-height: 1.65;
            color: var(--text-desc-gray);
            margin-bottom: 20px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Text Link Element using explicitly requested --dark-navy variable */
        .related-read-more {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-desc-gray);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            align-self: flex-start;
            margin-top: auto;
            position: relative;
            padding-bottom: 2px;
            transition: color 0.2s ease;
        }

        .related-read-more::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 1.5px;
            background-color: transparent;
            transition: background-color 0.2s ease;
        }

        .related-card:hover .related-read-more {
            color: var(--dark-navy);
        }

        .related-card:hover .related-read-more::after {
            background-color: var(--dark-navy);
        }

        /* Responsive Breakpoint Overrides */
        @media (max-width: 991.98px) {
            .related-section-title { font-size: 28px; margin-bottom: 35px; }
            .related-title { font-size: 17px; height: auto; }
        }

        @media (max-width: 767.98px) {
            .related-blogs-section { padding: 60px 0 80px 0; }
            .related-title { margin-bottom: 8px; }
            .related-desc { margin-bottom: 16px; -webkit-line-clamp: 3; }
        }
</style><section class="blog-body-section">
    <div class="container">
        
        <!-- Back to Blogs button -->
        <div class="row mb-4">
            <div class="col-12">
                <a href="./blogs.php" class="btn btn-outline-primary d-inline-flex align-items-center gap-2 back-btn">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                    Back to Blogs
                </a>
            </div>
        </div>

        <div class="row g-5">
            
            <!-- Left Side Area: Table of Contents Sidebar Column -->
            <div class="col-12 col-lg-4 order-2 order-lg-1">
                <aside class="blog-sidebar-sticky">
                    <div class="sidebar-widget-card">
                        <h4 class="widget-title">Table of Contents</h4>
                        <?php if ($post_found): ?>
                            <?php echo $toc_data['toc']; ?>
                        <?php else: ?>
                            <ul class="toc-list list-unstyled mb-0">
                                <li class="toc-item py-1 fw-semibold" style="font-size: 14px;"><a href="#the-therapeutic-role-of-modern-rinses-1" class="text-decoration-none toc-link">The Therapeutic Role of Modern Rinses</a></li>
                                <li class="toc-item py-1 fw-semibold" style="font-size: 14px;"><a href="#when-is-mouthwash-explicitly-recommended-2" class="text-decoration-none toc-link">When is Mouthwash Explicitly Recommended?</a></li>
                                <li class="toc-item py-1 fw-semibold" style="font-size: 14px;"><a href="#the-verdict-from-the-chair-3" class="text-decoration-none toc-link">The Verdict from the Chair</a></li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </aside>
            </div>

            <!-- Right Side Area: Main Article Presentation Flow Column -->
            <div class="col-12 col-lg-8 order-1 order-lg-2">
                <article class="article-rich-text">
                    <?php if ($post_found): ?>
                        <div class="entry-content">
                            <?php echo $toc_data['content']; ?>
                        </div>
                    <?php else: ?>
                        <!-- Verbatim snippet text mirroring image_80c603.jpg intro scope -->
                        <p class="lead fw-medium text-dark" style="font-size: 18px; line-height: 1.7;">
                            Mouthwash is often marketed as essential — but do you really need it? We break down the pros, cons, and when it actually matters most.
                        </p>
                        
                        <p>
                            When it comes to completing your daily morning routine, reaching for a bottle of mouthwash feels like second nature. It provides that instant, icy-cool burst of minty freshness that makes you feel immediately clean. However, clean sensations don't always translate directly into therapeutic benefits. Dental professionals evaluate oral rinses through a lens of necessity rather than mere aesthetic luxury.
                        </p>

                        <h2 id="the-therapeutic-role-of-modern-rinses-1">The Therapeutic Role of Modern Rinses</h2>
                        <p>
                            It is critical to distinguish between cosmetic mouthwashes and therapeutic formulas. Cosmetic versions are designed purely to temporarily mask bad breath; they do not kill the bacteria responsible for plaque, gingivitis, or decay. Therapeutic rinses, conversely, contain active clinical agents such as chlorhexidine, cetylpyridinium chloride, or specialized essential oils that target and reduce harmful bacterial colonies.
                        </p>

                        <div class="article-pullquote">
                            <p>
                                "Mouthwash should never be viewed as an alternative shortcut to replace physical mechanical brushing. It functions optimally as a defensive multiplier to reach the microscopic surfaces that bristles miss."
                            </p>
                        </div>

                        <h2 id="when-is-mouthwash-explicitly-recommended-2">When is Mouthwash Explicitly Recommended?</h2>
                        <p>
                            Our clinical experts frequently incorporate targeted oral rinses into patient care plans under specific diagnostic conditions:
                        </p>
                        
                        <ul class="article-list">
                            <li><strong>High Cavity Susceptibility:</strong> Prescription-grade fluoride options add an invisible barrier layer that reinforces enamel against acidic breakdown.</li>
                            <li><strong>Periodontal Management:</strong> Active antiseptic rinses significantly curb gingival inflammation and tissue bleeding.</li>
                            <li><strong>Post-Surgical Healing:</strong> Gentle antimicrobial rinses keep extraction sites pristine when normal brushing isn't physically safe.</li>
                            <li><strong>Chronic Xerostomia (Dry Mouth):</strong> Formulations enriched with lubricating enzymes restore comforting hydration while shielding sensitive oral mucosa.</li>
                        </ul>

                        <h2 id="the-verdict-from-the-chair-3">The Verdict from the Chair</h2>
                        <p>
                            If your current routine consists of solid double-daily brushing with fluoride toothpaste and meticulous flossing, a basic over-the-counter mouthwash is an optional upgrade rather than a strict requirement. To find out exactly which therapeutic agent lines up best with your specific enamel profiles, always speak directly with your clinician during your standard six-month hygiene checkup.
                        </p>
                    <?php endif; ?>
                </article>
            </div>

        </div>
    </div>
</section>
<section class="related-blogs-section">
    <div class="container">
        
        <!-- Header Section Line -->
        <div class="row">
            <div class="col-12">
                <h3 class="related-section-title">Related Articles</h3>
            </div>
        </div>

        <!-- 3-Column Responsive Grid Array Row -->
        <div class="row g-4 justify-content-center">
            <?php if ($wordpress_installed && !empty($related_posts)): ?>
                <?php foreach ($related_posts as $r_post): 
                    $r_cats = get_the_category($r_post->ID);
                    $r_category = !empty($r_cats) ? $r_cats[0]->name : 'Dental Care';
                    
                    $r_img = get_post_meta($r_post->ID, 'featured_image_url', true);
                    if (empty($r_img)) {
                        $r_img = get_the_post_thumbnail_url($r_post->ID, 'medium');
                    }
                    if (empty($r_img)) {
                        $r_img = 'https://cdn.prod.website-files.com/6926cfe749a3cbee64682cb2/692fcd7d9985f67d0331e312_Image%20Two.avif';
                    }
                    ?>
                    <div class="col-12 col-md-4">
                        <article class="related-card">
                            <div class="related-img-wrapper">
                                <img src="<?php echo esc_url($r_img); ?>" alt="<?php echo esc_attr($r_post->post_title); ?>">
                            </div>
                            <div class="related-meta">
                                <span class="related-meta-tag"><?php echo esc_html($r_category); ?></span>
                                <span class="related-meta-dot"></span>
                                <span class="related-meta-date"><?php echo esc_html(get_the_date('F j, Y', $r_post)); ?></span>
                            </div>
                            <h4 class="related-title">
                                <a href="./blog-detail.php?slug=<?php echo esc_attr($r_post->post_name); ?>"><?php echo esc_html($r_post->post_title); ?></a>
                            </h4>
                            <p class="related-desc">
                                <?php echo esc_html($r_post->post_excerpt ? $r_post->post_excerpt : wp_trim_words($r_post->post_content, 20)); ?>
                            </p>
                            <a href="./blog-detail.php?slug=<?php echo esc_attr($r_post->post_name); ?>" class="related-read-more">Read More</a>
                        </article>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Card Column element 1 -->
                <div class="col-12 col-md-4">
                    <article class="related-card">
                        <div class="related-img-wrapper">
                            <!-- Verbatim project image resource reference -->
                            <img src="https://cdn.prod.website-files.com/6926cfe749a3cbee64682cb2/692fcd7d9985f67d0331e312_Image%20Two.avif" alt="Dentist providing gentle patient guidance inside consulting environment">
                        </div>
                        <div class="related-meta">
                            <span class="related-meta-tag">Painless Dentistry</span>
                            <span class="related-meta-dot"></span>
                            <span class="related-meta-date">December 9, 2025</span>
                        </div>
                        <h4 class="related-title">
                            <a href="#">5 Simple Habits for a Healthier, Brighter Smile</a>
                        </h4>
                        <p class="related-desc">
                            Your smile starts with daily care. Discover simple, dentist-approved habits you can adopt today to keep your teeth clean and cavity-free.
                        </p>
                        <a href="#" class="related-read-more">Read More</a>
                    </article>
                </div>

                <!-- Card Column element 2 -->
                <div class="col-12 col-md-4">
                    <article class="related-card">
                        <div class="related-img-wrapper">
                            <!-- Verbatim project image resource reference -->
                            <img src="https://cdn.prod.website-files.com/6926cfe749a3cbee64682cb2/692fcd7d9985f67d0331e312_Image%20Two.avif" alt="Patient gesture ok sign seated on professional clinical dental chair">
                        </div>
                        <div class="related-meta">
                            <span class="related-meta-tag">Cosmetic Care</span>
                            <span class="related-meta-dot"></span>
                            <span class="related-meta-date">February 14, 2026</span>
                        </div>
                        <h4 class="related-title">
                            <a href="#">The Ultimate Guide to Modern Smile Transformations</a>
                        </h4>
                        <p class="related-desc">
                            Thinking about brightening your alignment? Professional cosmetic choices offer pristine, long-lasting results built around your face architecture.
                        </p>
                        <a href="#" class="related-read-more">Read More</a>
                    </article>
                </div>

                <!-- Card Column element 3 -->
                <div class="col-12 col-md-4">
                    <article class="related-card">
                        <div class="related-img-wrapper">
                            <!-- Verbatim project image resource reference -->
                            <img src="https://cdn.prod.website-files.com/6926cfe749a3cbee64682cb2/692fcd7d9985f67d0331e312_Image%20Two.avif" alt="Dentist presenting premium prosthetic structural diagnostic cast element">
                        </div>
                        <div class="related-meta">
                            <span class="related-meta-tag">Dental Implants</span>
                            <span class="related-meta-dot"></span>
                            <span class="related-meta-date">March 2, 2026</span>
                        </div>
                        <h4 class="related-title">
                            <a href="#">How to Prevent Cavities: Top Structural Tips from Experts</a>
                        </h4>
                        <p class="related-desc">
                            Protect your enamel investments. Learn the baseline nutritional routines and hygiene tactics that prevent unexpected dental decay over time.
                        </p>
                        <a href="#" class="related-read-more">Read More</a>
                    </article>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>
<?php include "./components/footer.php"?>
<script src="./script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>