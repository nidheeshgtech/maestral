<?php
$page_title = 'Contact Us | Maestral';
$body_class = 'about-page contact-page';
include 'includes/header.php';
?>

<main class="site-shell" id="main">
  <section class="about-hero about-section page-banner js-page-banner" aria-label="Contact Us">
    <div class="about-hero__content container">
      <a class="about-hero__back revealme" href="index.php">
        <span class="about-hero__back-icon" aria-hidden="true">
          <svg width="18" height="14" viewBox="0 0 18 14" fill="none" focusable="false">
            <path d="M7.4 1L1 7M1 7L7.4 13M1 7H17" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </span>
        <span>Go Back</span>
      </a>
      <h1 class="about-title revealme">Contact Us<span class="text-accent">.</span></h1>
      <p class="about-hero__subtitle revealme">Connect with MAESTRAL for advanced naval solutions and partnership
        enquiries</p>
    </div>
  </section>

  <section class="contact-section" aria-label="Get in touch">
    <div class="contact-panel container revealme">
      <div class="contact-panel__info">
        <h2 class="contact-panel__title">Get in touch<span class="text-accent">.</span></h2>

        <div class="contact-presence">
          <p class="contact-presence__label">[Our Presence]</p>
          <a class="contact-presence__item" href="#">
            <span>21<sup>st</sup> Floor Aldar HQ Building <br /> Al Rahah - RBW11 - Abu Dhabi</span>
            <span class="contact-presence__arrow" aria-hidden="true">↗</span>
          </a>
        </div>
      </div>

      <form class="contact-form" action="#" aria-label="Contact form">
        <div class="contact-field">
          <label for="contact-first-name">First Name</label>
          <input id="contact-first-name" name="first-name" type="text" placeholder="John">
        </div>
        <div class="contact-field">
          <label for="contact-last-name">Last Name</label>
          <input id="contact-last-name" name="last-name" type="text" placeholder="Doe">
        </div>
        <div class="contact-field">
          <label for="contact-email">Email Address</label>
          <input id="contact-email" name="email" type="email" placeholder="example@gmail.com">
        </div>
        <div class="contact-field">
          <label for="contact-message">Message</label>
          <textarea id="contact-message" name="message" placeholder="Write your message here"></textarea>
        </div>
        <button class="btn btn--orange" type="submit">
          <span>Submit</span>
          <span class="btn__arrow" aria-hidden="true">
            <svg width="18" height="12" viewBox="0 0 18 12" fill="none" focusable="false">
              <path d="M1 6H16M16 6L11 1M16 6L11 11" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </span>
        </button>
      </form>
    </div>
  </section>
</main>

<div class="services-footer-bg">
  <div class="services-footer-bg-overlay"></div>
  <?php include 'includes/footer.php'; ?>