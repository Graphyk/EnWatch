<?php
session_start();
$host = '127.0.0.1';
$db   = 'enwatch';
$user = 'root';
$pass = '';
$port = "3306";
$charset = 'utf8mb4';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
try {
    $pdo = new \PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
require_once('fonction.php');
$ext=($_FILES['image_uploads']["type"]);
if ($ext!="image/jpg" and $ext!="image/png" and $ext!="image/jpeg"){
    header("location:../content/inscription.php?error=unvalid_format");
}
if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    header("location:../content/inscription.php?error=unvalid_email");
}
if ($_POST['pseudo']==''){
    header("location:../content/inscription.php?error=empty_pseudo");
}
if ($_POST['nom']==''){
    header("location:../content/inscription.php?error=empty_name");
}
if ($_POST['prenom']==''){
    header("location:../content/inscription.php?error=empty_firstname");
}
if (strlen($_POST['mdp'])<8){
    header("location:../content/inscription.php?error=short_pass");
}
if ($_POST['mdp']!=$_POST['verif_mdp']){
    header("location:../content/inscription.php?error=unmatching_pass");
}

$sql = 'SELECT email FROM utilisateurs WHERE email=?';
$stmt = $pdo ->prepare($sql);
$stmt -> bindParam(1,$_POST['email']);
$stmt->execute();
$not_in_bdd=$stmt->fetch();
if ($not_in_bdd==FALSE)
{
    $sql='INSERT INTO utilisateurs(nom,prenom_user,pseudo,mdp,email,avatar,banner,role) VALUES (?,?,?,?,?,?,?,?)';
    $stmt = $pdo->prepare($sql);
    $role=0;
    $avatar_name=uniqid().".".explode("/",$_FILES['image_uploads']['type'])[1];
    $banner="banniere_base.png";
    $password=password_hash($_POST['mdp'],PASSWORD_DEFAULT);
    move_uploaded_file($_FILES["image_uploads"]["tmp_name"],"C:/wamp64/www/EnWatch/asset/img/avatar/".$avatar_name);
    $stmt->bindParam(1,$_POST['email']);
    $stmt->bindParam(1,$_POST['nom']);
    $stmt->bindParam(2,$_POST['prenom']);
    $stmt->bindParam(3,$_POST['pseudo']);
    $stmt->bindParam(4,$password);
    $stmt->bindParam(5,$_POST['email']);
    $stmt->bindParam(6,$avatar_name);
    $stmt->bindParam(7,$banner);
    $stmt->bindParam(8,$role);
    $stmt -> execute();
    $_SESSION['connected']=TRUE;
    $_SESSION['pp']=$avatar_name;
    $_SESSION['pseudo']=$pseudo;
    header('location:../index.php');
}
else{
    header("location:../content/inscription.php?error=used_email");
}

?>
<!-- values:    image_uploads
                pseudo
                nom
                prenom
                mdp
                email
                verif_mdp -->
<!-- listes des erreurs:    unvalid_email
                            empty_name
                            empty_firstname
                            short_pass
                            unmatching_pass
                            used_email
                                -->