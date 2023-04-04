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
$ids=explode(",",$_POST["id"]);
var_dump($_POST['id'],$_POST['comm']);
if (empty($_POST['comm'])){
    header('location:../content/film.php?id_film='.$ids[1]);
}
else{
    if (strlen($_POST['comm'])>511){
        header('location:../content/film.php?id_film='.$ids[1]);
    }
    $sql = 'INSERT INTO commentaire (id_user,id_film,contenu) VALUES (?,?,?)';
    $stmt=$pdo->prepare($sql);
    $stmt->bindParam(1,$ids[0]);
    $stmt->bindParam(2,$ids[1]);
    $stmt->bindParam(3,$_POST['comm']);
    $stmt->execute();
    header('location: ../content/film.php?id_film='.$ids[1]);
}
?>