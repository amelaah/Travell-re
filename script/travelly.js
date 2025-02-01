// navbar design kur scroll ma poshte

const header = document.querySelector("header");

window.addEventListener("scroll", function () {
  header.classList.toggle("sticky", window.scrollY > 0);
});

// responsive navbar

const toggleBtn = document.querySelector(".toggle_btn");
const toggleBtnIcon = document.querySelector(".toggle_btn i");
const dropDownMenu = document.querySelector(".dropdown_menu");
const menuItems = document.querySelectorAll(".dropdown_menu li");

window.onload = () => {
  dropDownMenu.classList.remove("open"); //e fsheh menun drop down kur behet faqja refresh
  // dropDownMenu.style.display = "none"
};

toggleBtn.onclick = function () {
  dropDownMenu.classList.toggle("open");
  const isOpen = dropDownMenu.classList.contains("open");

  menuItems.forEach((item) => {
    //kur nje 'li' (menu item) klikohet ne menu atehere ajo menu dropdown mbyllet
    item.addEventListener("click", () => {
      dropDownMenu.classList.remove("open");
      toggleBtnIcon.classList.replace("fa-xmark", "fa-bars");
    });
  });
  //  toggleBtnIcon.classList = isOpen ? "fa-solid fa-xmark" : "fa-solid fa-bars";
};

// e mbyll menu dropdown kur klikon ku do ne screen (jashta saj)
document.addEventListener("click", (event) => {
  if (
    !dropDownMenu.contains(event.target) &&
    !toggleBtn.contains(event.target)
  ) {
    dropDownMenu.style.display = "none"; // Hide menu
  }
});
