document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll("select"); //i ben select tgjitha elementet dropdown

  dropdowns.forEach((dropdown) => {
    //kur klikon mbi select e hap dropdownin te parazgjedhur te shfletuesit
    dropdown.addEventListener("click", function (event) {
      event.stopPropagation(); //parandalon perhapjen e ngjarjes ne page
      this.classList.toggle("hidden"); //
    });
  });

  //kur klikon tjeter kun ne page i fsheh dropdowns
  document.addEventListener("click", function () {
    dropdowns.forEach((dropdown) => {
      dropdown.classList.add("hidden");
    });
  });
});
