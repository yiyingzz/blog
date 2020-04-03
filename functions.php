<?php

// adding CSS & JS files
function blog_setup() {
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Inconsolata:wght@700&display=swap');
  wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), all);
  // name, function to get stylesheet, dependencies, version #(microtime -> latest version upon refresh, this is good if you're running a local server and are still making changes to it), what are the files that are going to be supported
}

add_action('wp_enqueue_scripts', 'blog_setup');

