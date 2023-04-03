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
$sql="SELECT * FROM film";
$stmt=$pdo -> prepare($sql);
$stmt -> execute();
?>
<!DOCTYPE html>
<html lang="en">

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
    require_once('navbar.php');
?>

<body class='bg-[#33312E]'>
    <div class='flex flex-col gap-[10px] mt-[20px] '>
        <div class=' h-[100px] md:h-[200px] lg:h-[280px] overflow-hidden mx-auto'>
            <div class='flex flex-row gap-[10px] md:gap-[20px]'>
                <?php
                $i=0;
                while (($i<5) and ($row = $stmt->fetch(PDO::FETCH_NUM,PDO::FETCH_ORI_ABS,$i))){
                        echo
                        "<a href='film.php?id_film=$row[0]' class='h-[100px] md:h-[200px] lg:h-[250px] overflow-hidden'>
                                <img src='../asset/img/affiches/$row[4]' class='w-[75px] md:w-[150px] lg:w-[200px]'>
                        </a>";
                        $i+=1;
                }
                ?>
            </div>
        </div>
        <div class=' h-[100px] md:h-[200px] lg:h-[280px] overflow-hidden mx-auto'>
            <div class='flex flex-row gap-[10px] md:gap-[20px]'>
                <?php
                while (($i<10) and ($row = $stmt->fetch(PDO::FETCH_NUM,PDO::FETCH_ORI_ABS,$i))){
                        echo
                        "<a href='film.php?id_film=$row[0]' class='h-[100px] md:h-[200px] lg:h-[250px] overflow-hidden'>
                                <img src='../asset/img/affiches/$row[4]' class='w-[75px] md:w-[150px] lg:w-[200px]'>
                        </a>";
                        $i+=1;
                }
                ?>
            </div>
        </div>
        <div class=' h-[100px] md:h-[200px] lg:h-[280px] overflow-hidden mx-auto'>
            <div class='flex flex-row gap-[10px] md:gap-[20px]'>
            <?php
                while (($i<15) and ($row = $stmt->fetch(PDO::FETCH_NUM,PDO::FETCH_ORI_ABS,$i))){
                        echo
                        "<a href='film.php?id_film=$row[0]' class='h-[100px] md:h-[200px] lg:h-[250px] overflow-hidden'>
                                <img src='../asset/img/affiches/$row[4]' class='w-[75px] md:w-[150px] lg:w-[200px]'>
                        </a>";
                        $i+=1;
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    require_once('footer.php');
?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="../asset/script.js"></script>
</body>

</html>