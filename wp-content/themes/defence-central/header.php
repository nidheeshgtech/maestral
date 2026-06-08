<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#site-content"><?php esc_html_e('Skip to content', 'defence-central'); ?></a>
<header class="site-header" data-site-header>
    <div class="site-header__inner container">
        <a class="site-brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?>">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                ?>
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.svg'); ?>"
                    alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                    width="72"
                    height="72"
                >
                <?php
            }
            ?>
        </a>

        <button class="site-nav-toggle" type="button" aria-expanded="false" aria-controls="primary-menu" data-nav-toggle>
            <span class="site-nav-toggle__bar"></span>
            <span class="site-nav-toggle__bar"></span>
            <span class="site-nav-toggle__bar"></span>
            <span class="screen-reader-text"><?php esc_html_e('Menu', 'defence-central'); ?></span>
        </button>

        <nav class="site-nav" aria-label="<?php esc_attr_e('Primary navigation', 'defence-central'); ?>" data-site-nav>
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'menu_id' => 'primary-menu',
                'menu_class' => 'site-nav__menu',
                'fallback_cb' => 'defence_central_default_menu',
            ]);
            ?>
        </nav>
    </div>
</header>
