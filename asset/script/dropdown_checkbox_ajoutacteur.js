const dropBtn1 = document.getElementById('dropdown1');
const dropBox1 = document.getElementById('dropbox1');
const dropBtn2 = document.getElementById('dropdown2');
const dropBox2 = document.getElementById('dropbox2');
const dropBtn3 = document.getElementById('dropdown3');
const dropBox3 = document.getElementById('dropbox3');


function droptoggle(dropbox){
    if (dropbox!=dropBox1){
        if (!dropBox1.className.includes("hidden")){
            dropBox1.classList.add("hidden");
        }
    }
    if (dropbox!=dropBox2){
        if (!dropBox2.className.includes("hidden")){
            dropBox2.classList.add("hidden");
        }
    }
    if (dropbox!=dropBox3){
        if (!dropBox3.className.includes("hidden")){
            dropBox3.classList.add("hidden");
        }
    }
    dropbox.classList.toggle('hidden');
}
dropBtn1.addEventListener('click',() =>{droptoggle(dropBox1);});
dropBtn2.addEventListener('click',() =>{droptoggle(dropBox2);});
dropBtn3.addEventListener('click',() =>{droptoggle(dropBox3);});