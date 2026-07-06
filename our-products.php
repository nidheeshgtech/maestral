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
              <p class="product-accordion__copy">Ideal for busy coastal environments, the P50MR features a well-proven design with a number of units already built and in service. The ship delivers exceptional survivability, with the propulsion chain distributed across two compartments, ensuring at least 50% propulsion power if one engine room is flooded.</p>
              <dl class="product-accordion__specs">
                <div><dt>LOA:</dt><dd>51m</dd></div>
                <div><dt>Breadth:</dt><dd>9.5m</dd></div>
                <div><dt>Displacement:</dt><dd>480t</dd></div>
                <div><dt>Draught (max.):</dt><dd>&lt;3m</dd></div>
                <div><dt>Maximum speed:</dt><dd>21kn</dd></div>
                <div><dt>Transfer speed:</dt><dd>12kn</dd></div>
                <div><dt>Range (transfer speed):</dt><dd>&gt;2,000nm</dd></div>
                <div><dt>Crew:</dt><dd>40 personnel</dd></div>
                <div><dt>Endurance:</dt><dd>14 days</dd></div>
              </dl>
            </div>
          </article>

          <article class="product-accordion" data-product-image="assets/images/acc02.png">
            <button class="product-accordion__head" type="button" aria-expanded="false">
              <span class="product-accordion__label">FCX07 Offshore Patrol Vessel</span>
              <span class="product-accordion__icon" aria-hidden="true"></span>
            </button>
            <div class="product-accordion__body" hidden>
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
              <p class="product-accordion__copy">Designed for open-ocean missions, the FCX15 incorporates exceptional operational resilience. It retains its floatability, even with two adjacent compartments flooded, remains fully mobile when damage does not affect machinery rooms, and maintains electrical generation, even with two adjacent compartments flooded, provided neither contains the emergency generator.</p>
              <dl class="product-accordion__specs">
                <div><dt>LOA:</dt><dd>88m</dd></div>
                <div><dt>Breadth:</dt><dd>12.2m</dd></div>
                <div><dt>Displacement:</dt><dd>approx. 1,700t</dd></div>
                <div><dt>Draught (max.):</dt><dd>approx. 3.4m</dd></div>
                <div><dt>Maximum speed (trial conditions):</dt><dd>&gt;25kn</dd></div>
                <div><dt>Transfer speed:</dt><dd>14kn</dd></div>
                <div><dt>Range (transfer speed):</dt><dd>4,000nm</dd></div>
                <div><dt>Crew:</dt><dd>approx. 70 personnel</dd></div>
                <div><dt>Endurance:</dt><dd>20 days</dd></div>
              </dl>
            </div>
          </article>

          <article class="product-accordion" data-product-image="assets/images/acc04.png">
            <button class="product-accordion__head" type="button" aria-expanded="false">
              <span class="product-accordion__label">FCX20 Corvette</span>
              <span class="product-accordion__icon" aria-hidden="true"></span>
            </button>
            <div class="product-accordion__body" hidden>
              <p class="product-accordion__copy">The FCX20 offers flexible interoperability with other units, making it suitable for diverse missions. The vessel retains floatability with two adjacent compartments flooded, remains fully mobile with one generic compartment flooded, and continues to supply power to unit systems even when two adjacent compartments (not containing the emergency generator) are flooded.</p>
              <dl class="product-accordion__specs">
                <div><dt>LOA:</dt><dd>approx. 95m</dd></div>
                <div><dt>Breadth:</dt><dd>14.2m</dd></div>
                <div><dt>Displacement:</dt><dd>approx. 2,300t</dd></div>
                <div><dt>Draught (max.):</dt><dd>approx. 3.7m</dd></div>
                <div><dt>Maximum speed (trial conditions):</dt><dd>&gt;25kn</dd></div>
                <div><dt>Transfer speed:</dt><dd>14kn</dd></div>
                <div><dt>Range (transfer speed):</dt><dd>4,000nm</dd></div>
                <div><dt>Crew:</dt><dd>approx. 85 personnel</dd></div>
                <div><dt>Endurance:</dt><dd>15 days</dd></div>
              </dl>
            </div>
          </article>

          <article class="product-accordion" data-product-image="assets/images/acc05.png">
            <button class="product-accordion__head" type="button" aria-expanded="false">
              <span class="product-accordion__label">FCX30 Light Frigate</span>
              <span class="product-accordion__icon" aria-hidden="true"></span>
            </button>
            <div class="product-accordion__body" hidden>
              <p class="product-accordion__copy">Suitable for a wide range of mission profiles, the FCX30 features maximum survivability for its class. With a fully configurable combat system that can be tailored to customer requirements and discrete operational needs, the vessel is ready for any deployment.</p>
              <dl class="product-accordion__specs">
                <div><dt>LOA:</dt><dd>107m</dd></div>
                <div><dt>Breadth:</dt><dd>14.7m</dd></div>
                <div><dt>Displacement:</dt><dd>3,200t</dd></div>
                <div><dt>Draught (max.):</dt><dd>approx. 4m</dd></div>
                <div><dt>Maximum speed (trial conditions):</dt><dd>&gt;28kn</dd></div>
                <div><dt>Transfer speed:</dt><dd>15kn</dd></div>
                <div><dt>Range (transfer speed):</dt><dd>5,000nm</dd></div>
                <div><dt>Crew:</dt><dd>approx. 112 personnel</dd></div>
                <div><dt>Endurance:</dt><dd>21 days</dd></div>
              </dl>
            </div>
          </article>

          <article class="product-accordion" data-product-image="assets/images/acc06.png">
            <button class="product-accordion__head" type="button" aria-expanded="false">
              <span class="product-accordion__label">Oceanographic Vessel</span>
              <span class="product-accordion__icon" aria-hidden="true"></span>
            </button>
            <div class="product-accordion__body" hidden>
              <p class="product-accordion__copy">Designed with advanced operational capabilities and environmental sustainability in mind, the oceanographic vessel features sophisticated scientific instrumentation for hydrographic, oceanographic and geophysical surveys.</p>
              <dl class="product-accordion__specs">
                <div><dt>LOA:</dt><dd>105m</dd></div>
                <div><dt>Breadth:</dt><dd>18.8m</dd></div>
                <div><dt>Displacement:</dt><dd>approx. 4,200t</dd></div>
                <div><dt>Maximum speed (trial conditions):</dt><dd>14kn</dd></div>
                <div><dt>Range:</dt><dd>9,000nm</dd></div>
              </dl>
            </div>
          </article>

          <article class="product-accordion" data-product-image="assets/images/acc07.png">
            <button class="product-accordion__head" type="button" aria-expanded="false">
              <span class="product-accordion__label">LPD San Giorgio Class</span>
              <span class="product-accordion__icon" aria-hidden="true"></span>
            </button>
            <div class="product-accordion__body" hidden>
              <p class="product-accordion__copy">The Landing Platform Dock (LPD) &ldquo;Kalaat Beni Abbes&rdquo; class is a modern, off-the-shelf amphibious transport dock designed for mission versatility and flexibility. Suitable for a variety of operational settings, it can support even the most complex deployments.</p>
              <dl class="product-accordion__specs">
                <div><dt>LOA:</dt><dd>&gt;140m</dd></div>
                <div><dt>Breadth:</dt><dd>21.5m</dd></div>
                <div><dt>Displacement:</dt><dd>approx. 9,000t</dd></div>
                <div><dt>Maximum speed (trial conditions):</dt><dd>&gt;20kn</dd></div>
                <div><dt>Range:</dt><dd>7,000nm</dd></div>
              </dl>
            </div>
          </article>

          <article class="product-accordion" data-product-image="assets/images/acc08_.png">
            <button class="product-accordion__head" type="button" aria-expanded="false">
              <span class="product-accordion__label">Offshore Service Vessel</span>
              <span class="product-accordion__icon" aria-hidden="true"></span>
            </button>
            <div class="product-accordion__body" hidden>
              <p class="product-accordion__copy">We offer an extensive portfolio of high-end offshore support ships for diverse industries, including the oil &amp; gas sector and offshore wind farms, as well as specialised services such as cable laying.</p>
              <dl class="product-accordion__specs">
                <div><dt>LOA:</dt><dd>55m</dd></div>
                <div><dt>Breadth:</dt><dd>16m</dd></div>
                <div><dt>Displacement:</dt><dd>approx. &gt;1,500t</dd></div>
                <div><dt>Maximum speed (trial conditions):</dt><dd>12-16kn</dd></div>
                <div><dt>Range:</dt><dd>&gt;2,000nm</dd></div>
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
