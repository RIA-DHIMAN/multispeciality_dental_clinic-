<?php
get_header();

// Collect all posts in the loop
$all_posts = array();
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        $all_posts[] = get_post();
    }
    $featured_post = $all_posts[0];
    $recent_posts = array_slice($all_posts, 1);
} else {
    $featured_post = null;
    $recent_posts = array();
}
?>

<div class="container-fluid">
    <div class="hero-container-blog p-4 p-md-5">
        <?php get_template_part('navbar-template'); ?>
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
                <?php if ( is_category() ) : ?>
                    <div class="mb-4 d-flex align-items-center gap-2 scroll-up">
                        <span class="badge bg-primary px-3 py-2 fs-6">Category: <?php single_cat_title(); ?></span>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-sm btn-outline-secondary">Clear Filter</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if ( $featured_post ) : 
            $feat_categories = get_the_category( $featured_post->ID );
            $feat_category_name = !empty( $feat_categories ) ? $feat_categories[0]->name : 'Dental Care';
            
            // Get featured image URL (custom meta or standard WP thumbnail)
            $feat_img = get_post_meta( $featured_post->ID, 'featured_image_url', true );
            if ( empty( $feat_img ) ) {
                $feat_img = get_the_post_thumbnail_url( $featured_post->ID, 'large' );
            }
            if ( empty( $feat_img ) ) {
                $feat_img = 'https://cdn.prod.website-files.com/6926cfe749a3cbee64682cb2/692fcbf778e1bde25078d668_Image%20One.avif';
            }
            ?>
            <!-- Main Layout Media Split Content Array Row -->
            <div class="row g-4 align-items-stretch">
                <!-- Left Column: Media Presentation Element -->
                <div class="col-12 col-lg-7">
                    <div class="blog-img-wrapper scroll-up">
                        <img src="<?php echo esc_url( $feat_img ); ?>" alt="<?php echo esc_attr( $featured_post->post_title ); ?>">
                    </div>
                </div>

                <!-- Right Column: Narrative Block Detail Assembly -->
                <div class="col-12 col-lg-5">
                    <div class="blog-content-panel scroll-up">
                        <span class="blog-cat-badge"><?php echo esc_html( $feat_category_name ); ?></span>
                        <h3 class="blog-article-title"><?php echo esc_html( $featured_post->post_title ); ?></h3>
                        <p class="blog-excerpt">
                            <?php echo esc_html( $featured_post->post_excerpt ? $featured_post->post_excerpt : wp_trim_words( $featured_post->post_content, 40 ) ); ?>
                        </p>
                        <!-- Interactive Action Link Element Component -->
                        <a href="<?php echo esc_url( get_permalink( $featured_post->ID ) ); ?>" class="btn-blog-read">
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
        <?php else : ?>
            <div class="row">
                <div class="col-12 text-center py-5 scroll-up">
                    <p class="text-muted fs-5">No posts found matching the criteria.</p>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>

<section class="insights-section">
    <div class="container text-start">
        
        <div class="row">
            <div class="col-12">
                <span class="insights-badge">Blog and Articles</span>
                <h2 class="insights-main-title scroll-up">Latest Trends and Insights</h2>
            </div>
        </div>

        <!-- 3-Column Grid Structural Framework Row Array -->
        <div class="row g-4 justify-content-center">
            <?php if ( !empty( $recent_posts ) ) : ?>
                <?php foreach ( $recent_posts as $post ) : 
                    $post_categories = get_the_category( $post->ID );
                    $category_name = !empty( $post_categories ) ? $post_categories[0]->name : 'Dental Care';
                    
                    $post_img = get_post_meta( $post->ID, 'featured_image_url', true );
                    if ( empty( $post_img ) ) {
                        $post_img = get_the_post_thumbnail_url( $post->ID, 'medium' );
                    }
                    if ( empty( $post_img ) ) {
                        $post_img = 'https://i.pinimg.com/1200x/6e/fa/2d/6efa2dcf4045adad0c71ee406396200b.jpg';
                    }
                    ?>
                    <div class="col-12 col-md-4">
                        <article class="insight-article-card scroll-up">
                            <div class="insight-img-wrapper">
                                <img src="<?php echo esc_url( $post_img ); ?>" alt="<?php echo esc_attr( $post->post_title ); ?>">
                            </div>
                            <div class="insight-meta">
                                <span class="insight-meta-category"><?php echo esc_html( $category_name ); ?></span>
                                <span class="insight-meta-dot"></span>
                                <span class="insight-meta-date"><?php echo esc_html( get_the_date( 'F j, Y', $post ) ); ?></span>
                            </div>
                            <h3 class="insight-title">
                                <a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>"><?php echo esc_html( $post->post_title ); ?></a>
                            </h3>
                            <p class="insight-desc">
                                <?php echo esc_html( $post->post_excerpt ? $post->post_excerpt : wp_trim_words( $post->post_content, 20 ) ); ?>
                            </p>
                            <a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" class="insight-link">Read More</a>
                        </article>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="col-12 text-center py-4 scroll-up">
                    <p class="text-muted">No additional posts found.</p>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>

<?php
get_footer();
