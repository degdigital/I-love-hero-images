<?php
$hero_id = love_hero_get_hero_id();
$hero_meta = new Hero_Meta( $hero_id);
$hero_image = love_hero_get_hero_image( $hero_meta->get('image_url') );
?>

<span class="picture" data-alt="<?php echo esc_attr( get_the_title($hero_id) ); ?>" data-picture>
    <span data-src="<?php echo $hero_image['small']; ?>" data-media="(min-width: 320px)"></span>
    <span data-src="<?php echo $hero_image['medium']; ?>" data-media="(min-width: 640px)"></span>
    <span data-src="<?php echo $hero_image['large']; ?>" data-media="(min-width: 791px)"></span>
    <span data-src="<?php echo $hero_image['xlarge']; ?>" data-media="(min-width: 1280px)"></span>

    <noscript>
        <img src="<?php echo $hero_image['small']; ?>" alt="<?php echo esc_attr( get_the_title($hero_id) ); ?>" />
    </noscript>
</span>

<div class="hero-content">
    <h1><span><?php echo $hero_meta->get('text'); ?></span></h1>
    <a class="<?php echo $hero_meta->get('overlay_color'); ?>" href="<?php echo $hero_meta->get('button_url'); ?>"><?php echo $hero_meta->get('button_text'); ?></a>
</div>