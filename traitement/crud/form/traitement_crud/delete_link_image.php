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
if (empty($_POST['delete_image'])){
    header("location:../../admin_film.php?message=unsuccessful_suppr");
    exit;   
}
$values=explode(",",$_POST['delete_image']);
$sql="DELETE FROM photo_film WHERE id_film=$values[1] AND ID_photo_film=$values[0]";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$sql="SELECT lien_photo FROM photo_film WHERE ID_photo_film=$values[0]";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$result = $stmt ->fetch();
unlink("EnWatch\asset\img\img_film/".$result['lien_photo']);


header("location:../../admin_film.php?message=successful_suppr");

?>