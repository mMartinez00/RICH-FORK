function initHeaderScroll() {
  const siteHeader = document.getElementById("site-header");
  const bottom = document.querySelector(".bottom-header");

  if (!siteHeader || !bottom) {
    console.warn("Header not ready yet.");
    return;
  }

  let bottomStart = bottom.offsetTop;

  function onScroll() {
    bottomStart = bottom.offsetTop;

    if (window.scrollY >= bottomStart) {
      siteHeader.classList.add("scrolled");
    } else {
      siteHeader.classList.remove("scrolled");
    }
  }

  window.addEventListener("scroll", onScroll);
  window.addEventListener("resize", onScroll);
  onScroll();
}

/* -----------------------------------
   MOBILE MENU INIT FUNCTION
----------------------------------- */
function initMobileMenu() {
  const menu = document.getElementById('mobile-menu');
  const overlay = document.getElementById('mobile-menu-overlay');
  const hamburger = document.getElementById('hamburger-icon');
  const closeBtn = document.getElementById('close-menu');

  if (!menu || !overlay || !hamburger || !closeBtn) {
    console.warn("Mobile menu elements not found yet.");
    return;
  }

  // OPEN MENU
  hamburger.addEventListener('click', () => {
    menu.classList.add('open');
    overlay.classList.add('visible');
    document.body.style.overflow = "hidden";
  });

  // CLOSE MENU
  function closeMenu() {
    menu.classList.remove('open');
    overlay.classList.remove('visible');
    document.body.style.overflow = "";
  }

  closeBtn.addEventListener('click', closeMenu);
  overlay.addEventListener('click', closeMenu);

  // SUBMENU TOGGLES
  document.querySelectorAll('.submenu-toggle').forEach(toggle => {
    toggle.addEventListener('click', e => {
      e.preventDefault();
      const parent = toggle.parentElement;
      parent.classList.toggle('open');
    });
  });
}

/* -----------------------------------
   LOAD HEADER
----------------------------------- */
function loadHeader() {
  return fetch("header.html")
    .then(res => {
      if (!res.ok) {
        throw new Error(`HTTP error! status: ${res.status}`);
      }
      return res.text();
    })
    .then(html => {
      const container = document.getElementById("header-container");
      if (container) {
        container.outerHTML = html;
        initHeaderScroll();
        initMobileMenu();
      }
    })
    .catch(error => {
      console.error("Error loading header:", error);
      // Don't break the page if header fails to load
      const container = document.getElementById("header-container");
      if (container) {
        container.innerHTML = "<p>Navigation unavailable</p>";
      }
    });
}

window.addEventListener("pageshow", (e) => {
  if (e.persisted) {
    loadHeader();
  }
});

window.addEventListener("load", () => {
  history.scrollRestoration = "manual";
  window.scrollTo(0, 0);
});

// Make sure header loads before body
loadHeader().then(() => {
  document.body.classList.add("loaded");
});
