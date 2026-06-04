<?php
if (!defined('ABSPATH')) {
    exit;
}

$footer_categories = [
    ['label' => __('Army', 'defence-central'),          'slug' => 'army'],
    ['label' => __('Air Force', 'defence-central'),     'slug' => 'air'],
    ['label' => __('Navy', 'defence-central'),          'slug' => 'navy'],
    ['label' => __('International', 'defence-central'), 'slug' => 'international'],
    ['label' => __('Space Force', 'defence-central'),   'slug' => 'space-force'],
    ['label' => __('Cyber Security', 'defence-central'),'slug' => 'cyber-security'],
    ['label' => __('News', 'defence-central'),          'slug' => 'news'],
];
?>
<footer class="site-footer">
    <div class="site-footer__panel container">
        <img class="site-footer__watermark" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.svg'); ?>" alt="" aria-hidden="true">

        <div class="site-footer__top">
            <div class="site-footer__brand">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.svg'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                <p><?php esc_html_e('Defence Central is your authoritative source for military analysis, tactical reports, and global security intelligence. Organizing the front line of Defence media.', 'defence-central'); ?></p>
                <div class="site-footer__socials" aria-label="<?php esc_attr_e('Social links', 'defence-central'); ?>">
                    <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('YouTube', 'defence-central'); ?>">
                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1417_429)">
                            <path d="M1.52392 3.06615C0.825361 6.36248 0.825361 9.76859 1.52392 13.0649C1.6157 13.3997 1.79304 13.7048 2.0385 13.9502C2.28397 14.1956 2.58909 14.373 2.92387 14.4647C8.28712 15.3534 13.7601 15.3534 19.1233 14.4647C19.4581 14.373 19.7632 14.1956 20.0087 13.9502C20.2542 13.7048 20.4315 13.3997 20.5233 13.0649C21.2218 9.76859 21.2218 6.36248 20.5233 3.06615C20.4315 2.7314 20.2542 2.4263 20.0087 2.18087C19.7632 1.93543 19.4581 1.7581 19.1233 1.66632C13.7601 0.777893 8.28714 0.777893 2.92387 1.66632C2.58909 1.7581 2.28397 1.93543 2.0385 2.18087C1.79304 2.4263 1.6157 2.7314 1.52392 3.06615Z" stroke="#030530" stroke-width="2" stroke-linecap="round"/>
                            <path d="M9.02417 5.06592L15.0249 8.06544L12.0245 9.56531L9.02417 11.0652V5.06592Z" stroke="#030530" stroke-width="2" stroke-linecap="round"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_1417_429">
                            <rect width="23" height="17" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>

                      

                    </a>
                    <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Twitter', 'defence-central'); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_9_1696)">
    <path d="M20.0005 7.3992C21.3006 6.09914 22.0006 3.99905 22.0006 3.99905C22.0006 3.99905 20.1005 5.1991 19.0004 5.1991C16.0001 2.39897 11.0998 4.79908 11.9998 8.99928C8.59955 9.09928 5.19928 7.59921 2.9991 4.99909C0.498904 9.5993 2.9991 15.4996 7.9995 16.9996C6.39938 18.3997 4.1992 19.0997 1.99902 18.9997C10.5997 24.7 21.6006 17.3997 20.0005 7.3992Z" stroke="#030530" stroke-width="2" stroke-linecap="round"/>
  </g>
  <defs>
    <clipPath id="clip0_9_1696">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg>
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('LinkedIn', 'defence-central'); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M20.2431 9.75689C19.1178 8.63163 17.5916 7.99946 16.0001 7.99946C14.4087 7.99946 12.8825 8.63163 11.7572 9.75689C10.6319 10.8822 9.99966 12.4083 9.99966 13.9997V21H14V13.9997C14 13.4693 14.2107 12.9605 14.5858 12.5854C14.9609 12.2104 15.4697 11.9996 16.0001 11.9996C16.5306 11.9996 17.0394 12.2104 17.4145 12.5854C17.7896 12.9605 18.0003 13.4693 18.0003 13.9997V21H22.0006V13.9997C22.0006 12.4083 21.3684 10.8822 20.2431 9.75689Z" stroke="#030530" stroke-width="2" stroke-linecap="round"/>
  <path d="M5.99934 8.9995H1.99902V21H5.99934V8.9995Z" stroke="#030530" stroke-width="2" stroke-linecap="round"/>
  <path d="M3.99918 5.99937C5.10384 5.99937 5.99934 5.10391 5.99934 3.99929C5.99934 2.89467 5.10384 1.99921 3.99918 1.99921C2.89453 1.99921 1.99902 2.89467 1.99902 3.99929C1.99902 5.10391 2.89453 5.99937 3.99918 5.99937Z" stroke="#030530" stroke-width="2" stroke-linecap="round"/>
</svg>
                    </a>
                </div>
            </div>

            <nav class="site-footer__categories" aria-label="<?php esc_attr_e('Categories', 'defence-central'); ?>">
                <h2><?php esc_html_e('Categories', 'defence-central'); ?></h2>
                <ul>
                    <?php foreach ($footer_categories as $cat) : ?>
                        <li><a><?php echo esc_html($cat['label']); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>

        <div class="site-footer__bottom">
            <p><?php echo esc_html(sprintf('© %s Defence Central. All Rights Reserved.', date('Y'))); ?></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
