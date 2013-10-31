<?php

/**
 * Get the latest Hero Image
 * @return mixed
 */
function love_hero_get_hero_id() {
    $hero = get_posts(
        array(
            'post_type' => 'hero_image',
            'posts_per_page' => 1,
            'fields' => 'ids'
        )
    );

    return $hero[0];
}

/**
 * Return an array of the latest hero image urls.
 * @param $id
 * @return array
 */
function love_hero_get_hero_image( $url ) {
    $image_url = array();

    $image_url['small'] = aq_resize( $url, 664 );
    $image_url['medium'] = aq_resize( $url, 790 );
    $image_url['large'] = aq_resize( $url, 1264 );
    $image_url['xlarge'] = aq_resize( $url, 1400 );

    return $image_url;
}