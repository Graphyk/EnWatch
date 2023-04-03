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
</head>
<?php
if (isset($_SESSION["role"])){
    if ($_SESSION['role']<1){
        echo "<script src='../../asset\script/redirect.js'";
    }
}
else {
    echo "<script src='../../asset\script/redirect.js'";
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
    $sql = "SELECT * FROM `categorie`";
    $cat = $pdo ->prepare($sql);
    $cat->execute();
    require_once('../../content/navbar.php');
?>

<div class='w-full overflow-auto'>
    <table class='mx-auto'>
        <tr>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>ID</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>nom</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>nombre d'utilisations</th>
        </tr>
        <?php
        while ($row = $cat->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)){
            $sql = "SELECT COUNT(*) FROM `film` NATURAL JOIN `possede` WHERE id_categorie=$row[0]";
            $stmt = $pdo ->prepare($sql);
            $stmt->execute();
            $stmt=$stmt->fetch(PDO::FETCH_NUM,PDO::FETCH_ORI_NEXT);
            $i=0;
            echo"
            <tr>";
            for ($i;$i<2;$i++){
                
                echo"
                <td class='px-10 py-5 max-w-[20vw] text-center border border-black border-solid'>$row[$i]</td>";
                }
            echo"
            <td class='px-10 py-5 max-w-[20vw] border text-center border-black border-solid'>$stmt[0]</td>";
            $last=$row[0];
        }  
        ?>
        <tr>
            <td colspan="3" class='px-10 py-5 border border-black border-solid text-center'>Ajouter un élément</td>
        </tr>
        <tr>
            <form action='form/traitement_crud/ajout_cat_traitement.php' method='POST'>
                <td class='px-10 py-5 border border-black border-solid text-center'><?php $last+=1;
                                                                                        echo "$last" ?></td>
                <td class='px-10 py-5 border border-black border-solid text-center'><input type='text' name='nom_cat' placeholder='Nom du film'></td>
                <td class='border border-black border-solid bg-green-200'><input type='submit' class='w-full h-[82px] hover:cursor-pointer inline-block' value='ajouter'></td>
            </form>
        </tr>
    </table>
</div>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="../../asset/script.js"></script>