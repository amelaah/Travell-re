// navbar design kur scroll ma poshte

const header = document.querySelector("header"); //e merr header

window.addEventListener("scroll", function () {
  header.classList.toggle("sticky", window.scrollY > 0); //shton ose hjek klasen sticky te header qe eshte, kur e ben scroll ma shum se 0
});

// responsive navbar

const toggleBtn = document.querySelector(".toggle_btn"); //merr toggle btn per me tregu ose hide menu
const toggleBtnIcon = document.querySelector(".toggle_btn i"); //merr toggle btn icon per mi ndryshu ikonat
const dropDownMenu = document.querySelector(".dropdown_menu"); //merr dropdown menu
const menuItems = document.querySelectorAll(".dropdown_menu li"); //merr items li qe jon mrena dropdown

window.onload = () => {
  dropDownMenu.classList.remove("open"); //e fsheh menun drop down kur behet faqja refresh
  // dropDownMenu.style.display = "none"
};

//kur behet click toggle btn e ndrron klasen open ne menun e dropdown. kontrollon a eshte qel menu tu kontrollu a e ka at klas open
toggleBtn.onclick = function () {
  dropDownMenu.classList.toggle("open");
  const isOpen = dropDownMenu.classList.contains("open");

  menuItems.forEach((item) => {
    //kur nje 'li' (menu item) klikohet ne menu atehere ajo menu dropdown mbyllet
    item.addEventListener("click", () => {
      dropDownMenu.classList.remove("open");
      // toggleBtnIcon.classList.replace("fa-xmark", "fa-bars");  slun naj rol si ke si ske :p
    });
  });
};
// dropdown menu - displayyyss
document.addEventListener("DOMContentLoaded", () => {
  const dropDownMenu = document.querySelector(".dropdown_menu");
  const toggleBtn = document.querySelector(".toggle_btn");

  dropDownMenu.style.display = "none"; //e fsheh dropdown kur behet faqja load

  //kur klikon ne buton, shfaqet dropdown
  toggleBtn.addEventListener("click", (event) => {
    //me display style kontrollon se a eshte dropdown i fshehur apo aktiv
    if (
      dropDownMenu.style.display === "none" ||
      dropDownMenu.classList.contains("active")
    ) {
      dropDownMenu.style.display = "block"; // del dropdown
      dropDownMenu.classList.add("active"); // shton klasen active
    } else {
      dropDownMenu.style.display = "none"; // fsheh dropdown
      dropDownMenu.classList.remove("active"); // hjek klasen active
    }

    event.stopPropagation(); //ndalon ngjarjen (psh nje klikim) me ndiku ne elementet jashte
  });

  //e mbyll dropdown kur klikon tjeter kun neper page
  document.addEventListener("click", (event) => {
    if (
      !dropDownMenu.contains(event.target) && // kontrollon mos click eshte jashte dropdown menus
      !toggleBtn.contains(event.target) //kontrollon mos ajo eshte jashte toggle button
    ) {
      dropDownMenu.style.display = "none";
      dropDownMenu.classList.remove("active");
    }
  });
  //nuk e lejon dropdown mu mshel kur klikon brenda tij
  dropDownMenu.addEventListener("click", (event) => {
    event.stopPropagation();
  });
});