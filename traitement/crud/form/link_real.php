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
    <form action="traitement_crud/link_real_traitement.php" method="POST" id='form_acteur'>
        <input type='submit'>
    </form>


    <select name='select_acteur' form='form_acteur'>
    <?php
    $sql = "SELECT * FROM `realisateur` ORDER BY prenom_real";
    $acteur = $pdo->prepare($sql);
    $acteur -> execute();  
        while($acteurs = $acteur->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)){
            echo"
                <option value='$acteurs[id_realisateur]'>$acteurs[prenom_real] $acteurs[nom_real]</option>";
        }
            ?>
    </select>
    <select name='select_film' form='form_acteur'>
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