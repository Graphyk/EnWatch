<?php
function connect_bdd($pseudo,$password,$bdd)
{

    $sql = "SELECT * FROM `utilisateurs` WHERE pseudo=? LIMIT 1";
    $stmt = $bdd ->prepare($sql);
    $stmt -> bindParam(1,$pseudo);
    $stmt->execute();
    $pass_in_bdd= $stmt->fetch();

    //$ pass_in_bdd: mot de passe lié à l'email dans la bdd
    // l'utilisateur est dans la BDD
   
    if (password_verify($password,$pass_in_bdd['mdp']))
    {
        // l'utilisateur a rentré le bon mot de passe et se connecte
        $_SESSION['id_user']=$pass_in_bdd['id_user'];
        $_SESSION['email']=$pass_in_bdd['email'];
        $_SESSION['pp']=$pass_in_bdd["avatar"];
        $_SESSION['pseudo']=$pass_in_bdd["pseudo"];
        $_SESSION['role']=$pass_in_bdd["role"];
        return "connected";
    }
    else    
    {
        // l'utilisateur n'as pas rentré le bon mot de passe
        return "wrong_pass";
    }
}
?>