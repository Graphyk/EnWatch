const parallaxElt=document.getElementById("parallax");
const header=document.getElementById("header");
var title=document.getElementsByClassName("title");
parallaxElt.style.height = '600px';
console.log(header.firstChild);
var title=Array.prototype.slice.call(title);
console.log(title);

window.addEventListener("scroll",()=>{parallax();})
function parallax(){
    if(parseInt(parallaxElt.style.height)>250){
        var distance = 600-(window.scrollY*1.5);
        const headerHeight = (window.scrollY/15);
        parallaxElt.style.height=distance.toString().concat("px");
        header.firstChild.style.paddingTop=headerHeight.toString().concat("px");
    }
    else{
        parallaxElt.style.backgroundColor="#33312E";
        parallaxElt.classList.remove("bg-[url(asset/img/parallax.jpeg)]")
        title.forEach(element => element.classList.remove('hidden'));
        title.forEach(element => element.classList.remove('text-transparent'));
        title.forEach(element => element.classList.add("transition-all"));
        title.forEach(element => element.classList.add("ease-in-out"));
        title.forEach(element => element.classList.add("duration-1000"));
        header.classList.remove('sticky');
        }
}

 
