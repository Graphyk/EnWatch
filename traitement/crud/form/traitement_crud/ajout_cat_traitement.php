<?php
session_start();
if (isset($_SESSION["role"])){
    if ($_SESSION['role']<1){
        echo "<script src='../../../../asset\script/redirect.js'";
    }
}
else {
    echo "<script src='../../../../asset\script/redirect.js'";
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
$nom_cat=strtolower(htmlspecialchars(strip_tags($_POST['nom_cat'])));
$SQL="INSERT INTO categorie (nom_cat) VALUES (?)";
$stmt=$pdo -> prepare($SQL);
$stmt -> bindParam(1,$nom_cat);
$stmt -> execute();
header("location:../../admin_categorie.php")
?>
