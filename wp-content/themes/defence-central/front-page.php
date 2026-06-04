<?php
get_header();
?>

<main id="site-content" class="site-main">
    <section class="dc-hero" aria-labelledby="dc-hero-title">
        <img
            class="dc-hero__image"
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/banner.webp'); ?>"
            alt=""
            aria-hidden="true"
        >
        <div class="dc-hero__overlay"></div>

        <div class="dc-hero__content">
            <!-- <div class="dc-hero__badges" aria-label="<?php esc_attr_e('Story labels', 'defence-central'); ?>">
                <span class="dc-hero__badge dc-hero__badge--primary"><?php esc_html_e('Top Story', 'defence-central'); ?></span>
                <span class="dc-hero__badge dc-hero__badge--secondary"><?php esc_html_e('Live Briefing', 'defence-central'); ?></span>
            </div> -->

            <div class="dc-hero__copy">
                <h1 id="dc-hero-title"><?php esc_html_e('Operation Global Resolve: The Future of Aerial Dominance', 'defence-central'); ?></h1>
                <p><?php esc_html_e('An exclusive intelligence briefing on the coordinated efforts of allied forces developing next-generation combat systems, stealth capabilities, and integrated command structures across the globe.', 'defence-central'); ?></p>
            </div>
        </div>
    </section>

    <?php
    $dummy_youtube_ids = ['dQw4w9WgXcQ', 'ysz5S6PUM-U', 'jNQXAC9IVRw', 'ScMzIvxBSi4'];

    $video_sections = [
        [
            'title' => __('Army', 'defence-central'),
            'slug'  => 'army',
            'cta'   => __('View All Army Videos', 'defence-central'),
        ],
        [
            'title' => __('Air Force', 'defence-central'),
            'slug'  => 'air',
            'cta'   => __('View All Air Force', 'defence-central'),
        ],
    ];

    foreach ($video_sections as $section) :
        $section_id = $section['slug'] . '-section-title';

        $posts_query = new WP_Query([
            'post_type'      => 'post',
            'posts_per_page' => 8,
            'category_name'  => $section['slug'],
            'post_status'    => 'publish',
            'meta_query'     => [
                [
                    'key'     => 'youtube_id',
                    'compare' => 'EXISTS',
                ],
                [
                    'key'     => 'youtube_id',
                    'value'   => '',
                    'compare' => '!=',
                ],
            ],
        ]);

        $has_posts = $posts_query->have_posts();
        ?>
        <section class="dc-video-section" aria-labelledby="<?php echo esc_attr($section_id); ?>">
            <div class="dc-video-section__head container">
                <h2 id="<?php echo esc_attr($section_id); ?>"><?php echo esc_html($section['title']); ?></h2>
                <a class="dc-pill-link" href="<?php echo esc_url(home_url('/category/' . $section['slug'] . '/')); ?>">
                    <span><?php echo esc_html($section['cta']); ?></span>
                    <span aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.19617 11.7628L3.5 11.0667L10.0603 4.5H4.09617V3.5H11.7628V11.1667H10.7628V5.2025L4.19617 11.7628Z" fill="#897F3A"/>
                        </svg>
                    </span>
                </a>
            </div>

            <div class="dc-slider" data-dc-slider>
                <div class="dc-slider__track" data-dc-slider-track>
                    <?php if ($has_posts) :
                        while ($posts_query->have_posts()) : $posts_query->the_post();
                            $youtube_id  = get_field('youtube_id');
                            $youtube_url = 'https://www.youtube.com/watch?v=' . $youtube_id;
                            $thumb_url   = has_post_thumbnail()
                                ? get_the_post_thumbnail_url(null, 'large')
                                : 'https://img.youtube.com/vi/' . $youtube_id . '/maxresdefault.jpg';
                    ?>
                        <article class="dc-video-card">
                            <div class="dc-video-card__media">
                                <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" loading="lazy">
                                <button class="dc-video-card__play" type="button"
                                    data-youtube-id="<?php echo esc_attr($youtube_id); ?>"
                                    data-video-title="<?php echo esc_attr(get_the_title()); ?>">
                                    <span><?php esc_html_e('PLAY', 'defence-central'); ?></span>
                                    <span class="dc-video-card__play-icon" aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="dc-video-card__body">
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo esc_html(get_the_excerpt()); ?></p>
                                <a class="dc-video-card__link" href="<?php echo esc_url($youtube_url); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Open in Youtube', 'defence-central'); ?></a>
                            </div>
                        </article>
                    <?php endwhile;
                        wp_reset_postdata();
                    else :
                        // Fallback to dummy cards if no posts with youtube_id exist
                        for ($i = 0; $i < 4; $i++) :
                            $youtube_id  = $dummy_youtube_ids[$i] ?? $dummy_youtube_ids[0];
                            $youtube_url = 'https://www.youtube.com/watch?v=' . $youtube_id;
                    ?>
                        <article class="dc-video-card">
                            <div class="dc-video-card__media">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/image01.webp'); ?>" alt="">
                                <button class="dc-video-card__play" type="button"
                                    data-youtube-id="<?php echo esc_attr($youtube_id); ?>"
                                    data-video-title="<?php esc_attr_e('Ranger School: 62 Days of Hell', 'defence-central'); ?>">
                                    <span><?php esc_html_e('PLAY', 'defence-central'); ?></span>
                                    <span class="dc-video-card__play-icon" aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="dc-video-card__body">
                                <h3><?php esc_html_e('Ranger School: 62 Days of Hell', 'defence-central'); ?></h3>
                                <p><?php esc_html_e("Following a class through the rigorous phases of the US Army's premier leadership course.", 'defence-central'); ?></p>
                                <a class="dc-video-card__link" href="<?php echo esc_url($youtube_url); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Open in Youtube', 'defence-central'); ?></a>
                            </div>
                        </article>
                    <?php endfor;
                    endif; ?>
                </div>
                <div class="dc-slider__dots" data-dc-slider-dots aria-hidden="true"></div>
            </div>
        </section>
    <?php endforeach; ?>

    <?php
    $latest_news_query = new WP_Query([
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'category_name'  => 'news',
        'post_status'    => 'publish',
    ]);

    if ($latest_news_query->have_posts()) :
        $news_posts = $latest_news_query->posts;
        $featured   = $news_posts[0];
        $side_posts = array_slice($news_posts, 1);
    ?>
    <section class="dc-latest-news" aria-labelledby="dc-latest-news-title">

        <div class="dc-latest-news__head container">
            <h2 id="dc-latest-news-title"><?php esc_html_e('Latest News', 'defence-central'); ?></h2>
            <span class="dc-latest-news__badge"><?php esc_html_e('Featured News', 'defence-central'); ?></span>
        </div>

        <div class="dc-latest-news__grid container">

            <!-- Featured large card -->
            <article class="dc-news-card dc-news-card--featured">
                <a class="dc-news-card__link" href="<?php echo esc_url(get_permalink($featured)); ?>">
                    <?php if (has_post_thumbnail($featured)) : ?>
                        <img class="dc-news-card__img" <?php echo wp_get_attachment_image_src(get_post_thumbnail_id($featured), 'large') ? 'src="' . esc_url(get_the_post_thumbnail_url($featured, 'large')) . '"' : ''; ?> alt="">
                    <?php endif; ?>
                    <div class="dc-news-card__overlay"></div>
                    <div class="dc-news-card__body">
                        <div class="dc-news-card__tags">
                            <?php foreach (get_the_category($featured->ID) as $cat) : ?>
                                <span class="dc-news-tag"><?php echo esc_html($cat->name); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <h3 class="dc-news-card__title"><?php echo esc_html(get_the_title($featured)); ?></h3>
                        <p class="dc-news-card__excerpt"><?php echo esc_html(get_the_excerpt($featured)); ?></p>
                       <div class="d-flex">
                         <span class="dc-news-card__read-more">
                            <?php esc_html_e('Read More', 'defence-central'); ?>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M4.19617 11.7628L3.5 11.0667L10.0603 4.5H4.09617V3.5H11.7628V11.1667H10.7628V5.2025L4.19617 11.7628Z" fill="currentColor"/></svg>
                        </span>
                       </div>
                    </div>
                </a>
            </article>

            <!-- Two stacked side cards -->
            <div class="dc-latest-news__side">
                <?php foreach ($side_posts as $side_post) : ?>
                <article class="dc-news-card dc-news-card--side">
                    <a class="dc-news-card__link" href="<?php echo esc_url(get_permalink($side_post)); ?>">
                        <?php if (has_post_thumbnail($side_post)) : ?>
                            <img class="dc-news-card__img" src="<?php echo esc_url(get_the_post_thumbnail_url($side_post, 'medium_large')); ?>" alt="">
                        <?php endif; ?>
                        <div class="dc-news-card__overlay"></div>
                        <div class="dc-news-card__body">
                            <div class="dc-news-card__tags">
                                <?php foreach (get_the_category($side_post->ID) as $cat) : ?>
                                    <span class="dc-news-tag"><?php echo esc_html($cat->name); ?></span>
                                <?php endforeach; ?>
                            </div>
                            <h3 class="dc-news-card__title"><?php echo esc_html(get_the_title($side_post)); ?></h3>
                           <div class="d-flex">
                             <span class="dc-news-card__read-more">
                                <?php esc_html_e('Read More', 'defence-central'); ?>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M4.19617 11.7628L3.5 11.0667L10.0603 4.5H4.09617V3.5H11.7628V11.1667H10.7628V5.2025L4.19617 11.7628Z" fill="currentColor"/></svg>
                            </span>
                           </div>
                        </div>
                    </a>
                </article>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
    <?php
    wp_reset_postdata();
    endif;
    ?>

    <div class="dc-video-modal" data-video-modal aria-hidden="true">
        <div class="dc-video-modal__backdrop" data-video-modal-close></div>
        <div class="dc-video-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="dc-video-modal-title">
            <div class="dc-video-modal__head">
                <p id="dc-video-modal-title"><?php esc_html_e('Ranger School: 62 Days of Hell', 'defence-central'); ?></p>
                <button class="dc-video-modal__close" type="button" data-video-modal-close aria-label="<?php esc_attr_e('Close video', 'defence-central'); ?>">×</button>
            </div>
            <div class="dc-video-modal__frame" data-video-modal-frame></div>
        </div>
    </div>
</main>

<?php
get_footer();
