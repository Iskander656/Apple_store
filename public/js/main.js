const cards = document.querySelectorAll(".fade-in");
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("appear");
      }
    });
  },
  {
    threshold: 0.1,
  }
);

cards.forEach((card) => {
  observer.observe(card);
});
const toggleBtn = document.getElementById("toggleDark");
toggleBtn.addEventListener("click", function () {
  document.body.classList.toggle("bg-dark");
  document.body.classList.toggle("text-white");
});
