<?php

class Love_Hero_images {
    
    function __construct() {
        add_action('init', array( $this, 'register_hero_images_cpt') );
        add_action('admin_head', array( $this, 'custom_hero_image_edit_icon') );
    }

    public function register_hero_images_cpt() {

        $labels = array(
            'name' => _x( 'Hero Images', 'hero_image' ),
            'singular_name' => _x( 'Hero Image', 'hero_image' ),
            'add_new' => _x( 'Add New', 'hero_image' ),
            'add_new_item' => _x( 'Add New Hero Image', 'hero_image' ),
            'edit_item' => _x( 'Edit Hero Image', 'hero_image' ),
            'new_item' => _x( 'New Hero Image', 'hero_image' ),
            'view_item' => _x( 'View Hero Image', 'hero_image' ),
            'search_items' => _x( 'Search Hero Images', 'hero_image' ),
            'not_found' => _x( 'No hero images found', 'hero_image' ),
            'not_found_in_trash' => _x( 'No hero images found in Trash', 'hero_image' ),
            'parent_item_colon' => _x( 'Parent Hero Image:', 'hero_image' ),
            'menu_name' => _x( 'Hero Images', 'hero_image' ),
        );

        $args = array(
            'labels' => $labels,
            'hierarchical' => false,

            'supports' => array( 'title' ),

            'public' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'menu_icon' => plugin_dir_url( __FILE__ ) . '/images/hero_image-menu-small.png',
            'show_in_nav_menus' => false,
            'publicly_queryable' => false,
            'exclude_from_search' => true,
            'has_archive' => false,
            'query_var' => true,
            'can_export' => false,
            'rewrite' => true,
            'capability_type' => 'post'
        );

        register_post_type( 'hero_image', $args );
    }

    public function custom_hero_image_edit_icon() {
        global $post;
        $post_type = $post->post_type; ?>

        <style>
            <?php if ( $post_type == 'hero_image') : ?>
            #icon-edit { background:transparent url( <?php echo plugin_dir_url( __FILE__ ) . '/images/hero_image-menu-large.png'; ?> ) no-repeat; }
            <?php endif; ?>
        </style>
    <?php }
}

$hero_images = new Love_Hero_images();