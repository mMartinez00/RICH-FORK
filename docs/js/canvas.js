const canvas = document.getElementById("bg-canvas");
const ctx = canvas.getContext("2d");

let stars = [];
let time = 0;
const STAR_COUNT = 140;
const dpr = window.devicePixelRatio || 1;

function resizeCanvas() {
  const rect = canvas.parentElement.getBoundingClientRect();

  canvas.width = rect.width * dpr;
  canvas.height = rect.height * dpr;

  canvas.style.width = rect.width + "px";
  canvas.style.height = rect.height + "px";

  ctx.setTransform(dpr, 0, 0, dpr, 0, 0);

  createStars(rect.width, rect.height);
}

function createStars(width, height) {
  stars = [];   

  for (let i = 0; i < STAR_COUNT; i++) {
    stars.push({
      x: Math.random() * width,
      y: Math.random() * height,
      radius: Math.random() * 2 + 0.4,
      speed: Math.random() * 0.2 + 0.03,

      // alpha: Math.random() * 0.5 + 0.5
      // Twinkle properties
      baseAlpha: Math.random() * 0.5 + 0.4,   // baseline brightness
      twinkleSpeed: Math.random() * 0.02 + 0.01,
      twinkleOffset: Math.random() * Math.PI * 2
    });
  }
}

function drawStars() {
  const width = canvas.width / dpr;
  const height = canvas.height / dpr;

  ctx.clearRect(0, 0, width, height);

  time += 1;

  for (const star of stars) {
    const twinkle = Math.sin(time * star.twinkleSpeed + star.twinkleOffset) * 0.3;

    const alpha = Math.min(1, Math.max(0.2, star.baseAlpha + twinkle))

    // Glow
    ctx.shadowBlur = 6;
    ctx.shadowColor = "rgba(255,255,255,0.5)";

    ctx.beginPath();
    ctx.arc(star.x, star.y, star.radius, 0, Math.PI * 2);
    ctx.fillStyle = `rgba(255, 255, 255, ${alpha})`;
    ctx.fill();

    // Movement
    star.x -= star.speed;

    if (star.x < -2) {
      star.x = width + 2;
      star.y = Math.random() * height;
    }
  }

  requestAnimationFrame(drawStars);
}

resizeCanvas();
drawStars();

window.addEventListener("resize", resizeCanvas);