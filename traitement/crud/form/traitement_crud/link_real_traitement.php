<?php 
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
    $sql = "SELECT * FROM `realise` WHERE id_film=$_POST[select_film] AND id_realisateur=$_POST[select_acteur]";
    $stmt = $pdo ->prepare($sql);
    $stmt->execute();
    $stmt=$stmt->fetch(PDO::FETCH_ASSOC,PDO::FETCH_ORI_NEXT);
    if (!$stmt) {
        $sql="INSERT INTO realise(id_realisateur,id_film) VALUES (?,?)";
        $stmt=$pdo->prepare($sql);
        $stmt->bindParam(1,$_POST['select_acteur']);
        $stmt->bindParam(2,$_POST['select_film']);
        $stmt->execute();
        header("location:../../admin_film.php"); 
    }