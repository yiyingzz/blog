<?php

// adding CSS & JS files
function blog_setup() {
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Inconsolata:wght@700&display=swap');
  wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'blog_setup');


// remove margin created by admin bar
function my_filter_head() {
  remove_action('wp_head', '_admin_bar_bump_cb');
} 

add_action('get_header', 'my_filter_head');

// formatting the excerpt to have 'read more' link
function new_excerpt_more( $more ) {
    // if ( ! is_single() ) {
        $more = sprintf( '<a class="post__link" href="%1$s">%2$s</a>',
            get_permalink( get_the_ID() ),
            __( 'Read more &ges;', 'textdomain' )
        );
    // }

    return '... ' . $more;
}

add_filter( 'excerpt_more', 'new_excerpt_more' );