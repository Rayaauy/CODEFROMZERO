// ===== Typing effect =====
const roles = ["Cyber Security Enthusiast", "Backend Developer", "Student", ""];
const typingEl = document.getElementById("typing");
let roleIndex = 0;
let charIndex = 0;

function typeRole() {
  if (!typingEl) return;

  if (charIndex < roles[roleIndex].length) {
    typingEl.textContent += roles[roleIndex][charIndex];
    charIndex++;
    setTimeout(typeRole, 90);
  } else {
    setTimeout(() => {
      typingEl.textContent = "";
      charIndex = 0;
      roleIndex = (roleIndex + 1) % roles.length;
      typeRole();
    }, 1300);
  }
}
typeRole();

// ===== Mobile nav toggle =====
const navToggle = document.getElementById("navToggle");
const navMenu = document.getElementById("navMenu");

if (navToggle && navMenu) {
  navToggle.addEventListener("click", () => {
    const isOpen = navMenu.classList.toggle("open");
    navToggle.setAttribute("aria-expanded", String(isOpen));
  });

  navMenu.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      navMenu.classList.remove("open");
      navToggle.setAttribute("aria-expanded", "false");
    });
  });
}

// ===== Scroll reveal =====
const revealEls = document.querySelectorAll(".reveal");

if ("IntersectionObserver" in window && revealEls.length) {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("in-view");
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.15 }
  );

  revealEls.forEach((el) => observer.observe(el));
} else {
  revealEls.forEach((el) => el.classList.add("in-view"));
}   