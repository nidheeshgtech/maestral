<?php
get_header();
$cats      = get_the_category();
$first_cat = $cats[0] ?? null;
?>

<main id="site-content" class="site-main">
    <?php while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('dc-single'); ?>>

        <!-- Hero -->
        <div class="dc-single-hero">
            <?php if (has_post_thumbnail()) : ?>
                <div class="dc-single-hero__media">
                    <?php the_post_thumbnail('full', ['alt' => '']); ?>
                    <div class="dc-single-hero__overlay"></div>
                </div>
            <?php endif; ?>
            <div class="dc-single-hero__content container">
                <div class="dc-single-hero__tags">
                    <?php foreach ($cats as $cat) : ?>
                        <a class="dc-news-tag" href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"><?php echo esc_html($cat->name); ?></a>
                    <?php endforeach; ?>
                </div>
                <h1 class="dc-single-hero__title"><?php the_title(); ?></h1>
                <div class="dc-single-hero__meta">
                    <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('d M Y')); ?></time>
                    <?php if (get_the_author()) : ?>
                        <span class="dc-single-hero__dot" aria-hidden="true"></span>
                        <span><?php the_author(); ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Body -->
        <div class="dc-single-wrap">
            <div class="container">
                <div class="dc-single-layout">

                    <!-- Main content -->
                    <div class="dc-single-main">
                        <div class="dc-single-content">
                            <?php the_content(); ?>
                        </div>

                        <div class="dc-single-back">
                            <?php if ($first_cat) : ?>
                            <a class="dc-pill-link" href="<?php echo esc_url(get_category_link($first_cat->term_id)); ?>">
                                <span><?php echo esc_html(sprintf(__('Back to %s', 'defence-central'), $first_cat->name)); ?></span>
                                <span aria-hidden="true">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.19617 11.7628L3.5 11.0667L10.0603 4.5H4.09617V3.5H11.7628V11.1667H10.7628V5.2025L4.19617 11.7628Z" fill="#897F3A"/>
                                    </svg>
                                </span>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <aside class="dc-single-sidebar">
                        <div class="dc-single-sidebar__inner">
                            <h2 class="dc-single-sidebar__heading"><?php esc_html_e('More Stories', 'defence-central'); ?></h2>
                            <?php
                            $related = new WP_Query([
                                'post_type'      => 'post',
                                'posts_per_page' => 4,
                                'post_status'    => 'publish',
                                'post__not_in'   => [get_the_ID()],
                                'category__in'   => $first_cat ? [$first_cat->term_id] : [],
                                'orderby'        => 'date',
                                'order'          => 'DESC',
                            ]);
                            if ($related->have_posts()) :
                                while ($related->have_posts()) : $related->the_post(); ?>
                                <a class="dc-related-card" href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="dc-related-card__media">
                                            <?php the_post_thumbnail('thumbnail', ['alt' => '']); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="dc-related-card__body">
                                        <p class="dc-related-card__title"><?php the_title(); ?></p>
                                        <time class="dc-related-card__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('d M Y')); ?></time>
                                    </div>
                                </a>
                            <?php endwhile;
                                wp_reset_postdata();
                            endif; ?>
                        </div>
                    </aside>

                </div>
            </div>
        </div>

    </article>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
