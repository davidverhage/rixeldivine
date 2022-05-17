<?php

// Our custom post type function
function create_posttype() {

    register_post_type( 'showcases',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Showcases' ),
                'singular_name' => __( 'Case' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
            'rewrite' => array('slug' => 'showcases'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-welcome-view-site',
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );