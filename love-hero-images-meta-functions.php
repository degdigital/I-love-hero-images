<?php
/**
 * Initialize the metabox class
 */
function love_initialize_hero_image_meta_boxes() {
    if ( !class_exists( 'cmb_Meta_Box' ) ) {
        require_once( 'lib/cmb/init.php' );
    }
}

add_action( 'init', 'love_initialize_hero_image_meta_boxes', 9999 );

function love_hero_image_metaboxes() {
    $prefix = '_hero_';

    $meta_boxes[] = array(
        'id' => 'hero_metabox',
		'title' => 'Hero Image Details',
		'pages' => array( 'hero_image' ),
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true,
		'fields' => array(
            array(
                'name' => 'Image',
                'desc' => 'Upload an image or enter an URL. <strong>Required size: XXXXxXXXXpx</strong>',
                'id' => $prefix . 'image_url',
                'type' => 'file',
                'save_id' => false,
                'allow' => array( 'url', 'attachment' ),
            ),
            array(
                'name' => 'Overlay Text',
                'id' => $prefix . 'text',
                'type' => 'textarea_small'
            ),
            array(
                'name' => 'Overlay Postition',
                'id' => $prefix . 'text_position',
                'type' => 'radio_inline',
                'options' => array(
                    array('name' => 'Left', 'value' => 'left'),
                    array('name' => 'Center', 'value' => 'center'),
                    array('name' => 'Right', 'value' => 'right')
                )
            ),
            array(
                'name' => 'Button Text',
                'id' => $prefix . 'button_text',
                'type' => 'text_medium'
            ),
            array(
                'name' => 'Button URL',
                'id' => $prefix . 'button_url',
                'type' => 'text'
            ),
        ),
    );

    return $meta_boxes;
}

add_filter( 'cmb_meta_boxes', 'love_hero_image_metaboxes' );