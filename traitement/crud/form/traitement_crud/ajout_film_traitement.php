<!-- 
titre
sortie
synopsis
image_uploads
b_a
real_[id_real]
categorie_[id_categorie]
acteur_[act]-->
<?php
session_start();
if (isset($_SESSION["role"])){
    if ($_SESSION['role']<1){
        echo "<script src='../../asset\script/redirect.js'";
    }
}
else {
    echo "<script src='../../asset\script/redirect.js'";
}
$values=array();
if ($_POST['titre']==""){
    header("location:../ajout_film.php?error=no_title");
}
$values[]=htmlspecialchars(strip_tags($_POST['titre']));
if (!isset($_POST['sortie'])){
    header("location:../ajout_film.php?error=no_date");
}
if ($_POST['sortie']=="unknown"){
    $_POST['sortie']='Inconnue';
}
else{
    $_POST['sortie']=explode("-",$_POST['sortie'])[0];
}
$values[]=$_POST['sortie'];
$len_syn=strlen($_POST['synopsis']);
if ($len_syn==0 or $len_syn>511){
     header("location:../ajout_film.php?error=wrong_synopsis");
}
$values[]=$_POST['synopsis'];
$image_type=explode("/",$_FILES['image_uploads']['type'])[1];
$image_type_isok=False;
$accepted_type=["jpeg","webp","jpg","png"];
foreach ($accepted_type as $type){
    if ($image_type==$type){
        $image_type_isok=TRUE;
    }
}
if (!$image_type_isok){
    header("location:../ajout_film.php?error=wrong_image_type");
}
$image_name=uniqid().".".$image_type;
$values[]=$image_name;


if(!(move_uploaded_file($_FILES["image_uploads"]["tmp_name"],"C:/wamp64/www/EnWatch/asset/img/affiches/".$image_name))){
    header("location:../ajout_film.php?error=failed_upload");
}
if (!empty($_POST["b_a"])){
    $bande_annonce=explode("/",$_POST["b_a"]);
    $bande_annonce=explode('" title',$bande_annonce[4])[0];
    $values[]=$bande_annonce;
}
else{
    header("location:../ajout_film.php?error=no_b_a");
}

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

$stmt=$pdo->prepare("INSERT INTO film (nom,date_sorti,synopsis,affiche,bande_annonce) VALUES (?,?,?,?,?)");
$len_values=count($values);
for ($i=1;$len_values>=$i;$i++){
    $stmt->bindParam($i,$values[$i-1]);
    unset($values[0]);
}

$stmt->execute();
$stmt=$pdo->prepare("SELECT MAX(id_film) from film");
$stmt->execute();
$id_film=$stmt->fetch(PDO::FETCH_NUM,PDO::FETCH_ORI_NEXT);
$req=array();
if (isset($_POST['real'])){
    foreach($_POST['real'] as $id_real){
        $stmt=$pdo->prepare("INSERT INTO realise (id_realisateur,id_film) VALUES (?,?)");
        $stmt->bindParam(1,$id_real);
        $stmt->bindParam(2,$id_film[0]);
        $req[]=$stmt;
    }
}
if (isset($_POST['categorie'])){
    foreach($_POST['categorie'] as $id_cat){
        $stmt=$pdo->prepare("INSERT INTO possede (id_categorie,id_film) VALUES (?,?)");
        $stmt->bindParam(1,$id_cat);
        $stmt->bindParam(2,$id_film[0]);
        $req[]=$stmt;
    }
}
if (isset($_POST['acteur'])){
    foreach($_POST['acteur'] as $id_acteur){
        $stmt=$pdo->prepare("INSERT INTO a_un_role (id_acteur,id_film) VALUES (?,?)");
        $stmt->bindParam(1,$id_acteur);
        $stmt->bindParam(2,$id_film[0]);
        $req[]=$stmt;
    }
}
foreach ($req as $exe){
    $exe->execute();
}
?>