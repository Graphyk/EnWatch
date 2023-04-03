<!-- 
email
entreprise
objet
message -->
<?php
if (!empty($_POST['email'])){
    $email=$_POST['email'];
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("location: ../content/contact.php?error=invalid_email");
    }
}
else{
    header("location:../content/contact.php?error=no_email");
}
if (!empty($_POST['entreprise'])){
    $envoyeur=$_POST['entreprise'];
}
else{
    header("location:../content/contact.php?error=no_entreprise");
}

if (!empty($_POST["objet"])){
    $objet=$_POST["objet"];
}
else{
    header("location:../content/contact.php?error=no_objet");
}

if (!empty($_POST["message"])){
    $message=$_POST["message"];
}
else{
    header("location:../content/contact.php?error=no_message");
}
if (mail("gueretlouis13@gmail.com", $objet,$message)){
    header("location:../content/contact.php?error=success");
}
else{
    header("location:../content/contact.php?error=failed_send");
}
?>