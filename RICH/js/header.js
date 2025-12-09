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

function loadHeader() {
  return fetch("header.html")
    .then(res => res.text())
    .then(html => {
      document.getElementById("header-container").outerHTML = html;
      initHeaderScroll();
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
