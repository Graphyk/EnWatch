<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link src='../asset/style/reset.css' rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Kodchasan:ital@0;1&family=MuseoModerno&family=Roboto&display=swap');
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php
if (isset($_SESSION["role"])){
    if ($_SESSION['role']<1){
        echo "<script src='../../../asset\script/redirect.js'";
    }
}
else {
    echo "<script src='../../../asset\script/redirect.js'";
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
    $sql = "SELECT * FROM `film` ORDER BY nom";
    $stmt = $pdo ->prepare($sql);
    $stmt->execute();
    if (isset($_POST['select_acteur'])){
        echo"$_POST[select_acteur]";
    }
?>
<div class='flex flex-col-reverse mx-auto max-w-[400px] text-center'>
    <form action="traitement_crud/link_photo_traitement.php" method="POST" id='form_photo' enctype="multipart/form-data" class='flex flex-col-reverse items-center'>
        <input type='submit'>
        <div class='relative'>
            <div class="preview w-[100px] md:w-[200px]  blur-sm" >
            </div>
            <input type="file" id="image_uploads" name="image_uploads" class='absolute h-full cursor-pointer rounded-full bottom-0 left-0 opacity-0 z-[99]' accept=".jpg, .jpeg, .png, .webp">
            <img src="../../../asset/img/logos/kisspng-white-house-johns-hopkins-university-website-servi-white-cross-5ab020e49e7627.0961720415214921966491.png" id='cross' alt="" class='z-0 cursor-pointer absolute left-[30px] md:top-[60px] top-[30px] md:left-[60px] w-[40px] md:w-[80px] h-[40px] md:h-[80px]'>
        </div>     
    </form>
    <select name='select_film' form='form_photo' >
            <?php
            if(isset($_GET['id_film'])){
                $sql = "SELECT * FROM `film` WHERE id_film=$_GET[id_film]";
                $film = $pdo->prepare($sql);
                $film -> execute();
                $film = $film->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);
                echo"
                <option value=$film[id_film]>$film[nom]</option>";
                while($film = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)){
                    if ($_GET['id_film']!=$film['id_film']){
                        echo"
                        <option value='$film[id_film]'>$film[nom]</option>";
                    }
                }
            }
            else{
                while($film = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)){
                    echo"
                        <option value='$film[id_film]'>$film[nom]</option>";
                }
            }
            ?>
    </select>
</div>

<script src='../../../asset/script/file_photoacteur.js'></script>