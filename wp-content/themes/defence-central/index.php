<?php
get_header();
?>

<main id="site-content" class="site-main">
    <section class="container content-feed">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class('content-card'); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e('No content found.', 'defence-central'); ?></p>
        <?php endif; ?>
    </section>
</main>

<?php
get_footer();
