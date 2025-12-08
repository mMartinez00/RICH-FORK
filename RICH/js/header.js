function initHeaderScroll() {
  const siteHeader = document.getElementById("site-header");
  const bottom = document.querySelector(".bottom-header");

  if (!siteHeader || !bottom) {
    console.warn("Header not ready yet.");
    return;
  }

  let bottomStart = bottom.offsetTop;

  function onScroll() {
    // recalc if needed (dynamic layout)
    bottomStart = bottom.offsetTop;

    if (window.scrollY >= bottomStart) {
      siteHeader.classList.add("scrolled");
    } else {
      siteHeader.classList.remove("scrolled");
    }
  }

  window.addEventListener("scroll", onScroll);
  window.addEventListener("resize", onScroll);

  // run once immediately
  onScroll();
}

function loadHeader() {
  fetch("header.html")
    .then(res => res.text())
    .then(html => {
      document.getElementById("header-container").outerHTML = html;

      // IMPORTANT: only now does the header exist
      initHeaderScroll();
    });
}

// Load header every time page loads
loadHeader();

// Fix back-button cache restoring the page without re-running scripts
window.addEventListener("pageshow", (e) => {
  if (e.persisted) {
    loadHeader();
  }
});

window.addEventListener("load", () => {
  history.scrollRestoration = "manual";
  window.scrollTo(0, 0);
});
