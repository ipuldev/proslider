<?php

/**
 * Theme Functions.
 * 
 * @package proslider
 */

function enqueue_tailwindcss()
{
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/style.css', array(), '1.0.0');
    wp_enqueue_script('prosliderjs', get_template_directory_uri() . '/assets/js/proslider.js', array(), filemtime(get_template_directory() . '/assets/js/proslider.js'), true);
}
add_action('wp_enqueue_scripts', 'enqueue_tailwindcss');

add_action('init', function () {
    add_rewrite_rule('^career(/.*)?$', 'index.php?career_redirect=1', 'top');
    add_rewrite_rule('^contact(/.*)?$', 'index.php?contact_redirect=1', 'top');
});

add_action('init', function () {
    flush_rewrite_rules();
});

add_filter('query_vars', function ($query_vars) {
    $query_vars[] = 'career_redirect';
    $query_vars[] = 'contact_redirect';
    return $query_vars;
});

add_action('template_include', function ($template) {
    if (get_query_var('career_redirect') == 1) {
        return get_template_directory() . '/career.php';
    }
    if (get_query_var('contact_redirect') == 1) {
        return get_template_directory() . '/contact.php';
    }
    return $template;
});

function create_submission_post_type()
{
    register_post_type(
        'form_submission',
        array(
            'labels' => array(
                'name' => __('Form Submissions'),
                'singular_name' => __('Form Submission'),
                'add_new_item' => __('Add New Submission'),
                'edit_item' => __('Edit Submission'),
                'new_item' => __('New Submission'),
                'view_item' => __('View Submission'),
                'search_items' => __('Search Submissions'),
                'not_found' => __('No submissions found'),
                'not_found_in_trash' => __('No submissions found in Trash')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-feedback',
            'supports' => array('title', 'editor'),
            'capability_type' => 'post',
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'create_submission_post_type');

function handle_career_form_submission() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] === 'handle_career_form_submission') {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);

        // Validate required fields
        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            $response = array(
                'success' => false,
                'message' => 'Please fill out all required fields.'
            );
        } else {
            $to = get_option('admin_email');
            $headers = array('Content-Type: text/html; charset=UTF-8');
            $body = "Name: $name<br>Email: $email<br>Subject: $subject<br>Message: $message";

            wp_mail($to, $subject, $body, $headers);

            $existing_post = get_posts(array(
                'post_type' => 'form_submission',
                'meta_query' => array(
                    array(
                        'key' => 'email',
                        'value' => $email,
                        'compare' => '='
                    ),
                    array(
                        'key' => 'subject',
                        'value' => $subject,
                        'compare' => '='
                    )
                )
            ));

            if (empty($existing_post)) {
                $post_id = wp_insert_post(array(
                    'post_title' => $subject,
                    'post_content' => $body,
                    'post_type' => 'form_submission',
                    'post_status' => 'publish'
                ));

                update_post_meta($post_id, 'name', $name);
                update_post_meta($post_id, 'email', $email);
            }

            $response = array(
                'success' => true,
                'message' => 'Thank you for reaching out. We will get back to you soon.'
            );
        }

        wp_send_json($response);
    }
}
add_action('wp_ajax_handle_career_form_submission', 'handle_career_form_submission');
add_action('wp_ajax_nopriv_handle_career_form_submission', 'handle_career_form_submission');




// Add custom columns to the form_submission post type
function set_custom_edit_form_submission_columns($columns)
{
    $columns['name'] = __('Name');
    $columns['email'] = __('Email');
    return $columns;
}
add_filter('manage_form_submission_posts_columns', 'set_custom_edit_form_submission_columns');

// Add data to the custom columns
function custom_form_submission_column($column, $post_id)
{
    switch ($column) {
        case 'name':
            echo get_post_meta($post_id, 'name', true);
            break;
        case 'email':
            echo get_post_meta($post_id, 'email', true);
            break;
    }
}
add_action('manage_form_submission_posts_custom_column', 'custom_form_submission_column', 10, 2);

function enqueue_custom_scripts() {
    wp_enqueue_script('my-custom-script', get_template_directory_uri() . '/js/my-custom-script.js', array('jquery'), null, true);
    wp_localize_script('my-custom-script', 'myAjax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

