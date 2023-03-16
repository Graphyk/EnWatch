const dropdownBtn1 = document.getElementById("dropbtn1");
const dropdownMenu1 = document.getElementById("dropmenu1");
const dropdownBtn2 = document.getElementById("dropbtn2");
const dropdownMenu2 = document.getElementById("dropmenu2");
const dropdownBtn3 = document.getElementById("dropbtn3");
const dropdownMenu3 = document.getElementById("dropmenu3");
const burgerBtn = document.getElementById("OpenBtn");
const burgerMenu = document.getElementById("burgerMenu");

function toggleNav(menu){
    menu.classList.toggle("-z-10");
  }
dropdownBtn1.addEventListener("click", () => { toggleNav(dropdownMenu1);});
dropdownBtn2.addEventListener("click", () => { toggleNav(dropdownMenu2);});
dropdownBtn3.addEventListener("click", () => { toggleNav(dropdownMenu3);});
burgerBtn.addEventListener("click", () => { toggleNav(burgerMenu);});