<?php
/**
 * Multispeciality Clinic Theme functions and definitions
 */

function multispeciality_clinic_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Enable support for Post Thumbnails (Featured Images) on posts.
    add_theme_support( 'post-thumbnails' );

    // Register Navigation Menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'multispeciality-clinic' ),
    ) );
}
add_action( 'after_setup_theme', 'multispeciality_clinic_setup' );

function multispeciality_clinic_scripts() {
    // Load Bootstrap CSS from CDN
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2' );

    // Load Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', array(), null );

    $parent_url = dirname( home_url() );

    // Load main parent style.css from parent directory
    wp_enqueue_style( 'parent-style', $parent_url . '/style.css', array( 'bootstrap' ), '1.0.0' );

    // Load main parent blog.css from parent directory
    wp_enqueue_style( 'parent-blog-style', $parent_url . '/blog.css', array( 'parent-style' ), '1.0.0' );

    // Load active theme's style.css
    wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array( 'parent-blog-style' ), '1.0.0' );

    // Load Bootstrap Bundle JS from CDN
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true );

    // Load parent script.js from parent directory
    wp_enqueue_script( 'parent-script', $parent_url . '/script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'multispeciality_clinic_scripts' );

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
