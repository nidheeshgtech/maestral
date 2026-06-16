<?php
$page_title = 'Our Products | Maestral';
$body_class = 'about-page products-page';
include 'includes/header.php';
?>

  <main class="site-shell" id="main">
    <section class="about-hero about-section page-banner js-page-banner" aria-label="Our Products">
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
        <h1 class="about-title revealme">Our Products<span class="text-accent">.</span></h1>
        <p class="about-hero__subtitle revealme">Advanced naval platforms engineered for evolving maritime missions</p>
      </div>
    </section>

    <section class="products-showcase" aria-label="Naval products">
      <div class="products-showcase__inner container">
        <div class="products-showcase__list revealme js-products-accordion">
          <article class="product-accordion" data-product-image="assets/images/acc01.png">
            <button class="product-accordion__head" type="button" aria-expanded="false">
              <span class="product-accordion__label">P50MR Fast Patrol Boat</span>
              <span class="product-accordion__icon" aria-hidden="true"></span>
            </button>
            <div class="product-accordion__body" hidden>
              <p class="product-accordion__copy">A fast-response patrol platform designed for near-shore security, interdiction, escort, and rapid maritime response missions. Its compact footprint supports efficient deployment while maintaining strong operational flexibility.</p>
              <dl class="product-accordion__specs">
                <div><dt>LOA:</dt><dd>50m</dd></div>
                <div><dt>Breadth:</dt><dd>8.4m</dd></div>
                <div><dt>Maximum speed:</dt><dd>32kn</dd></div>
                <div><dt>Crew:</dt><dd>24 personnel</dd></div>
                <div><dt>Endurance:</dt><dd>5 days</dd></div>
              </dl>
            </div>
          </article>

          <article class="product-accordion is-active" data-product-image="assets/images/acc02.png">
            <button class="product-accordion__head" type="button" aria-expanded="true">
              <span class="product-accordion__label">FCX07 Offshore Patrol Vessel</span>
              <span class="product-accordion__icon" aria-hidden="true"></span>
            </button>
            <div class="product-accordion__body">
              <p class="product-accordion__copy">The FCX07 is a reliable offshore patrol vessel that delivers
                best-in-class survivability, crucial for first-line vessels of this class. Its structural design ensures
                floatability and stability, even when two adjacent compartments are flooded.<br><br>In addition, this
                unit exhibits exceptional seakeeping. Full operations are possible up to SS4; patrol missions can be
                sustained up to SS5, and with optimal headings and speeds, the vessel can withstand sea conditions up to
                SS6.</p>
              <dl class="product-accordion__specs">
                <div>
                  <dt>LOA:</dt>
                  <dd>63m</dd>
                </div>
                <div>
                  <dt>Breadth:</dt>
                  <dd>9.2m</dd>
                </div>
                <div>
                  <dt>Displacement:</dt>
                  <dd>700t</dd>
                </div>
                <div>
                  <dt>Draught (max.):</dt>
                  <dd>3.1m</dd>
                </div>
                <div>
                  <dt>Maximum speed(trial conditions):</dt>
                  <dd>30kn</dd>
                </div>
                <div>
                  <dt>Transfer speed:</dt>
                  <dd>15kn</dd>
                </div>
                <div>
                  <dt>Range (transfer speed):</dt>
                  <dd>&gt;1,500nm</dd>
                </div>
                <div>
                  <dt>Crew:</dt>
                  <dd>38 personnel</dd>
                </div>
                <div>
                  <dt>Endurance:</dt>
                  <dd>7 days</dd>
                </div>
              </dl>
            </div>
          </article>

          <article class="product-accordion" data-product-image="assets/images/acc03.png">
            <button class="product-accordion__head" type="button" aria-expanded="false">
              <span class="product-accordion__label">FCX15 Blue Sea Patrol Vessel</span>
              <span class="product-accordion__icon" aria-hidden="true"></span>
            </button>
            <div class="product-accordion__body" hidden>
              <p class="product-accordion__copy">A blue-water patrol vessel concept built for sustained maritime presence, surveillance, and security operations across extended areas of operation.</p>
              <dl class="product-accordion__specs">
                <div><dt>LOA:</dt><dd>85m</dd></div>
                <div><dt>Breadth:</dt><dd>13m</dd></div>
                <div><dt>Maximum speed:</dt><dd>28kn</dd></div>
                <div><dt>Range:</dt><dd>&gt;3,000nm</dd></div>
                <div><dt>Endurance:</dt><dd>14 days</dd></div>
              </dl>
            </div>
          </article>

          <article class="product-accordion" data-product-image="assets/images/acc04.png">
            <button class="product-accordion__head" type="button" aria-expanded="false">
              <span class="product-accordion__label">FCX20 Corvette</span>
              <span class="product-accordion__icon" aria-hidden="true"></span>
            </button>
            <div class="product-accordion__body" hidden>
              <p class="product-accordion__copy">A multi-role corvette configured for coastal defence, surface surveillance, escort operations, and modular mission systems integration.</p>
              <dl class="product-accordion__specs">
                <div><dt>LOA:</dt><dd>95m</dd></div>
                <div><dt>Displacement:</dt><dd>1,800t</dd></div>
                <div><dt>Maximum speed:</dt><dd>30kn</dd></div>
                <div><dt>Crew:</dt><dd>70 personnel</dd></div>
                <div><dt>Endurance:</dt><dd>21 days</dd></div>
              </dl>
            </div>
          </article>

          <article class="product-accordion" data-product-image="assets/images/acc05.png">
            <button class="product-accordion__head" type="button" aria-expanded="false">
              <span class="product-accordion__label">FCX30 Light Frigate</span>
              <span class="product-accordion__icon" aria-hidden="true"></span>
            </button>
            <div class="product-accordion__body" hidden>
              <p class="product-accordion__copy">A light frigate platform intended for extended fleet support, maritime security, command-and-control, and integrated weapons and sensor operations.</p>
              <dl class="product-accordion__specs">
                <div><dt>LOA:</dt><dd>110m</dd></div>
                <div><dt>Displacement:</dt><dd>3,000t</dd></div>
                <div><dt>Maximum speed:</dt><dd>29kn</dd></div>
                <div><dt>Range:</dt><dd>&gt;4,500nm</dd></div>
                <div><dt>Endurance:</dt><dd>30 days</dd></div>
              </dl>
            </div>
          </article>

          <article class="product-accordion" data-product-image="assets/images/acc06.png">
            <button class="product-accordion__head" type="button" aria-expanded="false">
              <span class="product-accordion__label">Oceanographic Vessel</span>
              <span class="product-accordion__icon" aria-hidden="true"></span>
            </button>
            <div class="product-accordion__body" hidden>
              <p class="product-accordion__copy">A specialist vessel for hydrographic survey, seabed mapping, maritime research, and underwater infrastructure support missions.</p>
              <dl class="product-accordion__specs">
                <div><dt>LOA:</dt><dd>75m</dd></div>
                <div><dt>Mission deck:</dt><dd>Modular</dd></div>
                <div><dt>Survey systems:</dt><dd>Integrated</dd></div>
                <div><dt>Crew:</dt><dd>42 personnel</dd></div>
                <div><dt>Endurance:</dt><dd>20 days</dd></div>
              </dl>
            </div>
          </article>

          <article class="product-accordion" data-product-image="assets/images/acc07.png">
            <button class="product-accordion__head" type="button" aria-expanded="false">
              <span class="product-accordion__label">LPD San Giorgio Class</span>
              <span class="product-accordion__icon" aria-hidden="true"></span>
            </button>
            <div class="product-accordion__body" hidden>
              <p class="product-accordion__copy">An amphibious support platform configured for landing operations, logistics movement, humanitarian support, and command coordination.</p>
              <dl class="product-accordion__specs">
                <div><dt>LOA:</dt><dd>133m</dd></div>
                <div><dt>Flight deck:</dt><dd>Helicopter capable</dd></div>
                <div><dt>Vehicle capacity:</dt><dd>Mission dependent</dd></div>
                <div><dt>Crew:</dt><dd>160 personnel</dd></div>
                <div><dt>Endurance:</dt><dd>30 days</dd></div>
              </dl>
            </div>
          </article>

          <article class="product-accordion" data-product-image="assets/images/acc08.png">
            <button class="product-accordion__head" type="button" aria-expanded="false">
              <span class="product-accordion__label">Offshore Service Vessel</span>
              <span class="product-accordion__icon" aria-hidden="true"></span>
            </button>
            <div class="product-accordion__body" hidden>
              <p class="product-accordion__copy">A support vessel designed for offshore logistics, platform assistance, equipment transfer, and maritime service operations in demanding sea states.</p>
              <dl class="product-accordion__specs">
                <div><dt>LOA:</dt><dd>70m</dd></div>
                <div><dt>Deck area:</dt><dd>Extended</dd></div>
                <div><dt>Maximum speed:</dt><dd>16kn</dd></div>
                <div><dt>Range:</dt><dd>&gt;2,500nm</dd></div>
                <div><dt>Endurance:</dt><dd>18 days</dd></div>
              </dl>
            </div>
          </article>
        </div>

        <div class="products-showcase__visual revealme" aria-hidden="true">
          <img class="products-showcase__ship" src="assets/images/acc02.png" alt="">

        </div>
      </div>
    </section>
  </main>

  <div class="services-footer-bg">
    <div class="services-footer-bg-overlay"></div>
    <?php include 'includes/footer.php'; ?>
