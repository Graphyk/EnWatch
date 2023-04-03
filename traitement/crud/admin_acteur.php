<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link src='../../asset/style/reset.css' rel="stylesheet">
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
    $sql = "SELECT * FROM `acteurs`";
    $acteur = $pdo ->prepare($sql);
    $acteur->execute();
    require_once('../../content/navbar.php');
?>

<div class='w-full overflow-auto'>
    <table class='mx-auto'>
        <tr>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>ID</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>nom</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>prénom</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>image</th>
        </tr>
        <?php
        while ($row = $acteur->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)){
            $sql = "SELECT COUNT(*) FROM `film` NATURAL JOIN `possede` WHERE id_categorie=$row[0]";
            $stmt = $pdo ->prepare($sql);
            $stmt->execute();
            $stmt=$stmt->fetch(PDO::FETCH_NUM,PDO::FETCH_ORI_NEXT);
            $i=0;
            echo"
            <tr>";
            for ($i;$i<4;$i++){
                
                echo"
                <td class='px-10 py-5 max-w-[20vw] text-center border border-black border-solid'>$row[$i]</td>";
                }
            $last=$row[0];
        }  
        ?>
        <tr>
            <td colspan="4" class='px-10 py-5 border border-black border-solid text-center'>Ajouter un élément</td>
        </tr>
            <form action='form/traitement_crud/ajout_acteur_traitement.php' enctype="multipart/form-data" method='POST'>
            <tr>
                <td class='px-10 py-5 border border-black border-solid text-center'><?php $last+=1;
                                                                                        echo "$last" ?></td>
                <td class='px-10 py-5 border border-black border-solid text-center'><input type='text' name='nom_acteur' placeholder="Nom de l'acteur"></td>
                <td class='px-10 py-5 border border-black border-solid text-center'><input type='text' name='prenom_acteur' placeholder="prénom de l'acteur"></td>
                <td class='px-10 py-5 border border-black border-solid text-center'>
                    <div class='relative'>
                        <div class="preview w-[100px] md:w-[200px]  blur-sm" >
                        </div>
                        <input type="file" id="image_uploads" name="image_uploads" class='absolute h-full cursor-pointer rounded-full bottom-0 left-0 opacity-0 z-[99]' accept=".jpg, .jpeg, .png .webp" multiple>
                        <img src="../../asset/img/logos/kisspng-white-house-johns-hopkins-university-website-servi-white-cross-5ab020e49e7627.0961720415214921966491.png" id='cross' alt="" class='z-0 cursor-pointer absolute left-[30px] md:top-[60px] top-[30px] md:left-[60px] w-[40px] md:w-[80px] h-[40px] md:h-[80px]'>
                    </div>
                    
                </td>
                </tr>
                <tr ><td colspan='4' class='border border-black border-solid bg-green-200'><input type='submit' class='w-full h-[82px] hover:cursor-pointer inline-block' value='ajouter'></td></tr>
            </form>
        
    </table>
</div>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="../../asset/script.js"></script>
    <script src="../../asset/script/file_photoacteur.js"></script>