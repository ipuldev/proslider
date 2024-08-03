<?php
/**
 * Theme Functions.
 * 
 * @package proslider
 */

 function enqueue_tailwindcss() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/style.css', array(), '1.0.0');
    wp_enqueue_script('prosliderjs', get_template_directory_uri() . '/assets/js/proslider.js', array(), filemtime(get_template_directory(). '/assets/js/proslider.js'), true);
  }
add_action('wp_enqueue_scripts', 'enqueue_tailwindcss');  

add_action('init', function() {
    add_rewrite_rule('^career(/.*)?$', 'index.php?career_redirect=1', 'top');
    add_rewrite_rule('^contact(/.*)?$', 'index.php?contact_redirect=1', 'top');
});

add_action('init', function() {
    flush_rewrite_rules();
});

add_filter('query_vars', function($query_vars) {
    $query_vars[] = 'career_redirect';
    $query_vars[] = 'contact_redirect';
    return $query_vars;
});

add_action('template_include', function($template) {
    if (get_query_var('career_redirect') == 1) {
        return get_template_directory() . '/career.php';
    }
    if (get_query_var('contact_redirect') == 1) {
        return get_template_directory() . '/contact.php';
    }
    return $template;
});

?>