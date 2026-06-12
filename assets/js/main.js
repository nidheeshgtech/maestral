const navToggle = document.querySelector(".navbar__toggle");
const navLinks = document.querySelectorAll(".navbar__link, .navbar__cta");
const siteHeader = document.querySelector(".site-header");
const heroBanner = document.querySelector(".hero-banner");
const heroVideo = document.querySelector(".hero-banner__video");

function setNavOpen(isOpen) {
  document.body.classList.toggle("nav-open", isOpen);
  navToggle?.setAttribute("aria-expanded", String(isOpen));
}

navToggle?.addEventListener("click", () => {
  setNavOpen(!document.body.classList.contains("nav-open"));
});

navLinks.forEach((link) => {
  link.addEventListener("click", () => setNavOpen(false));
});

window.addEventListener("resize", () => {
  if (window.matchMedia("(min-width: 1024px)").matches) {
    setNavOpen(false);
  }
});

document.addEventListener("keydown", (event) => {
  if (event.key === "Escape") {
    setNavOpen(false);
  }
});

document.addEventListener("click", (event) => {
  const target = event.target;

  if (
    document.body.classList.contains("nav-open") &&
    target instanceof Element &&
    !target.closest(".navbar")
  ) {
    setNavOpen(false);
  }
});

function updateHeaderState() {
  siteHeader?.classList.toggle("is-scrolled", window.scrollY > 8);
}

updateHeaderState();
window.addEventListener("scroll", updateHeaderState, { passive: true });

const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
let heroAnimationStarted = false;

function runHeroAnimation() {
  if (heroAnimationStarted || reduceMotion || !window.gsap) {
    return;
  }

  heroAnimationStarted = true;

  gsap.set(".hero-banner__title-line > span", { yPercent: 110, rotateX: 18 });
  gsap.set(".hero-banner__subtitle", { y: 18, autoAlpha: 0 });
  gsap.set(".hero-banner__partner-logo", { x: 42, y: 8, autoAlpha: 0, filter: "blur(10px)" });
  gsap.set(".text-accent", { scale: 0.4, autoAlpha: 0, transformOrigin: "center center" });

  const heroTimeline = gsap.timeline({
    delay: 0.18,
    defaults: {
      ease: "power3.out",
      duration: 1.05,
    },
  });

  heroTimeline
    .to(".hero-banner__title-line > span", {
      yPercent: 0,
      rotateX: 0,
      stagger: 0.16,
    })
    .to(".text-accent", {
      scale: 1,
      autoAlpha: 1,
      duration: 0.42,
      ease: "back.out(2.4)",
      stagger: 0.12,
    }, "-=0.48")
    .to(".hero-banner__subtitle", {
      y: 0,
      autoAlpha: 1,
      duration: 0.72,
    }, "-=0.38")
    .to(".hero-banner__partner-logo", {
      x: 0,
      y: 0,
      autoAlpha: 1,
      filter: "blur(0px)",
      duration: 0.9,
    }, "-=0.62");
}

function initHeroAnimation() {
  if (window.gsap) {
    runHeroAnimation();
    return;
  }

  let attempts = 0;
  const gsapCheck = window.setInterval(() => {
    attempts += 1;

    if (window.gsap || attempts > 20) {
      window.clearInterval(gsapCheck);
      runHeroAnimation();
    }
  }, 100);
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initHeroAnimation);
} else {
  initHeroAnimation();
}

heroVideo?.addEventListener("load", () => {
  heroBanner?.classList.add("is-video-ready");
});

function initRevealAnimations() {
  const revealItems = document.querySelectorAll(".revealme");

  if (!revealItems.length) {
    return;
  }

  if (reduceMotion || !window.gsap) {
    revealItems.forEach((item) => item.classList.add("is-revealed"));
    return;
  }

  gsap.set(revealItems, { y: 32, autoAlpha: 0 });

  const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) {
        return;
      }

      gsap.to(entry.target, {
        y: 0,
        autoAlpha: 1,
        duration: 0.9,
        ease: "power3.out",
      });

      entry.target.classList.add("is-revealed");
      observer.unobserve(entry.target);
    });
  }, {
    rootMargin: "0px 0px -12% 0px",
    threshold: 0.18,
  });

  revealItems.forEach((item) => revealObserver.observe(item));
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initRevealAnimations);
} else {
  initRevealAnimations();
}

function initTitleAnimation() {
  const titles = document.querySelectorAll(".title-animation");

  if (!titles.length || reduceMotion) {
    return;
  }

  if (!window.gsap || !window.ScrollTrigger || !window.SplitType) {
    console.warn("title-animation: requires GSAP, ScrollTrigger, and SplitType.");
    return;
  }

  gsap.registerPlugin(ScrollTrigger);

  titles.forEach((el) => {
    if (el.dataset.titleAnimationReady === "true") {
      return;
    }

    const split = new SplitType(el, { types: "chars" });
    const scrollConfig = {
      trigger: el,
      start: "top 80%",
      end: "top 20%",
      scrub: true,
      toggleActions: "play play reverse reverse",
    };

    el.dataset.titleAnimationReady = "true";

    gsap.fromTo(
      split.chars,
      { opacity: 0.4 },
      {
        opacity: 1,
        duration: 0.3,
        stagger: 0.02,
        ease: "none",
        scrollTrigger: scrollConfig,
      }
    );

    gsap.fromTo(
      el.querySelectorAll("span .char, strong .char"),
      { color: "#ffffff" },
      {
        color: "#fb5802",
        duration: 0.3,
        stagger: 0.02,
        ease: "none",
        scrollTrigger: scrollConfig,
      }
    );
  });

  ScrollTrigger.refresh();
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initTitleAnimation);
} else {
  initTitleAnimation();
}

function initNavalInnovation() {
  const section = document.querySelector(".js-parallax-section");

  if (!section) {
    return;
  }

  section.classList.add("is-loaded");

  if (reduceMotion) {
    return;
  }

  let currentX = 0;
  let currentY = 0;
  let targetX = 0;
  let targetY = 0;

  section.addEventListener("mousemove", (event) => {
    const rect = section.getBoundingClientRect();
    targetX = ((event.clientX - rect.left) / rect.width - 0.5) * 2;
    targetY = ((event.clientY - rect.top) / rect.height - 0.5) * 2;
  });

  section.addEventListener("mouseleave", () => {
    targetX = 0;
    targetY = 0;
  });

  function animateParallax() {
    currentX += (targetX - currentX) * 0.08;
    currentY += (targetY - currentY) * 0.08;

    section.style.setProperty("--parallax-x", `${currentX * -18}px`);
    section.style.setProperty("--parallax-y", `${currentY * -12}px`);
    section.style.setProperty("--grid-rotate-x", `${currentY * 1.8}deg`);
    section.style.setProperty("--grid-rotate-y", `${currentX * -2.4}deg`);
    section.style.setProperty("--asset-x", `${currentX * 10}px`);
    section.style.setProperty("--asset-y", `${currentY * 7}px`);

    requestAnimationFrame(animateParallax);
  }

  animateParallax();
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initNavalInnovation);
} else {
  initNavalInnovation();
}

function initStatsCounters() {
  const statsSection = document.querySelector(".js-stats-counter");

  if (!statsSection) {
    return;
  }

  const counters = statsSection.querySelectorAll(".js-count");
  let hasRun = false;

  function buildOdometer(counter) {
    const target = Number(counter.dataset.target || 0);
    const pad = Number(counter.dataset.pad || 0);
    const targetText = pad ? String(target).padStart(pad, "0") : String(target);

    counter.classList.add("odometer-counter");
    counter.setAttribute("aria-label", targetText);
    counter.innerHTML = "";

    [...targetText].forEach((digit, index) => {
      const digitValue = Number(digit);
      const digitWrap = document.createElement("span");
      const digitStack = document.createElement("span");

      digitWrap.className = "odometer-digit";
      digitStack.className = "odometer-digit__stack";
      digitStack.style.setProperty("--digit", String(digitValue));
      digitStack.style.setProperty("--delay", `${index * 120}ms`);

      for (let number = 0; number <= 9; number += 1) {
        const numberEl = document.createElement("span");
        numberEl.textContent = String(number);
        digitStack.append(numberEl);
      }

      digitWrap.append(digitStack);
      counter.append(digitWrap);
    });
  }

  function runOdometer(counter) {
    counter.classList.add("is-counting");
  }

  counters.forEach((counter) => {
    if (reduceMotion) {
      const target = Number(counter.dataset.target || 0);
      const pad = Number(counter.dataset.pad || 0);
      counter.textContent = pad ? String(target).padStart(pad, "0") : String(target);
      return;
    }

    buildOdometer(counter);
  });

  const observer = new IntersectionObserver((entries) => {
    if (hasRun || !entries.some((entry) => entry.isIntersecting)) {
      return;
    }

    hasRun = true;
    counters.forEach(runOdometer);
    observer.disconnect();
  }, {
    threshold: 0.28,
  });

  observer.observe(statsSection);
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initStatsCounters);
} else {
  initStatsCounters();
}

function initShipScroll() {
  const ship = document.querySelector(".stats-section__ship");

  if (!ship || reduceMotion || !window.gsap || !window.ScrollTrigger) {
    return;
  }

  gsap.registerPlugin(ScrollTrigger);

  const mm = gsap.matchMedia();

  mm.add("(min-width: 768px)", () => {
    gsap.fromTo(ship,
      { xPercent: -20 },
      {
        xPercent: 10,
        ease: "none",
        scrollTrigger: {
          trigger: ".stats-section",
          start: "top bottom+=20%",
          end: "bottom top",
          scrub: 1.5,
        },
      }
    );
  });
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initShipScroll);
} else {
  initShipScroll();
}

function initPageBannerParallax() {
  const banners = document.querySelectorAll(".js-page-banner");

  if (!banners.length || reduceMotion) {
    return;
  }

  let ticking = false;

  function updateBanners() {
    banners.forEach((banner) => {
      const rect = banner.getBoundingClientRect();
      const viewportHeight = window.innerHeight || document.documentElement.clientHeight;

      if (rect.bottom < 0 || rect.top > viewportHeight) {
        return;
      }

      const progress = (viewportHeight - rect.top) / (viewportHeight + rect.height);
      const clampedProgress = Math.min(1, Math.max(0, progress));
      const offset = (0.5 - clampedProgress) * 52;

      banner.style.setProperty("--banner-pattern-y", `${offset}px`);
    });

    ticking = false;
  }

  function requestUpdate() {
    if (ticking) {
      return;
    }

    ticking = true;
    requestAnimationFrame(updateBanners);
  }

  updateBanners();
  window.addEventListener("scroll", requestUpdate, { passive: true });
  window.addEventListener("resize", requestUpdate);
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initPageBannerParallax);
} else {
  initPageBannerParallax();
}

function collapseBody(body) {
  if (!body) return;
  const current = body.style.height === "auto" || body.style.height === ""
    ? body.scrollHeight + "px"
    : body.style.height;
  body.style.height = current;
  requestAnimationFrame(() => {
    body.style.height = "0";
  });
}

function expandBody(body) {
  if (!body) return;
  body.style.height = "0";
  requestAnimationFrame(() => {
    body.style.height = body.scrollHeight + "px";
    body.addEventListener("transitionend", () => {
      if (body.parentElement?.classList.contains("is-active")) {
        body.style.height = "auto";
      }
    }, { once: true });
  });
}

function initProductsAccordion() {
  const accordions = document.querySelectorAll(".js-products-accordion");

  accordions.forEach((accordion) => {
    const cards = Array.from(accordion.querySelectorAll(".product-accordion"));

    cards.forEach((card) => {
      const body = card.querySelector(".product-accordion__body");
      if (!body) return;

      // Wrap content so padding is inside the clip container
      const inner = document.createElement("div");
      inner.className = "product-accordion__body-inner";
      while (body.firstChild) inner.appendChild(body.firstChild);
      body.appendChild(inner);

      body.removeAttribute("hidden");
      body.style.height = card.classList.contains("is-active") ? "auto" : "0";
    });

    cards.forEach((card) => {
      const button = card.querySelector(".product-accordion__head");
      const body = card.querySelector(".product-accordion__body");

      if (!button || !body) return;

      button.addEventListener("click", () => {
        const shouldOpen = !card.classList.contains("is-active");

        cards.forEach((item) => {
          if (item === card) return;
          const itemButton = item.querySelector(".product-accordion__head");
          const itemBody = item.querySelector(".product-accordion__body");
          item.classList.remove("is-active");
          itemButton?.setAttribute("aria-expanded", "false");
          collapseBody(itemBody);
        });

        if (shouldOpen) {
          card.classList.add("is-active");
          button.setAttribute("aria-expanded", "true");
          expandBody(body);
        } else {
          card.classList.remove("is-active");
          button.setAttribute("aria-expanded", "false");
          collapseBody(body);
        }
      });
    });
  });
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initProductsAccordion);
} else {
  initProductsAccordion();
}

function initMediaFilters() {
  const grids = document.querySelectorAll("[data-media-grid]");

  grids.forEach((grid) => {
    const section = grid.closest(".media-listing");
    const tabs = Array.from(section?.querySelectorAll("[data-media-filter]") || []);
    const search = section?.querySelector("[data-media-search]");
    const empty = section?.querySelector("[data-media-empty]");
    const cards = Array.from(grid.querySelectorAll(".media-card"));
    let activeFilter = "all";

    function applyFilters() {
      const query = search ? search.value.trim().toLowerCase() : "";
      let visibleCount = 0;

      cards.forEach((card) => {
        const category = card.dataset.mediaCategory || "";
        const keywords = `${card.textContent || ""} ${card.dataset.mediaKeywords || ""}`.toLowerCase();
        const matchesFilter = activeFilter === "all" || category === activeFilter;
        const matchesSearch = !query || keywords.includes(query);
        const shouldShow = matchesFilter && matchesSearch;

        card.hidden = !shouldShow;

        if (shouldShow) {
          visibleCount += 1;
        }
      });

      if (empty) {
        empty.hidden = visibleCount > 0;
      }
    }

    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        activeFilter = tab.dataset.mediaFilter || "all";

        tabs.forEach((item) => {
          const isActive = item === tab;
          item.classList.toggle("is-active", isActive);
          item.setAttribute("aria-selected", String(isActive));
        });

        applyFilters();
      });
    });

    search?.addEventListener("input", applyFilters);
    applyFilters();
  });

  // mouse-tracking specular glow on the liquid glass tabs
  document.querySelectorAll(".media-listing__tab").forEach((el) => {
    el.addEventListener("pointermove", (e) => {
      const r = el.getBoundingClientRect();
      el.style.setProperty("--mx", ((e.clientX - r.left) / r.width) * 100 + "%");
      el.style.setProperty("--my", ((e.clientY - r.top) / r.height) * 100 + "%");
    });
  });
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initMediaFilters);
} else {
  initMediaFilters();
}
