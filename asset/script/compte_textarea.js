const textarea = document.getElementById("textarea");
var compteurBox = document.getElementById("compteur");
compteurBox.innerHTML='511';
var boxValue=511-textarea.value.length;

function compteur(){
    boxValue=511-textarea.value.length;
    console.log(boxValue);
    compteurBox.innerHTML=boxValue;
    if (boxValue<0){
            compteurBox.classList.add("text-red-600")
    }
    if (boxValue>0){
        compteurBox.classList.remove("text-red-600")
    }
}



textarea.addEventListener("keyup",() => {compteur();})