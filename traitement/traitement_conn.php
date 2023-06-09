<?php
include_once('fonction.php');
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
$response=connect_bdd($_POST['pseudo'],$_POST['mdp'],$pdo);
if ($response=="connected"){
    $_SESSION['connected']=TRUE;
    header("location:../index.php");
}
else{
    if ($response=="wrong_pass"){
        header("location:../content/connexion.php?error=wrong-pass");
    }
}
?>