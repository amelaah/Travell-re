document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll("select");

  dropdowns.forEach((dropdown) => {
    dropdown.addEventListener("click", function (event) {
      event.stopPropagation();
      this.classList.toggle("hidden");
    });
  });

  document.addEventListener("click", function () {
    dropdowns.forEach((dropdown) => {
      dropdown.classList.add("hidden");
    });
  });
});
