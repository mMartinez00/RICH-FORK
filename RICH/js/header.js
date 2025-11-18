const siteHeader = document.getElementById("site-header");
const bottom = document.querySelector(".bottom-header");
const bottomStart = bottom.offsetTop;

window.addEventListener("scroll", () => {
     if (window.scrollY >= bottomStart) {
     siteHeader.classList.add("scrolled");
     } else {
     siteHeader.classList.remove("scrolled");
     }
});