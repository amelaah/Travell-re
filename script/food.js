document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll("select");

  dropdowns.forEach((dropdown) => {
    dropdown.addEventListener("click", function (event) {
      // Prevent default dropdown behavior and toggle display
      event.stopPropagation();
      this.classList.toggle("hidden");
    });
  });

  // Hide the dropdown when clicking outside
  document.addEventListener("click", function () {
    dropdowns.forEach((dropdown) => {
      dropdown.classList.add("hidden");
    });
  });
});
