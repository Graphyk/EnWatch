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
if (isset($_POST['ids'])){
    $ids=explode(',',$_POST['ids']);
    $sql='DELETE FROM aime WHERE id_user=? AND id_film=?';
    $stmt=$pdo->prepare($sql);
    $stmt->bindParam(1,$ids[0]);
    $stmt->bindParam(2,$ids[1]);
    unset($_SESSION['fav'][array_search($ids[1],$_SESSION['fav'])]);
    $stmt->execute();
    header("location: ../content/film.php?id_film=$ids[1]");
}
?>