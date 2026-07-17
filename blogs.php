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

$selected_category = isset($_GET['category']) ? $_GET['category'] : '';

$wp_posts = [];
if ($wordpress_installed) {
    define('WP_USE_THEMES', false);
    require_once(__DIR__ . '/blogs/wp-load.php');

    // Construct query arguments
    $args = [
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 10,
        'orderby' => 'date',
        'order' => 'DESC',
    ];

    if ($selected_category) {
        $args['category_name'] = $selected_category;
    }

    $wp_posts = get_posts($args);
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
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="container-fluid">
    <div class="hero-container-blog p-4 p-md-5">
        
         <?php include "./components/navbar.php" ?>
        <!-- Main Hero Body Content -->
       <div class="row hero-content align-items-end">
   <div class="col-lg-10">

   <h1 class="hero-title scroll-up">Insights for a <br> Healthier, Brighter Smile</h1>

<p class="hero-desc mb-0 scroll-up">
   Explore expert dental tips, oral care guidance, treatment information, and the latest updates from our clinic — helping you make informed decisions for your smile and overall dental health.
</p>

<div class="mt-4">
    <p class="clinic-hours mb-2 scroll-up">
        <strong>Latest Articles:</strong> Dental Care Tips | Cosmetic Dentistry | Implants | Oral Hygiene
    </p>

    <p class="clinic-contact mb-0 scroll-up">
        <strong>Stay Updated:</strong> Discover trusted advice and practical insights from our dental experts.
    </p>
</div>

</div>
</div>

    </div>
</div>

<section class="blog-section">
    <div class="container">
        
        <!-- Top Section Section Header Grid Block Row -->
        <div class="row">
            <div class="col-12">
                <h2 class="blog-section-title scroll-up">Blog and Articles</h2>
                <?php if ($selected_category): ?>
                    <div class="mb-4 d-flex align-items-center gap-2 scroll-up">
                        <span class="badge bg-primary px-3 py-2 fs-6">Category: <?php echo esc_html($selected_category); ?></span>
                        <a href="./blogs.php" class="btn btn-sm btn-outline-secondary">Clear Filter</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if ($wordpress_installed && !empty($wp_posts)): ?>
            <?php
            $featured_post = $wp_posts[0];
            $recent_posts = array_slice($wp_posts, 1);
            
            // Get category
            $feat_categories = get_the_category($featured_post->ID);
            $feat_category_name = !empty($feat_categories) ? $feat_categories[0]->name : 'Dental Care';
            
            // Get featured image
            $feat_img = get_post_meta($featured_post->ID, 'featured_image_url', true);
            if (empty($feat_img)) {
                $feat_img = get_the_post_thumbnail_url($featured_post->ID, 'large');
            }
            if (empty($feat_img)) {
                $feat_img = 'https://cdn.prod.website-files.com/6926cfe749a3cbee64682cb2/692fcbf778e1bde25078d668_Image%20One.avif';
            }
            ?>
            <!-- Main Layout Media Split Content Array Row -->
            <div class="row g-4 align-items-stretch">
                <!-- Left Column: Media Presentation Element -->
                <div class="col-12 col-lg-7">
                    <div class="blog-img-wrapper scroll-up">
                        <img src="<?php echo esc_url($feat_img); ?>" alt="<?php echo esc_attr($featured_post->post_title); ?>">
                    </div>
                </div>

                <!-- Right Column: Narrative Block Detail Assembly -->
                <div class="col-12 col-lg-5">
                    <div class="blog-content-panel scroll-up">
                        <!-- Article Meta Category Identifier Capsule -->
                        <span class="blog-cat-badge"><?php echo esc_html($feat_category_name); ?></span>
                        <h3 class="blog-article-title"><?php echo esc_html($featured_post->post_title); ?></h3>
                        <p class="blog-excerpt">
                            <?php echo esc_html($featured_post->post_excerpt ? $featured_post->post_excerpt : wp_trim_words($featured_post->post_content, 40)); ?>
                        </p>
                        <!-- Interactive Action Link Element Component -->
                        <a href="./blog-detail.php?slug=<?php echo esc_attr($featured_post->post_name); ?>" class="btn-blog-read">
                            <span class="btn-white-dot">
                                <svg viewBox="0 0 24 24">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </span>
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <!-- Main Layout Media Split Content Array Row -->
            <div class="row g-4 align-items-stretch">
                
                <!-- Left Column: Media Presentation Element -->
                <div class="col-12 col-lg-7">
                    <div class="blog-img-wrapper scroll-up">
                        <!-- Verbatim asset string call rendering filename path from image_8042df.jpg -->
                        <img src="https://cdn.prod.website-files.com/6926cfe749a3cbee64682cb2/692fcbf778e1bde25078d668_Image%20One.avif" alt="Pouring fresh blue antiseptic rinse formula into liquid cap">
                    </div>
                </div>

                <!-- Right Column: Narrative Block Detail Assembly -->
                <div class="col-12 col-lg-5">
                    <div class="blog-content-panel scroll-up">
                        
                        <!-- Article Meta Category Identifier Capsule -->
                        <span class="blog-cat-badge">Oral Health Tips</span>
                        
                        <h3 class="blog-article-title">What to Expect During Your First Orthodontic Consultation</h3>
                        
                        <p class="blog-excerpt">
                            Maintaining a radiant smile doesn’t have to be complicated. In this post, we share five easy daily habits that can drastically improve your oral health — from brushing techniques to smart food choices. Whether you're preparing for a big event or just want to keep your teeth in top shape, these tips will help you smile with confidence every day
                        </p>
                        
                        <!-- Interactive Action Link Element Component -->
                        <a href="#" class="btn-blog-read">
                            <span class="btn-white-dot">
                                <svg viewBox="0 0 24 24">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </span>
                            Read More
                        </a>

                    </div>
                </div>

            </div>
        <?php endif; ?>
    </div>
</section>
<section class="insights-section">
    <div class="container text-start">
        
        <!-- Top Section Header Text Blocks matching image_805c71.jpg verbatim -->
        <div class="row">
            <div class="col-12">
                <span class="insights-badge">Blog and Articles</span>
                <h2 class="insights-main-title scroll-up">Latest Trends and Insights</h2>
            </div>
        </div>

        <!-- 3-Column Grid Structural Framework Row Array -->
        <?php if ($wordpress_installed && !empty($wp_posts)): ?>
            <div class="row g-4 justify-content-center">
                <?php if (empty($recent_posts)): ?>
                    <div class="col-12 text-center py-4 scroll-up">
                        <p class="text-muted">No additional posts found.</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($recent_posts as $post): 
                        $post_categories = get_the_category($post->ID);
                        $category_name = !empty($post_categories) ? $post_categories[0]->name : 'Dental Care';
                        
                        $post_img = get_post_meta($post->ID, 'featured_image_url', true);
                        if (empty($post_img)) {
                            $post_img = get_the_post_thumbnail_url($post->ID, 'medium');
                        }
                        if (empty($post_img)) {
                            $post_img = 'https://i.pinimg.com/1200x/6e/fa/2d/6efa2dcf4045adad0c71ee406396200b.jpg';
                        }
                        ?>
                        <div class="col-12 col-md-4">
                            <article class="insight-article-card scroll-up">
                                <div class="insight-img-wrapper">
                                    <img src="<?php echo esc_url($post_img); ?>" alt="<?php echo esc_attr($post->post_title); ?>">
                                </div>
                                <div class="insight-meta">
                                    <span class="insight-meta-category"><?php echo esc_html($category_name); ?></span>
                                    <span class="insight-meta-dot"></span>
                                    <span class="insight-meta-date"><?php echo esc_html(get_the_date('F j, Y', $post)); ?></span>
                                </div>
                                <h3 class="insight-title">
                                    <a href="./blog-detail.php?slug=<?php echo esc_attr($post->post_name); ?>"><?php echo esc_html($post->post_title); ?></a>
                                </h3>
                                <p class="insight-desc">
                                    <?php echo esc_html($post->post_excerpt ? $post->post_excerpt : wp_trim_words($post->post_content, 20)); ?>
                                </p>
                                <a href="./blog-detail.php?slug=<?php echo esc_attr($post->post_name); ?>" class="insight-link">Read More</a>
                            </article>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <div class="row g-4 justify-content-center">
                
                <!-- Blog Card Item 1 -->
                <div class="col-12 col-md-4">
                    <article class="insight-article-card scroll-up">
                        <div class="insight-img-wrapper">
                            <!-- Verbatim image resource identifier path -->
                            <img src="https://i.pinimg.com/1200x/6e/fa/2d/6efa2dcf4045adad0c71ee406396200b.jpg" alt="Dentist and patient analyzing treatment assets inside practice space">
                        </div>
                        <div class="insight-meta">
                            <span class="insight-meta-category">Painless</span>
                            <span class="insight-meta-dot"></span>
                            <span class="insight-meta-date">December 9, 2025</span>
                        </div>
                        <h3 class="insight-title">
                            <a href="#">5 Simple Habits for a Healthier, Brighter Smile”</a>
                        </h3>
                        <p class="insight-desc">
                            Your smile starts with daily care. Discover simple, dentist-approved habits you can adopt today to keep your teeth strong, clean, and cavity-free.
                        </p>
                        <a href="#" class="insight-link">Read More</a>
                    </article>
                </div>

                <!-- Blog Card Item 2 -->
                <div class="col-12 col-md-4">
                    <article class="insight-article-card scroll-up">
                        <div class="insight-img-wrapper">
                            <!-- Image slice 2 inside image_805c71.jpg context layout -->
                            <img src="https://cdn.prod.website-files.com/6926cfe749a3cbee64682cb2/692fcc0a50175364fcc80d50_Image%20Two.avif" alt="Patient gesture ok sign inside clinical dentist office chair setup">
                        </div>
                        <div class="insight-meta">
                            <span class="insight-meta-category">Dental Care</span>
                            <span class="insight-meta-dot"></span>
                            <span class="insight-meta-date">January 21, 2026</span>
                        </div>
                        <h3 class="insight-title">
                            <a href="#">Is mouthwash really necessary? Here's what dentists say</a>
                        </h3>
                        <p class="insight-desc">
                            Mouthwash is often marketed as essential — but do you really need it? We break down the pros, cons, and when it actually matters most.
                        </p>
                        <a href="#" class="insight-link">Read More</a>
                    </article>
                </div>

                <!-- Blog Card Item 3 -->
                <div class="col-12 col-md-4">
                    <article class="insight-article-card scroll-up">
                        <div class="insight-img-wrapper">
                            <!-- Image slice 3 inside image_805c71.jpg context layout -->
                            <img src="https://i.pinimg.com/1200x/f0/e7/3a/f0e73ace2dd671997e31ae47c1dadfac.jpg" alt="Dentist holding precision diagnostic cast mould framework asset">
                        </div>
                        <div class="insight-meta">
                            <span class="insight-meta-category">Dental Care</span>
                            <span class="insight-meta-dot"></span>
                            <span class="insight-meta-date">January 21, 2026</span>
                        </div>
                        <h3 class="insight-title">
                            <a href="#">How to Prevent Cavities: Top Tips from Your Dentist</a>
                        </h3>
                        <p class="insight-desc">
                            Thinking about brightening your smile? Professional teeth whitening offers faster and longer-lasting results compared to over-the-counter products.
                        </p>
                        <a href="#" class="insight-link">Read More</a>
                    </article>
                </div>

            </div>
        <?php endif; ?>
    </div>
</section>

<?php include "./components/footer.php"?>
<script src="./script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>