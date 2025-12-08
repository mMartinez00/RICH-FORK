const intro = document.querySelector(".intro");
const outro = document.querySelector(".outro");
const rows = document.querySelectorAll(".main-content .row");

// MAIN OBSERVER → plays animations
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
      revealObserver.unobserve(entry.target); 
    }
  });
}, {
  threshold: 0.4
});

// APPLY INITIAL OBSERVERS
function startObserving() {
  revealObserver.observe(intro);
  revealObserver.observe(outro);
  rows.forEach(row => revealObserver.observe(row));
}

// RESET ALL ANIMATIONS
function resetAnimations() {
  intro.classList.remove("show");
  outro.classList.remove("show");
  rows.forEach(row => row.classList.remove("show"));

  // Restart the observing so animations can replay
  startObserving();
}

// Detect scroll back to top
window.addEventListener("scroll", () => {
  if (window.scrollY === 0) {
    resetAnimations();
  }
});

// Start everything initially
startObserving();
