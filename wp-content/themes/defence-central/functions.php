<?php

if (!defined('ABSPATH')) {
    exit;
}

define('DEFENCE_CENTRAL_VERSION', '1.0.37');

function defence_central_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height' => 120,
        'width' => 120,
        'flex-height' => true,
        'flex-width' => true,
    ]);
    add_theme_support('html5', [
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
        'search-form',
    ]);
    add_theme_support('responsive-embeds');

    register_nav_menus([
        'primary' => __('Primary Menu', 'defence-central'),
        'footer' => __('Footer Menu', 'defence-central'),
    ]);
}
add_action('after_setup_theme', 'defence_central_setup');

function defence_central_assets(): void
{
    wp_enqueue_style(
        'defence-central-fonts',
        'https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Kode+Mono:wght@400;500;600;700&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'defence-central-main',
        get_template_directory_uri() . '/assets/css/main.css',
        ['defence-central-fonts'],
        DEFENCE_CENTRAL_VERSION
    );

    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
        [],
        '3.12.5',
        true
    );

    wp_enqueue_script(
        'gsap-scrolltrigger',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
        ['gsap'],
        '3.12.5',
        true
    );

    wp_enqueue_script(
        'defence-central-main',
        get_template_directory_uri() . '/assets/js/main.js',
        ['gsap', 'gsap-scrolltrigger'],
        DEFENCE_CENTRAL_VERSION,
        true
    );

    wp_enqueue_script(
        'defence-central-animations',
        get_template_directory_uri() . '/assets/js/animations.js',
        ['gsap', 'gsap-scrolltrigger'],
        DEFENCE_CENTRAL_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'defence_central_assets');

function defence_central_excerpt_length(int $length): int
{
    return 22;
}
add_filter('excerpt_length', 'defence_central_excerpt_length');

function defence_central_default_menu(): void
{
    echo '<ul id="primary-menu" class="site-nav__menu">';
    echo '<li><a>' . esc_html__('Home', 'defence-central') . '</a></li>';
    echo '<li><a>' . esc_html__('About Us', 'defence-central') . '</a></li>';
    echo '<li><a>' . esc_html__('Air', 'defence-central') . '</a></li>';
    echo '<li><a>' . esc_html__('Sea', 'defence-central') . '</a></li>';
    echo '<li><a>' . esc_html__('Land', 'defence-central') . '</a></li>';
    echo '<li><a>' . esc_html__('Contact', 'defence-central') . '</a></li>';
    echo '</ul>';
}

function defence_central_register_acf_fields(): void
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group([
        'key' => 'group_defence_central_video_details',
        'title' => __('Video Details', 'defence-central'),
        'fields' => [
            [
                'key' => 'field_defence_central_youtube_id',
                'label' => __('YouTube ID', 'defence-central'),
                'name' => 'youtube_id',
                'type' => 'text',
                'instructions' => __('Example: dQw4w9WgXcQ. Used for the popup embed.', 'defence-central'),
                'required' => 0,
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ],
            ],
        ],
        'position' => 'acf_after_title',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'active' => true,
    ]);
}
add_action('acf/init', 'defence_central_register_acf_fields');
