<?php
if (!isset($page_title))
  $page_title = 'Maestral';
if (!isset($body_class))
  $body_class = '';
$current = isset($nav_active) ? $nav_active : basename($_SERVER['PHP_SELF']);

function nav_link($href, $label, $file, $current)
{
  $active = $current === $file;
  $class = 'navbar__link' . ($active ? ' is-active' : '');
  $aria = $active ? ' aria-current="page"' : '';
  $text = $active ? '[' . $label . ']' : $label;
  echo '<a class="' . $class . '" href="' . $href . '"' . $aria . '>' . $text . '</a>' . "\n          ";
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#07090c">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <link rel="stylesheet" href="https://use.typekit.net/tso6pul.css">
  <link rel="stylesheet" href="assets/css/main.css?v=<?php echo @filemtime(__DIR__ . '/../assets/css/main.css'); ?>">
</head>

<body<?php echo $body_class ? ' class="' . htmlspecialchars($body_class) . '"' : ''; ?>>
  <header class="site-header">
    <nav class="navbar container" aria-label="Primary navigation">
      <a class="navbar__brand" href="index.php" aria-label="Maestral home">
        <img class="navbar__logo" src="assets/images/logo-white.svg" alt="Maestral">
      </a>

      <button class="navbar__toggle" type="button" aria-controls="primary-navigation" aria-expanded="false">
        <span class="visually-hidden">Toggle navigation</span>
        <span class="navbar__toggle-line" aria-hidden="true"></span>
      </button>

      <div class="navbar__menu" id="primary-navigation">
        <div class="navbar__links">
          <?php nav_link('index.php', 'Home', 'index.php', $current); ?>
          <?php nav_link('about-us.php', 'About Us', 'about-us.php', $current); ?>
          <?php nav_link('our-products.php', 'Products', 'our-products.php', $current); ?>
          <?php nav_link('media-centre.php', 'News', 'media-centre.php', $current); ?>
        </div>

        <a class="btn btn--orange navbar__cta" href="contact-us.php">
          <span>Contact Us</span>
          <span class="btn__arrow" aria-hidden="true">
            <svg width="18" height="12" viewBox="0 0 18 12" fill="none" focusable="false">
              <path d="M1 6H16M16 6L11 1M16 6L11 11" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </span>
        </a>
      </div>
    </nav>
  </header>
