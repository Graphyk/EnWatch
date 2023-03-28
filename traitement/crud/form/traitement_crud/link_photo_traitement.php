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

$image_name=uniqid().".".explode("/",$_FILES['image_uploads']['type'])[1];
    

move_uploaded_file($_FILES["image_uploads"]["tmp_name"],"C:/wamp64/www/EnWatch/asset/img/acteurs/".$image_name);

$SQL="INSERT INTO photo_film (lien_photo,id_film) VALUES (?,?)";
$stmt=$pdo -> prepare($SQL);
$stmt -> bindParam(2,$_POST['select_film']);
$stmt -> bindParam(1,$image_name);
$stmt -> execute();
header("location:../../admin_film.php");