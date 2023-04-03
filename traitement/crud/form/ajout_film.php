<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link src='../../../asset/style/reset.css' rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Kodchasan:ital@0;1&family=MuseoModerno&family=Roboto&display=swap');
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
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
$acteurs=$pdo->prepare('SELECT * FROM acteurs');
$acteurs->execute();
$reals=$pdo->prepare('SELECT * FROM realisateur');
$reals->execute();
$cats=$pdo->prepare('SELECT * FROM categorie');
$cats->execute();
?>
<form method='post' enctype="multipart/form-data" action="traitement_crud/ajout_film_traitement.php">
    <table class='mx-auto'>
        <tr>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>ID</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>nom</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>date_sorti</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>synopsis</th>
            <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid'>affiche</th>
        </tr>
        <tr>
            <td class='px-10 py-5 max-w-[20vw] border border-black border-solid'>
                Auto
            </td>
            <td class='px-10 py-5 max-w-[20vw] border border-black border-solid'>
                <input type='text' name='titre'>
            </td>
            <td class='px-10 py-5 max-w-[20vw] border border-black border-solid'>
                <div class='flex flex-col'>
                    <input type='date' name='sortie'>
                    <div>
                        Non connue ?
                        <input type='checkbox' name='sortie' value='unknown'>
                    </div>
                </div>
            </td>
            <td class='px-10 py-5 max-w-[20vw] border border-black border-solid'>
                <input type='textarea' name='synopsis' class='border border-black border-solid'>
            </td>
            <td class='px-10 py-5 max-w-[20vw] border border-black border-solid'>
                <div class='relative'>
                    <div class="preview w-[100px] md:w-[200px] blur-sm" >
                    </div>
                    <input type="file" id="image_uploads" name="image_uploads" class='absolute h-full w-full cursor-pointer rounded-full bottom-0 left-0 opacity-0 z-[99]' accept="image/jpg, image/jpeg, image/png, image/webp">
                    <img src="../../../asset/img/logos/kisspng-white-house-johns-hopkins-university-website-servi-white-cross-5ab020e49e7627.0961720415214921966491.png" id='cross' alt="" class='z-0 cursor-pointer absolute left-[30px] md:top-[60px] top-[30px] md:left-[60px] w-[40px] md:w-[80px] h-[40px] md:h-[80px]'>
                </div>
            </td>
        </table>
        <table class='mx-auto'>
            <tr>
                <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid border-t-transparent'>Bande_annonce <br>(clic droit+intégrer la vidéo sur youtube)</th>
                <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid border-t-transparent'>Realisateur</th>
                <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid border-t-transparent'>Catégories</th>
                <th scope='col' class='px-10 py-5 max-w-[20vw] border border-black border-solid border-t-transparent'>Acteurs</th>
            </tr>
            <td class='px-10 py-5 max-w-[20vw] border border-black border-solid'>
                <input type='text' name='b_a'>
            </td>
            <td class='px-10 py-5 max-w-[20vw] border border-black border-solid'>
                <div class='relative'>
                    <div class='w-[200px] text-center border border-solid border-black hover:cursor-pointer' id='dropdown1'>
                        Selectionnez les option
                    </div>
                    <div class='hidden absolute -bottom-[400px] w-[200px] h-[400px] overflow-auto flex flex-col bg-white border border-solid border-black border-t-transparent' id='dropbox1'>
                        <?php
                    foreach($reals->fetchAll() as $real){
                        echo"
                        <div>
                            <input type='checkbox' value='$real[id_realisateur]' name='real[]'>
                            $real[prenom_real] $real[nom_real]
                        </div>
                        ";
                    }
                        ?>
                    </div>
                </div>
            </td>
            <td class='px-10 py-5 max-w-[20vw] border border-black border-solid'>
                <div class='relative'>
                    <div class='w-[200px] text-center border border-solid border-black hover:cursor-pointer' id='dropdown2'>
                        Selectionnez les option
                    </div>
                    <div class='hidden absolute -bottom-[400px] w-[200px] h-[400px] overflow-auto flex flex-col bg-white border border-solid border-black border-t-transparent' id='dropbox2'>
                        <?php
                    foreach($cats->fetchAll() as $cat){
                        echo"
                        <div>
                            <input type='checkbox' value='$cat[id_categorie]' name='categorie[]'>
                            $cat[nom_cat]
                        </div>
                        ";
                    }
                        ?>
                    </div>
                </div>
            </td>
            <td class='px-10 py-5 max-w-[20vw] border border-black border-solid'>
                <div class='relative'>
                    <div class='w-[200px] text-center border border-solid border-black hover:cursor-pointer' id='dropdown3'>
                        Selectionnez les option
                    </div>
                    <div class='hidden absolute -bottom-[400px] w-[200px] h-[400px] overflow-auto flex flex-col bg-white border border-solid border-black border-t-transparent' id='dropbox3'>
                        <?php
                    foreach($acteurs->fetchAll() as $act){
                        echo"
                        <div>
                            <input type='checkbox' value='$act[id_acteur]' name='acteur[]'>
                            $act[prenom_acteur] $act[nom_acteur]
                        </div>
                        ";
                    }
                        ?>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan=4 class=' max-w-[20vw] border border-black border-solid'><input type='submit' class='px-10 py-5 h-full w-full hover:cursor-pointer'></td>
        </tr>
    </table>
</form>

<script src="https://cdn.tailwindcss.com"></script>
<script src='../../../asset/script/dropdown_checkbox_ajoutacteur.js'></script>
<script src='../../../asset/script/file_photoacteur.js'></script>