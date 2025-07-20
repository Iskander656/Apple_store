const toggleBtn = document.getElementById("toggleDark");
toggleBtn.addEventListener("click", function () {
  document.body.classList.toggle("bg-dark");
  document.body.classList.toggle("text-white");
});
