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
$sql = "SELECT DISTINCT film.nom,date_sorti,synopsis,affiche,nom_cat,
GROUP_CONCAT(DISTINCT nom_cat),
GROUP_CONCAT(DISTINCT prenom_acteur,' ',nom_acteur,';',photo_acteur,';',acteurs.id_acteur),
GROUP_CONCAT(DISTINCT prenom_real,' ',nom_real,';',photo_real,';',realisateur.id_realisateur),
GROUP_CONCAT(DISTINCT lien_photo),
COUNT(DISTINCT lien_photo),
GROUP_CONCAT(DISTINCT categorie.id_categorie),
bande_annonce,
GROUP_CONCAT(DISTINCT commentaire.contenu,'/',utilisateurs.avatar,'/',utilisateurs.pseudo SEPARATOR '|'),
COUNT(DISTINCT aime.id_user) as fav
FROM `film`
LEFT JOIN possede ON film.id_film = possede.id_film
LEFT JOIN categorie ON possede.id_categorie = categorie.id_categorie
LEFT JOIN a_un_role ON film.id_film = a_un_role.id_film
LEFT JOIN acteurs ON a_un_role.id_acteur = acteurs.id_acteur
LEFT JOIN realise ON film.id_film = realise.id_film
LEFT JOIN realisateur ON realise.id_realisateur = realisateur.id_realisateur
LEFT JOIN photo_film ON film.id_film = photo_film.id_film
LEFT JOIN commentaire ON film.id_film = commentaire.id_film
LEFT JOIN utilisateurs ON commentaire.id_user = utilisateurs.id_user
LEFT JOIN aime ON film.id_film = aime.id_film
WHERE film.id_film=?
GROUP BY film.id_film";


$stmt=$pdo -> prepare($sql);
$stmt->bindParam(1,$_GET['id_film']);
$stmt -> execute();
$film=$stmt->fetch(PDO::FETCH_NUM);
$film[5]=explode(",",$film[5]);
$film[6]=explode(",",$film[6]);
$film[10]=explode(",",$film[10]);
$film[12]=explode("|",$film[12]);

$i=0;
foreach ($film[6] as $acteur){
$film[6][$i]=explode(";",$acteur);
$i+=1;
}
$film[7]=explode(",",$film[7]);
$i=0;
foreach ($film[7] as $real){
$film[7][$i]=explode(";",$real);
$i+=1;
}
$i=0;
foreach ($film[12] as $com){
    $film[12][$i]=explode("/",$com);
    $i+=1;
    }
$film[8]=explode(",",$film[8]);
$i=$film[9]+1;
if (($film[7][0][0]!="") OR ($film[6][0][0]!="") OR ($film[10][0]!="")){
    $where="WHERE ";
}

$n=0;
$a=0;
if ($film[7][0][0]!=""){
    $len=count($film[7]);
    for ($n;$n<$len;$n++){
        if ($n!=0){
            $where.="OR ";
        }
        $where.="id_realisateur='".$film[7][$n][2]."' ";
        $a=1;
    }
}
$n=0;
$len=count($film[6]);
if ($film[6][0][0]!=""){
    for ($n;$n<$len;$n++){
        if ($n!=0 or $a=1){
            $where.="OR ";
        }
        $where.="id_acteur='".$film[6][$n][2]."' ";
        $a=2;
    }
}
$n=0;
$len=count($film[10]);
if ($film[10][0]!=""){
    for ($n;$n<$len;$n++){
        if ($n!=0 or $a!=0){
            $where.="OR ";
        }
        $where.="id_categorie='".$film[10][$n][0]."' ";
    }
}

if (($film[7][0][0]!="") OR ($film[6][0][0]!="") OR ($film[10][0]!="")){
$sql="SELECT film.id_film, film.affiche,COUNT(DISTINCT id_realisateur) AS somme_real,COUNT(DISTINCT id_acteur) AS somme_acteur,COUNT(DISTINCT id_categorie) AS somme_categorie  FROM `film` 
LEFT JOIN realise ON film.id_film = realise.id_film
LEFT JOIN a_un_role ON film.id_film = a_un_role.id_film
LEFT JOIN possede ON film.id_film = possede.id_film
$where
GROUP BY film.id_film
";
$film_lies=$pdo -> prepare ($sql);
$film_lies->execute();
$film_lies=$film_lies->fetchAll();
$n=0;
foreach($film_lies as $films){
    $films['somme']=$films['somme_real']+$films['somme_acteur']+$films['somme_categorie'];
    $film_lies[$n]['somme']=$films['somme'];
    $n++;
}
$n=0;

$len=count($film_lies)-1;
for ($n;$n<$len;$n++){
    $c=0;
    for($c;$c<$len;$c++){
        if ($film_lies[$c]['somme']<$film_lies[$c+1]['somme']){
            $echange=$film_lies[$c];
            $film_lies[$c]=$film_lies[$c+1];
            $film_lies[$c+1]=$echange;
        }
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <link src='../asset/style/reset.css' rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kodchasan:ital@0;1&family=MuseoModerno&family=Roboto&display=swap');
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    <?php
        include("navbar.php");
    ?>
    <div class='bg-[#33312E] text-[#1CD4E1] flex flex-col px-[10%] pt-5'>
        <div class='flex flex-col md:flex-row items-center md:items-start'>   
            <div class='flex font-[Kodchasan] gap-2'>
                <?php
                if ($film[8][0]!=""){
                    //Item 1
                    echo"
                    <div>
                        <div id='default-carousel' class='relative w-[40vw] h-[66vw] md:w-[25vw] md:h-[40vw] mb-10' data-carousel='static'>
                            <div class='relative md:h-[36vw] h-[60vw] overflow-hidden'>
                                
                                <div class='hidden duration-700 ease-in-out  bg-[url(../asset/img/affiches/$film[3])] ' data-carousel-item>
                                    <div class='backdrop-blur-lg w-full h-full flex items-center'>
                                        <img src='../asset/img/affiches/$film[3]' class='w-full mx-auto inline-block'>
                                    </div>
                                </div>";
                                /// item 2-n
                                foreach ($film[8] as $photo_film){
                                echo"
                                <div class='hidden duration-700 ease-in-out flex items-center bg-[url(../asset/img/img_film/$photo_film)] bg-cover' data-carousel-item>
                                    <div class='backdrop-blur-lg w-full h-full flex items-center'>
                                        <img src='../asset/img/img_film/$photo_film' class='w-full my-auto inline-block' >
                                    </div>
                                </div>";
                                }
                                
                            echo"</div>
                            <!-- Slider indicators -->
                            <div class='absolute z-0 z-30 grid grid-cols-$i w-full -translate-x-1/2 h-[10%] bottom-[0%] left-1/2 overflow-hidden'>
                                <button type='button' class='h-full w-full object-cover' aria-current='true' aria-label='Slide 1' data-carousel-slide-to='0'> <img src='../asset/img/affiches/$film[3]' class='w-full h-full' alt=''></button>";
                                $i=1;
                                foreach ($film[8] as $photo_film){
                                    if ($photo_film!=""){
                                    echo"
                                    <button type='button' class='h-full w-full object-cover' aria-current='true' aria-label='Slide $i' data-carousel-slide-to='$i'> <img src='../asset/img/img_film/$photo_film' class='w-full h-full' alt=''></button>";
                                    $i+=1;
                                    }
                                }
                            echo"
                            </div>
                            <!-- Slider controls -->
                            <button type='button' class='absolute z-0 top-0 left-0 z-30 flex items-center justify-center h-[85%] px-4 cursor-pointer group focus:outline-none' data-carousel-prev>
                                <span class='inline-flex items-center justify-center w-4 h-4 lg:w-8 lg:h-8 rounded-full bg-black/30 dark:bg-dray-800/30 hover:bg-black/50 dark:hover:bg-gray-800/60 focus:ring-4 focus:ring-white dark:focus:ring-gray-800/70 focus:outline-none'>
                                    <svg aria-hidden='true' class='w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800' fill='none' stroke='currentColor' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M15 19l-7-7 7-7'></path></svg>
                                    <span class='sr-only'>Previous</span>
                                </span>
                            </button>
                            <button type='button' class='absolute z-0 top-0 right-0 z-30 flex items-center justify-center h-[85%] px-4 cursor-pointer group focus:outline-none' data-carousel-next>
                                <span class='inline-flex items-center justify-center w-4 h-4 lg:w-8 lg:h-8 rounded-full bg-black/30 dark:bg-gray-800/30 hover:bg-black/50 dark:hover:bg-gray-800/60 focus:ring-4 focus:ring-white dark:focus:ring-gray-800/70 focus:outline-none'>
                                    <svg aria-hidden='true' class='w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800' fill='none' stroke='currentColor' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 5l7 7-7 7'></path></svg>
                                    <span class='sr-only'>Next</span>
                                </span>
                            </button>
                        </div>
                    </div>";}
                    else{
                    echo "
                    <div class='relative w-[40vw] md:w-[25vw] md:h-[36vw] h-[60vw]'>
                        <div class='w-[40vw] md:w-[25vw] h-full bg-[url(../asset/img/affiches/$film[3])]'>
                            <div class='backdrop-blur-lg w-full h-full flex items-center'>
                                <img src='../asset/img/affiches/$film[3]' class='w-full mx-auto inline-block'>
                            </div>
                        </div>
                    </div>";
                    }
                    ?>
                <div class='relative flex flex-col text-[14px] md:text-[1.2em] h-[66vw] md:h-[40vw]'>
                    <div class='flex flex-col text-[14px] md:text-[1.2em] h-[66vw] md:h-[40vw]'>
                        <span class='text-[16px] lg:text-[50px] inline-block leading-4 md:leading-10 mb-4'><?php echo "$film[0]"?></span>
                        <span class='inline-block text-slate-100'>Date de sortie:<?php echo "$film[1]"?></span>
                        <span class='inline-block h-[50px] md:h-[20vw] text-[8px] lg:text-[12px] top-[72px] md:top-[100px] bg-[#33312E] text-slate-100 z-10 overflow-hidden' id='description'><?php echo"$film[2]"; ?><br><button id='cacher' class='ml-[35%] text-[12px] bg-[#33312E] border-white border border-solid px-1 md:hidden'>Cacher</button></span>
                        <button  id='voirPlus' class='md:hidden'>Voir plus</button>
                    </div>
                    <?php
                    if (isset($_SESSION['fav'])){
                        $infav=FALSE;
                        foreach($_SESSION['fav'] as $fav){
                            if ($_GET['id_film']==$fav){
                                $infav=TRUE;
                            }
                        }
                        if ($infav){
                            echo"
                            <div class='flex w-fit self-end'>
                                <div class='flex items-end text-[28px]'>
                                    $film[13]
                                </div>
                                <form class='bg-[#1CD4E1] text-[#191919] flex items-center self-end absolute z-0 right-0 bottom-0 rounded-[10px] relative overflow-hidden' method='POST' action='../traitement/traitement_unfav.php' id='like'>
                                    <input type='submit' class='absolute z-99 opacity-0 w-full h-full' name='ids' value='$_SESSION[id_user],$_GET[id_film]' >
                                    <span class='text-[9px] md:text-[16px] inline-block px-2'>
                                        Retirer de ma liste
                                    </span>
                                    <div class='pr-1'>
                                        <img src='../asset/img/logos/like.svg' class='w-[20px] h-[20px] md:w-[30px] md:h-[30px] lg:w-[40px] lg:h-[40px]'>
                                    </div>       
                                </form>        
                            </div>"
                            ;


                        }
                        else{
                        echo"
                    <div class='flex w-fit self-end'>
                        <div class='flex items-end text-[28px]'>
                            $film[13]
                        </div>
                        <form class='bg-[#191919] flex items-center self-end absolute z-0 right-0 bottom-0 rounded-[10px] relative overflow-hidden' method='POST' action='../traitement/traitement_fav.php' id='like'>
                            <input type='submit' class='absolute z-99 opacity-0 w-full h-full' name='ids' value='$_SESSION[id_user],$_GET[id_film]' >
                                <span class='text-[9px] md:text-[16px] inline-block px-2'>
                                    Ajouter à ma liste
                                </span>
                                <div class='pr-1'>
                                    <img src='../asset/img/logos/Vector.svg' class='w-[20px] h-[20px] md:w-[30px] md:h-[30px] lg:w-[40px] lg:h-[40px]'>
                                </div>
                        </form>
                    </div>";
                }
                }
                    ?>
                </div>
            </div>
            <div class='flex md:flex-col justify-between md:justify-start gap-2 text-[12px] md:text-[10px] md:h-[40vw] flex-wrap md:items-end md:border-solid md:border-r-black md:border-y-black md:border-2 border-l-transparent'>
                <?php
                
                foreach ($film[5] as $cat){
                    if ($cat!=""){
                    echo "<a href='catalogue?cat=$cat' class='inline-block px-4 md:pr-1 md:pl-3 py-1 md:py-px rounded-2xl bg-[#D9D9D9] text-black'>$cat</a>";
                    }
                }
                ?>
            </div>
            <div class='flex md:flex-col gap-4 md:items-center'>
                <div class='grid grid-cols-1 w-[100px] xl:w-[300px] text-center'>
                    Réalisateurs
                    <div class='text-[10px] lg:text-[20px] max-h-[300px] overflow-auto flex flex-col items-center'>
                        <?php
                        if ($film[7][0][0]!=""){
                            foreach($film[7] as $real){
                            echo"
                            <a href='person.php?person=$real[0]'>
                                <img src='../asset/img/realisateurs/$real[1]' alt='$real[0]'>
                                <span class='text-center'>$real[0]</span>
                            </a>";
                        }
                    }
                    else echo "Pas de réalisateurs connu"
                        ?>
                    </div>
                </div>
                <div class='flex flex-col items-center'>
                    Acteurs
                    <div class='grid w-[100px] xl:w-[300px] max-h-[150px] overflow-y-auto'>
                        <?php
                        $i=1;
                        if ($film[6][0][0]!=""){
                            foreach ($film[6] as $acteur){
                                $a=$i+2;
                                if ($i==1){
                                    echo "<div class='grid grid-cols-2 grid-rows-[40px] lg:grid-rows-[140px] gap-x-[10px] text-[10px] lg:text-[16px] text-center'>";
                                }
                                echo"
                                <div class='flex-col flex'>
                                    <a href='person.php?person=$acteur[0]' class='overflow-hidden order-$i'>
                                        <img src='../asset/img/acteurs/$acteur[1]'>
                                    </a>
                                    <a href='person.php?person=$acteur[0]' class='order-$a'>$acteur[0]</a>
                                </div>";
                                if ($i==2){
                                    echo"</div>";
                                }
                                if ($i==1){
                                    $i=2;
                                }
                                else{
                                    $i=1;
                                }
                            
                            }
                            if ($i==2){
                                echo "</div>";
                            }
                        }
                        else{
                            echo"<div class='text-center'>pas d'acteurs connus</div>";
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class='flex flex-col items-center'>
            <?php
            if (($film[7][0][0]!="") OR ($film[6][0][0]!="") OR ($film[10][0]!="")){
                    echo"
                    <span class='flex justify-around'>Films liés</span>
                    <div class='flex justify-evenly h-[70px] md:h-[170px] lg:h-[220px] xl:h-[300px] w-full'>";
                    $i=0;
                    foreach ($film_lies as $films){
                        if ($i<6){
                            $affiche=$film_lies[$i]['affiche'];
                            $id_film=$film_lies[$i]['id_film'];
                            if (($id_film!=$_GET['id_film'])){
                                echo "
                                    <a href='film.php?id_film=$id_film'>
                                        <img src='../asset/img/affiches/$affiche' class='h-full'>
                                    </a>";
                            }
                        $i++;
                        }
                            
                    }
                    echo"</div>";
            }
            ?>
             <div class='flex justify-around h-[168px] md:h-[336px] mt-5'>
                <iframe src='https://www.youtube.com/embed/<?php echo"$film[11] " ?>' class='md:w-[600px]' frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <?php
                    if (isset($_SESSION['id_user'])){
                    echo "
                <div class='max-h-[100px] mt-5 md:max-h-[200px] lg:h-auto lg:max-h-[400px] w-[98.7vw] overflow-y-scroll bg-slate-800 px-5'>
                    <div class='grid grid-cols-[50px_1fr] md:grid-cols-[70px_1fr] relative ml-[70px] mt-[20px]'>
                        <div class='flex flex-col items-center'>
                            <div class='w-[50px] h-[50px] md:w-[70px] md:h-[70px] overflow-hidden rounded-full'>
                                <img src='../asset/img/avatar/$_SESSION[pp]'>
                            </div>
                        </div>
                        <div class='ml-2'>
                            <div class='inline-block h-0 w-0 border-b-[10px] ml-2 border-b-[#1CD4E1] -mb-2 border-r-[9px] border-solid border-r-transparent'></div>
                            <form action='../traitement/traitement_commentaire.php' method='POST' class='relative bg-[#1CD4E1] text-black rounded-lg flex items-end w-[95%] text-[10px] md:text-[14px] px-2 py-1'>
                                <div class='relative pb-5 border border-black border-solid bg-white w-full'>
                                    <div class='relative'>
                                        <textarea name='comm' id='textarea' class='relative border-transparent w-full'></textarea>
                                        <span class='inline-block absolute right-px z-0 bottom-px w-4 h-4 bg-white'>
                                        </span>
                                    </div>
                                    <span class='absolute bottom-0 right-0' id='compteur'>
                                    </span>
                                </div>
                                <div class='relative inline-block'>
                                    <input type='button' class='bg-slate-300 px-2 rounded-md border relative border-solid border-slate-700' value='envoyer'>
                                    <input type='submit' class='absolute w-full h-full left-0 opacity-0 z-10' value='$_SESSION[id_user],$_GET[id_film]' name='id'>
                                </div>
                            </form>
                        </div>
                    </div>";}
                foreach($film[12] as $com){
                    if (!empty($com[0])){
                        echo"
                        <div class='grid grid-cols-[50px_1fr] md:grid-cols-[70px_1fr] relative'>
                            <div class='flex flex-col items-center'>
                                <div class='w-[50px] h-[50px] md:w-[70px] md:h-[70px] overflow-hidden rounded-full'>
                                    <img src='../asset/img/avatar/$com[1]'>
                                </div>
                                <span class='text-[12px]'>$com[2]</span>
                            </div>
                            <div class='ml-2 my-auto'>
                                <div class='inline-block h-0 w-0 border-b-[10px] ml-2 border-b-[#1CD4E1] -mb-2 border-r-[9px] border-solid border-r-transparent'></div>
                                <div class='bg-[#1CD4E1] text-black rounded-lg w-fit text-[10px] md:text-[14px] px-2 py-1'>$com[0]</div>
                            </div>
                        </div>";
                        }
                }
            ?>
            </div>
        </div>
    </div>
    <?php
        include("footer.php");
    ?>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="../asset/script.js"></script>
    <script src="../asset/script/film.js"></script>
    <script src="../asset/script/compte_textarea.js"></script>
</body>
</html>