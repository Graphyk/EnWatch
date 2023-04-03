httpRequest = new XMLHttpRequest();
httpRequest.onreadystatechange = like;
httpRequest.open('POST','http://localhost/enwatch/content/film.php',true);
httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
httpRequest.send();
var form = document.getElementById("like");

function like(){
    if (httpRequest.readyState === XMLHttpRequest.DONE){
        if (httpRequest.status === 200){
            console.log(httpRequest.responseText);
        }
    }
}

form.addEventListener("submit",like())