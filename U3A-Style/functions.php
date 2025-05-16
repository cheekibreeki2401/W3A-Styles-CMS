<?php
function U3A_styles() {
 wp_enqueue_style( 'parent', get_template_directory_uri().'/style.css' );                       
}
add_action( 'wp_enqueue_scripts', 'U3A_styles');

function childtheme_enqueue_styles() {
    wp_enqueue_style( 'child-theme-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap', false );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', ['parent-style'] );
}
add_action( 'wp_enqueue_scripts', 'childtheme_enqueue_styles' );

function u3a_register_activity_post_type() {
  register_post_type('activity', [
    'labels' => [
      'name' => __('Activities'),
      'singular_name' => __('Activity')
    ],
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'activities'],
    'show_in_rest' => true,
    'supports' => ['title', 'editor', 'excerpt', 'thumbnail']
  ]);
}
add_action('init', 'u3a_register_activity_post_type');

function u3a_custom_activity_excerpt($excerpt, $post) {
    if ($post->post_type !== 'activity') {
        return $excerpt;
    }
    $content = apply_filters('the_content', $post->post_content);
    $pattern = '/<h2[^>]*>What to Expect:?\s*<\/h2>\s*<p>(.*?)<\/p>/is';

    if (preg_match($pattern, $content, $matches)) {
        $paragraph_text = wp_strip_all_tags($matches[1]);
        return 'What to Expect: ' . $paragraph_text;
    } else {
        $content_plain = wp_strip_all_tags($content);
        $cutoff = stripos($content_plain, 'Schedule');

        if ($cutoff !== false) {
            return trim(substr($content_plain, 0, $cutoff));
        } else {
            return wp_trim_words($content_plain, 30, '...');
        }
    }
}
add_filter('get_the_excerpt', 'u3a_custom_activity_excerpt', 10, 2);
