<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        
        $post_title = get_the_title();
        $post_excerpt = has_excerpt() ? get_the_excerpt() : wp_trim_words( get_the_content(), 30 );
        $post_content = apply_filters( 'the_content', get_the_content() );
        $toc_data = generate_toc_and_modify_content( $post_content );
        $post_date = get_the_date( 'F j, Y' );
        $post_year_month = get_the_date( 'F Y' );
        
        $post_cats = get_the_category();
        $post_category = !empty( $post_cats ) ? $post_cats[0]->name : 'Dental Care';
        
        // Get featured image URL
        $post_img = get_post_meta( get_the_ID(), 'featured_image_url', true );
        if ( empty( $post_img ) ) {
            $post_img = get_the_post_thumbnail_url( get_the_ID(), 'full' );
        }
        if ( empty( $post_img ) ) {
            $post_img = esc_url( dirname( home_url() ) . '/image_80c603.jpg' );
        }

        // Fetch related posts (same category, excluding current post)
        $related_args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'post__not_in' => array( get_the_ID() ),
            'orderby' => 'rand'
        );
        if ( !empty( $post_cats ) ) {
            $related_args['category__in'] = wp_list_pluck( $post_cats, 'term_id' );
        }
        $related_posts = get_posts( $related_args );
        
        if ( empty( $related_posts ) ) {
            $related_posts = get_posts( array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'post__not_in' => array( get_the_ID() ),
                'orderby' => 'date',
                'order' => 'DESC'
            ) );
        }
        
        // Get all categories for sidebar
        $categories_list = get_categories( array(
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => false
        ) );
        ?>

        <div class="container-fluid">
            <div class="hero-container p-4 p-md-5" style="background-image: linear-gradient(rgba(15, 42, 68, 0.45), rgba(15, 42, 68, 0.75)), url('<?php echo esc_url($post_img); ?>');">
                
                <?php get_template_part('navbar-template'); ?>
                
                <!-- Main Hero Body Content Element Layer -->
                <div class="row hero-content align-items-end mt-5">
                    <div class="col-lg-10">

                        <div class="hero-meta-subline">
                            <span><?php echo esc_html( $post_category ); ?></span>
                            <span class="hero-meta-dot"></span>
                            <span class="hero-meta-date" style="opacity: 0.9;"><?php echo esc_html( $post_date ); ?></span>
                            <span class="hero-meta-dot"></span>
                            <span>By Dental Care</span>
                        </div>

                        <!-- Text Overlay Content Block -->
                        <h1 class="hero-title"><?php echo esc_html( $post_title ); ?></h1>

                        <p class="hero-desc mb-0">
                            <?php echo esc_html( $post_excerpt ); ?>
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

        <section class="blog-body-section">
            <div class="container">
                
                <!-- Back to Blogs button -->
                <div class="row mb-4">
                    <div class="col-12">
                        <a href="<?php echo esc_url( dirname( home_url() ) ); ?>/blogs.php" class="btn btn-book back-btn d-inline-flex align-items-center gap-2">
                            <span class="btn-arrow-circle bg-white text-dark">
                                <svg viewBox="0 0 24 24" style="width: 12px; height: 12px; fill: none; stroke: currentColor; stroke-width: 3;">
                                    <line x1="19" y1="12" x2="5" y2="12"></line>
                                    <polyline points="12 19 5 12 12 5"></polyline>
                                </svg>
                            </span>
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
                                <?php echo $toc_data['toc']; ?>
                            </div>
                        </aside>
                    </div>

                    <!-- Right Side Area: Main Article Presentation Flow Column -->
                    <div class="col-12 col-lg-8 order-1 order-lg-2">
                        <article class="article-rich-text">
                            <div class="entry-content">
                                <?php echo $toc_data['content']; ?>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </section>

        <section class="related-blogs-section">
            <div class="container">
                
                <div class="row">
                    <div class="col-12">
                        <h3 class="related-section-title">Related Articles</h3>
                    </div>
                </div>

                <!-- 3-Column Responsive Grid Array Row -->
                <div class="row g-4 justify-content-center">
                    <?php if ( !empty( $related_posts ) ) : ?>
                        <?php foreach ( $related_posts as $r_post ) : 
                            $r_cats = get_the_category( $r_post->ID );
                            $r_category = !empty( $r_cats ) ? $r_cats[0]->name : 'Dental Care';
                            
                            $r_img = get_post_meta( $r_post->ID, 'featured_image_url', true );
                            if ( empty( $r_img ) ) {
                                $r_img = get_the_post_thumbnail_url( $r_post->ID, 'medium' );
                            }
                            if ( empty( $r_img ) ) {
                                $r_img = esc_url( dirname( home_url() ) . '/images/LOGO.png' );
                            }
                            ?>
                            <div class="col-12 col-md-4">
                                <article class="related-card">
                                    <div class="related-img-wrapper">
                                        <img src="<?php echo esc_url( $r_img ); ?>" alt="<?php echo esc_attr( $r_post->post_title ); ?>">
                                    </div>
                                    <div class="related-meta">
                                        <span class="related-meta-tag"><?php echo esc_html( $r_category ); ?></span>
                                        <span class="related-meta-dot"></span>
                                        <span class="related-meta-date"><?php echo esc_html( get_the_date( 'F j, Y', $r_post ) ); ?></span>
                                    </div>
                                    <h4 class="related-title">
                                        <a href="<?php echo esc_url( get_permalink( $r_post->ID ) ); ?>"><?php echo esc_html( $r_post->post_title ); ?></a>
                                    </h4>
                                    <p class="related-desc">
                                        <?php echo esc_html( $r_post->post_excerpt ? $r_post->post_excerpt : wp_trim_words( $r_post->post_content, 20 ) ); ?>
                                    </p>
                                    <a href="<?php echo esc_url( get_permalink( $r_post->ID ) ); ?>" class="related-read-more">Read More</a>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

            </div>
        </section>

        <?php
    endwhile;
endif;

get_footer();
