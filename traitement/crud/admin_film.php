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
    $sql = "SELECT * FROM `film`";
    $stmt = $pdo ->prepare($sql);
    $stmt->execute();
    require_once('../../content/navbar.php');
if (!empty($_GET['message'])){
    if ($_GET['message']=='successful_suppr'){
        echo"
        <section class='flex flex-column z-20 bg-[#1CA4E1] text-white justify-center items-center gap-[0.4rem] w-[30%] min-h-[250px] fixed top-[20%] right-[35%] border border-solid border-black rounded-lg' id='modal'>
            <div class='flex flex-col items-center  justify-between mt-[20px] mb-[20px] h-[220px]'>
                <div class='flex flex-col text-2xl items-center'>
                    <span>Suppression réussie !</span>
                    <img src='../../asset/img/logos/success.svg' class='w-20 mt-2'>
                </div>
                <button class=' bg-[#454545] px-2 py-px rounded-md inline-block' id='closeModal'>Compris</button>
            </div>
        </section>
        <div class='fixed top-0 bottom-0 z-10 left-0 right-0 w-[100%] h-[100%] bg-black bg-opacity-[0.5] backdrop-filter backdrop-blur-[3px]' id='blurred_bg'></div>
        
        <script>
        const modal = document.getElementById('modal');
        const background = document.getElementById('blurred_bg');
        const closeBtn = document.getElementById('closeModal')

        function close(){
            modal.classList.add('hidden');
            background.classList.add('hidden');
        }

        closeBtn.addEventListener('click',()=>{close();})
        </script>";
    }
}

?>
<div class='w-full overflow-auto'>
    <div class='w-full rounded-xl'>
        <span class='py-5'>
            utilisez shift (<img src='../../asset/img/logos/shif.jpg' class='inline-block'>)en maintenant la molette pour défiler horizontalement
        </span>
    </div>
    <table class='mx-auto'>
        <tr>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>ID</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>nom</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>date_sorti</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>synopsis</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>affiche</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>Bande annonce</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>Realisateur</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>Catégories</th>    
            <th scope='col' class='px-16 py-5 max-w-[20vw] border border-black border-solid'>Acteurs</th>
            <th scope='col' class='px-20 py-5 max-w-[20vw] border border-black border-solid'>Image</th>         
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
            for ($i;$i<6;$i++){
                echo"
                <td class='"; if ($i!=3){echo "px-10 max-w-[20vw]";} else {echo"w-[200px]";}echo" py-5  border border-black border-solid'><div class='overflow-y-auto h-20'>$row[$i]</div></td>";
                }
                $i=0;
                echo"
                    <td class='py-5 border border-black border-solid text-center'><div class='flex flex-col'>";
                        
                while ($reals = $real->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)){
                    echo "
                    <div class='grid grid-cols-[100px_20px] text-left border border-solid border-transparent border-b-black'>
                        $reals[prenom_real] $reals[nom_real] 
                        <form class='relative w-10' method='POST' action='form/traitement_crud/delete_link_real.php'>
                            <img class='w-full' src='../../asset/img/logos/trash.png'>
                            <input type='submit' class='opacity-0 absolute w-full h-full top-0 left-0' name='delete_real' value='$reals[id_realisateur],$row[0]'>
                        </form>
                    </div>";
                    }
                    echo "
                    <br><a href='form/link_real.php?id_film=$row[0]' class='bg-green-200'>ajouter réalisateur</a></div></td>";
                    echo"
                    <td class='py-5 border border-black border-solid text-center'>
                        <div class='flex flex-col'>";

                while ($cats = $cat->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)){
                    echo "
                    <div class='grid grid-cols-[110px_20px] text-left border border-solid border-transparent border-b-black'>
                        $cats[nom_cat]
                        <form class='relative w-10' method='POST' action='form/traitement_crud/delete_link_cat.php'>
                            <img class='w-full' src='../../asset/img/logos/trash.png'>
                            <input type='submit' class='opacity-0 absolute w-full h-full top-0 left-0' name='delete_cat' value='$cats[id_categorie],$row[0]'>
                        </form>
                    </div>";
                    }
                    echo "<br><a href='form/link_cat.php?id_film=$row[0]' class='bg-green-200'>ajouter catégorie</a></td>";
                    echo"
                        </div>
                    <td class='py-5 border border-black border-solid text-center'>
                    <div class='flex flex-col'>";
                    
                while ($acteurs = $acteur->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)){
                    echo "
                    <div class='grid grid-cols-[140px_20px] text-left border border-solid border-transparent border-b-black'>
                        $acteurs[prenom_acteur] $acteurs[nom_acteur]
                        <form class='relative w-10' method='POST' action='form/traitement_crud/delete_link_acteur.php'>
                            <img class='w-full' src='../../asset/img/logos/trash.png'>
                            <input type='submit' class='opacity-0 absolute w-full h-full top-0 left-0' name='delete_acteur' value='$acteurs[id_acteur],$row[0]'>
                        </form>
                    </div>";
                    }
                    echo "<br><a href='form/link_acteur.php?id_film=$row[0]' class='bg-green-200'>ajouter acteur</a></div></td>
                <td class='py-5 border border-black border-solid text-center'> <div class='flex flex-col'>";
                while ($photos = $photo->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)){
                    echo "
                    <div class='grid grid-cols-[160px_20px] text-left border border-solid border-transparent border-b-black'>
                        $photos[lien_photo]
                        <form class='relative w-10' method='POST' action='form/traitement_crud/delete_link_image.php'>
                            <img class='w-full' src='../../asset/img/logos/trash.png'>
                            <input type='submit' class='opacity-0 absolute w-full h-full top-0 left-0' name='delete_image' value='$photos[ID_photo_film],$row[0]'>
                        </form>
                    </div>";
                    }
                    echo "<br><a href='form/link_photo.php?id_film=$row[0]' class='bg-green-200'>ajouter photo</a></div> </td>";
        }
        ?>
        <tr>
            <td colspan="10" class='border border-black border-solid text-center bg-green-200'><a href='form/ajout_film.php' class='h-full w-full '><button class='h-full w-full inline-block px-10 py-5'>Ajouter Film</button></a></td>
        </tr>
    </table>
</div>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="../../asset/script.js"></script>