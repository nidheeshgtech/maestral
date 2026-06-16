<?php
$page_title = 'Media Centre | Maestral';
$body_class = 'about-page media-page';
include 'includes/header.php';
?>

  <main class="site-shell" id="main">
    <section class="about-hero about-section page-banner js-page-banner" aria-label="Media Centre">
      <div class="about-hero__content container">
        <a class="about-hero__back revealme" href="index.php">
          <span class="specular" aria-hidden="true"></span><span class="glow" aria-hidden="true"></span>
          <span class="about-hero__back-icon" aria-hidden="true">
            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" focusable="false">
              <path d="M7.4 1L1 7M1 7L7.4 13M1 7H17" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </span>
          <span>Go Back</span>
        </a>
        <h1 class="about-title revealme">Media Centre<span class="text-accent">.</span></h1>
        <p class="about-hero__subtitle revealme">Media Centre.<br>Explore the latest media and news from Maestral.</p>
      </div>
    </section>

    <section class="media-listing" aria-label="Latest media and news">
      <div class="media-listing__inner container">
        <div class="media-listing__toolbar revealme">
          <div class="media-listing__tabs js-media-dropdown" role="tablist" aria-label="Media filters">
            <button class="media-listing__tabs-toggle" type="button" aria-haspopup="true" aria-expanded="false">Select Media</button>
            <div class="media-listing__tabs-panel">
              <button class="media-listing__tab is-active" type="button" data-media-filter="all" role="tab"
                aria-selected="true"><span class="specular" aria-hidden="true"></span><span class="glow"
                  aria-hidden="true"></span>All</button>
              <button class="media-listing__tab" type="button" data-media-filter="news" role="tab"
                aria-selected="false"><span class="specular" aria-hidden="true"></span><span class="glow"
                  aria-hidden="true"></span>News</button>
              <button class="media-listing__tab" type="button" data-media-filter="articles" role="tab"
                aria-selected="false"><span class="specular" aria-hidden="true"></span><span class="glow"
                  aria-hidden="true"></span>Articles</button>
            </div>
          </div>

          <label class="media-search" for="media-search">
            <span class="specular" aria-hidden="true"></span><span class="glow" aria-hidden="true"></span>
            <span class="visually-hidden">Search media</span>
            <input id="media-search" type="search" placeholder="Search" autocomplete="off" data-media-search>
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true" focusable="false">
              <path d="M8.25 14.25C11.5637 14.25 14.25 11.5637 14.25 8.25C14.25 4.93629 11.5637 2.25 8.25 2.25C4.93629 2.25 2.25 4.93629 2.25 8.25C2.25 11.5637 4.93629 14.25 8.25 14.25Z"
                stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M12.4937 12.4937L15.75 15.75" stroke="currentColor" stroke-width="1.4"
                stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </label>
        </div>

        <div class="media-listing__grid" data-media-grid>
          <article class="media-card revealme" data-media-category="news"
            data-media-keywords="edge brazilian army operational evaluation next generation weaponry">
            <a class="media-card__image" href="news-detail.php" aria-label="Read EDGE partnership news">
              <img src="assets/images/about/post01.webp" alt="EDGE representatives signing an agreement">
              <span class="media-card__badge">News</span>
            </a>
            <div class="media-card__content">
              <time class="media-card__date" datetime="2026-04-16">16 April 2026</time>
              <h2 class="media-card__title">EDGE Strengthens Partnership with Brazilian Army for Operational Evaluation
                of Next-Generation Weaponry</h2>
              <p class="media-card__excerpt">Collaboration drives innovation, training, and the combat capability of the
                Brazilian Land Force through advanced defence evaluation.</p>
              <div class="media-card__footer">
                <a class="media-card__link" href="news-detail.php">
                  <span>Read More</span>
                  <svg width="18" height="12" viewBox="0 0 18 12" fill="none" aria-hidden="true" focusable="false">
                    <path d="M1 6H16M16 6L11 1M16 6L11 11" stroke="currentColor" stroke-width="1.7"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
          </article>

          <article class="media-card revealme" data-media-category="articles"
            data-media-keywords="edge indra radar production brazil local defence">
            <a class="media-card__image" href="news-detail.php" aria-label="Read EDGE and Indra partnership article">
              <img src="assets/images/about/post02.webp" alt="EDGE and Indra representatives at a signing ceremony">
              <span class="media-card__badge">Articles</span>
            </a>
            <div class="media-card__content">
              <time class="media-card__date" datetime="2026-04-16">16 April 2026</time>
              <h2 class="media-card__title">EDGE and Indra Establish Partnership for Local Radar Production in Brazil
              </h2>
              <p class="media-card__excerpt">The initiative aims to foster industrial development, technology transfer,
                and strengthen Brazil's national defence base.</p>
              <div class="media-card__footer">
                <a class="media-card__link" href="news-detail.php">
                  <span>Read More</span>
                  <svg width="18" height="12" viewBox="0 0 18 12" fill="none" aria-hidden="true" focusable="false">
                    <path d="M1 6H16M16 6L11 1M16 6L11 11" stroke="currentColor" stroke-width="1.7"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
          </article>

          <article class="media-card revealme" data-media-category="news"
            data-media-keywords="edge brazilian navy strategic cooperation cyber defence capabilities">
            <a class="media-card__image" href="news-detail.php" aria-label="Read EDGE and Brazilian Navy cyber defence news">
              <img src="assets/images/about/post03.webp" alt="Brazilian Navy and EDGE representatives signing an agreement">
              <span class="media-card__badge">News</span>
            </a>
            <div class="media-card__content">
              <time class="media-card__date" datetime="2026-04-16">16 April 2026</time>
              <h2 class="media-card__title">EDGE and the Brazilian Navy Strengthen Strategic Cooperation in Cyber Defence
                Capabilities</h2>
              <p class="media-card__excerpt">This initiative represents another significant milestone in EDGE's
                established relationship with the Brazilian Navy.</p>
              <div class="media-card__footer">
                <a class="media-card__link" href="news-detail.php">
                  <span>Read More</span>
                  <svg width="18" height="12" viewBox="0 0 18 12" fill="none" aria-hidden="true" focusable="false">
                    <path d="M1 6H16M16 6L11 1M16 6L11 11" stroke="currentColor" stroke-width="1.7"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
          </article>
        </div>

        <p class="media-listing__empty" data-media-empty hidden>No media items match your search.</p>
      </div>
    </section>
  </main>

  <div class="services-footer-bg">
    <div class="services-footer-bg-overlay"></div>
    <?php include 'includes/footer.php'; ?>
