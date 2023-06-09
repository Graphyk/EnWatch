const dropdownBtn1 = document.getElementById("dropbtn1");
const dropdownMenu1 = document.getElementById("dropmenu1");
const dropdownBtn2 = document.getElementById("dropbtn2");
const dropdownMenu2 = document.getElementById("dropmenu2");
const dropdownBtn3 = document.getElementById("dropbtn3");
const dropdownMenu3 = document.getElementById("dropmenu3");
const burgerBtn = document.getElementById("OpenBtn");
const burgerMenu = document.getElementById("burgerMenu");
const hide = document.getElementById("cacher");
const show = document.getElementById("voirPlus");
const desc = document.getElementById("description")

function toggleNav(menu){
    
    menu.classList.toggle("translate-x-[100%]")
    menu.classList.toggle("hidden");
    
  }
function toggleDrop(menu){
    if (menu!=dropdownMenu1){
        if (!dropdownMenu1.className.includes('-translate-y-[1000%]')){
            dropdownMenu1.classList.toggle("-translate-y-[1000%]");   
        }
    }
    if (menu!=dropdownMenu2){
        if (!dropdownMenu2.className.includes('-translate-y-[1000%]')){
            dropdownMenu2.classList.toggle("-translate-y-[1000%]");
        }
    }
    if (menu!=dropdownMenu3){
        if (!dropdownMenu3.className.includes('-translate-y-[1000%]')){
            dropdownMenu3.classList.toggle("-translate-y-[1000%]");
        }
    }
    menu.classList.toggle("-translate-y-[1000%]");
}
function showMore(button,description){
    button.classList.toggle("hidden");
    description.classList.toggle("overflow-hidden");
    description.classList.toggle("h-auto");
}
dropdownBtn1.addEventListener("click", () => { toggleDrop(dropdownMenu1);});
dropdownBtn2.addEventListener("click", () => { toggleDrop(dropdownMenu2);});
dropdownBtn3.addEventListener("click", () => { toggleDrop(dropdownMenu3);});
burgerBtn.addEventListener("click", () => { toggleNav(burgerMenu);});
if (show != null){
show.addEventListener("click",() =>{showMore(show,desc);});
}
if (hide != null){
hide.addEventListener("click",() =>{showMore(show,desc);});
}