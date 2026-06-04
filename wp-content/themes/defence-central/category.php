<?php
get_header();

$category = get_queried_object();
$category_name = $category instanceof WP_Term ? $category->name : single_cat_title('', false);
$category_description = category_description();
?>

<main id="site-content" class="site-main">
    <section class="dc-archive-hero">
        <div class="container">
            <p class="dc-archive-hero__eyebrow"><?php esc_html_e('Video Archive', 'defence-central'); ?></p>
            <h1><?php echo esc_html($category_name); ?></h1>
            <?php if ($category_description) : ?>
                <div class="dc-archive-hero__description"><?php echo wp_kses_post($category_description); ?></div>
            <?php endif; ?>
        </div>
    </section>

    <section class="dc-archive-listing">
        <div class="container">
            <?php if (have_posts()) : ?>
                <div class="dc-archive-grid">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php
                        $youtube_id = (string) get_post_meta(get_the_ID(), 'youtube_id', true);
                        $youtube_url = (string) get_post_meta(get_the_ID(), 'youtube_url', true);

                        if (!$youtube_url && $youtube_id) {
                            $youtube_url = 'https://www.youtube.com/watch?v=' . $youtube_id;
                        }

                        if (!$youtube_id) {
                            $youtube_id = 'dQw4w9WgXcQ';
                        }

                        if (!$youtube_url) {
                            $youtube_url = 'https://www.youtube.com/watch?v=' . $youtube_id;
                        }
                        ?>
                        <article <?php post_class('dc-video-card dc-archive-card'); ?>>
                            <div class="dc-video-card__media">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large', ['alt' => esc_attr(get_the_title())]); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/image01.webp'); ?>" alt="">
                                <?php endif; ?>
                                <button class="dc-video-card__play" type="button" data-youtube-id="<?php echo esc_attr($youtube_id); ?>" data-video-title="<?php echo esc_attr(get_the_title()); ?>">
                                    <span><?php esc_html_e('PLAY', 'defence-central'); ?></span>
                                    <span class="dc-video-card__play-icon" aria-hidden="true"></span>
                                </button>
                            </div>

                            <div class="dc-video-card__body">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <?php the_excerpt(); ?>
                                <a class="dc-video-card__link" href="<?php echo esc_url($youtube_url); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Open in Youtube', 'defence-central'); ?></a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div class="dc-archive-pagination">
                    <?php the_posts_pagination([
                        'mid_size' => 1,
                        'prev_text' => __('Previous', 'defence-central'),
                        'next_text' => __('Next', 'defence-central'),
                    ]); ?>
                </div>
            <?php else : ?>
                <p class="dc-archive-empty"><?php esc_html_e('No videos found in this category yet.', 'defence-central'); ?></p>
            <?php endif; ?>
        </div>
    </section>

    <div class="dc-video-modal" data-video-modal aria-hidden="true">
        <div class="dc-video-modal__backdrop" data-video-modal-close></div>
        <div class="dc-video-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="dc-video-modal-title">
            <div class="dc-video-modal__head">
                <p id="dc-video-modal-title"><?php esc_html_e('Video', 'defence-central'); ?></p>
                <button class="dc-video-modal__close" type="button" data-video-modal-close aria-label="<?php esc_attr_e('Close video', 'defence-central'); ?>">×</button>
            </div>
            <div class="dc-video-modal__frame" data-video-modal-frame></div>
        </div>
    </div>
</main>

<?php
get_footer();
