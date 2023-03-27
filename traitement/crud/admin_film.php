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
    $sql = "SELECT * FROM `film`";
    $stmt = $pdo ->prepare($sql);
    $stmt->execute();
    require_once('../../content/navbar.php');
?>
<div class='w-full overflow-auto'>
    <table class='mx-auto'>
        <tr>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>ID</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>nom</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>date_sorti</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>synopsis</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>affiche</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>Realisateur</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>Catégories</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>Acteurs</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>Image</th>
        </tr>
        <?php
        while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)){
            $i=0;
            $sql = "SELECT * FROM `categorie`
                    INNER JOIN possede ON categorie.id_categorie=possede.id_categorie
                    WHERE id_film='$row[0]'";
            $cat = $pdo ->prepare($sql);
            $cat->execute();

            $sql = "SELECT * FROM `realisateur`
            INNER JOIN realise ON realise.id_realisateur=realisateur.id_realisateur
            WHERE id_film='$row[0]'";
            $real = $pdo ->prepare($sql);
            $real->execute();

            $sql = "SELECT * FROM `acteurs`
            INNER JOIN a_un_role ON a_un_role.id_acteur=acteurs.id_acteur
            WHERE id_film='$row[0]'";
            $acteur = $pdo ->prepare($sql);
            $acteur->execute();

            $sql = "SELECT * FROM `photo_film`
            WHERE id_film='$row[0]'";
            $photo = $pdo ->prepare($sql);
            $photo->execute();
            echo"
            <tr>";
            for ($i;$i<5;$i++){
                echo"
                <td class='px-10 py-5 max-w-[20vw] border border-black border-solid'>$row[$i]</td>";
                }
            $i=0;
            echo"
                <td class='px-10 py-5 border border-black border-solid text-center'>";
            while ($reals = $real->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)){
                echo "$reals[prenom_real] $reals[nom_real]<br>";
                }
                echo "
                </td>";
                echo"
                <td class='px-10 py-5 border border-black border-solid text-center'>";
            while ($cats = $cat->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)){
                echo "$cats[nom_cat]<br>";
                }
                echo "<br><a href='form/link_cat.php?id_film=$row[0]' class='bg-green-200'>ajouter catégorie</a></td>";
                echo"
                <td class='px-10 py-5 border border-black border-solid text-center'>";
            while ($acteurs = $acteur->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)){
                echo "$acteurs[prenom_acteur] $acteurs[nom_acteur]<br>";
                }
                echo "<br><div class='bg-green-200'>ajouter acteur</div></td>
            <td class='px-10 py-5 border border-black border-solid text-center'>";
            while ($photos = $photo->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)){
                echo "$photo[lien_photo]<br>";
                }
                echo "<br><div class='bg-green-200'>ajouter photo</div> </td>";


        }
        ?>
        <tr>
            <td colspan="9" class='px-10 py-5 border border-black border-solid text-center'>Ajouter un élément</td>
        </tr>
    </table>
</div>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="../../asset/script.js"></script>