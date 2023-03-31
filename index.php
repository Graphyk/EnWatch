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
$sql = "SELECT * FROM `film` limit 25";
$stmt = $pdo ->prepare($sql);
$stmt->execute();
$i=0;
$sql = "SELECT * FROM `realisateur` order by `id_realisateur`";
$real = $pdo ->prepare($sql);
$real->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <link src='asset/style/reset.css' rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kodchasan:ital@0;1&family=MuseoModerno&family=Roboto&display=swap');
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    <?php
        include("content/navbar.php");
    ?>  
    
    <!-- main container -->
    <div class='bg-[#33312E] text-[#1CD4E1] pl-5 pg:ml-20 flex flex-col font-[Kodchasan] pt-[150px] sticky top-[45px]' id='header'><span></span>
    </div>
    <div class='bg-[url(asset/img/parallax.jpeg)] text-[#1CD4E1] font-[Kodchasan] flex flex-col pl-2 md:pl-28 bg-fixed bg-center bg-no-repeat bg-cover flex justify-end' id='parallax'>
        <span class='text-[32px] lg:text-[48px] hidden title text-transparen'>Bonjour,</span>
        <span class='inline-block lg:text-[32px] ml-[15vw] hidden title text-transparent' >Que voulez vous regarder ?</span>
    </div>
    <div class='bg-[#33312E] text-[#1CD4E1] flex flex-col'>
        <span class='font-[Roboto] ml-5 lg:text-[24px] inline-block lg:ml-20 mt-5'>Nouveautés</span>
        <div id="default-carousel" class="relative w-full h-[40vw] lg:h-[24vw]" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-[40vw] overflow-hidden rounded-lg ">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class='flex w-[85vw] justify-between items-start h-[32vw] lg:h-[20vw] mx-auto overflow-hidden'>
                    <?php
                    for ($i;$i<5;$i++){
                            $result=$stmt ->fetch(PDO::FETCH_ASSOC,PDO::FETCH_ORI_ABS,$i);
                            if (($i==0) or ($i==4)){
                                echo"<div>
                                    <img src='asset/img/affiches/$result[affiche]' class='w-[15vw] hidden lg:inline-block'  alt='$result[nom]'>
                                </div>";
                            }
                            else{
                                echo"<div>
                                    <img src='asset/img/affiches/$result[affiche]' class='w-[25vw] lg:w-[15vw]'  alt='$result[nom]'>
                                    </div>";
                            }
                            
                            } ?>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class='flex w-[85vw] justify-between items-start h-[32vw] lg:h-[20vw] mx-auto overflow-hidden'>
                    <?php
                    for ($i;$i<10;$i++){
                            $result=$stmt ->fetch(PDO::FETCH_ASSOC,PDO::FETCH_ORI_ABS,$i);
                            if (($i==5) or ($i==6)){
                                echo"<div>
                                    <img src='asset/img/affiches/$result[affiche]' class='w-[15vw] hidden lg:inline-block'  alt='$result[nom]'>
                                </div>";
                            }
                            else{
                                echo"<div>
                                    <img src='asset/img/affiches/$result[affiche]' class='w-[25vw] lg:w-[15vw]'  alt='$result[nom]'>
                                    </div>";
                            }
                        }?>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class='flex w-[85vw] justify-between items-start h-[32vw] lg:h-[20vw] mx-auto overflow-hidden'>
                    <?php
                    for ($i;$i<15;$i++){
                            $result=$stmt ->fetch(PDO::FETCH_ASSOC,PDO::FETCH_ORI_ABS,$i);
                            if (($i==10) or ($i==14)){
                                echo"<div>
                                    <img src='asset/img/affiches/$result[affiche]' class='w-[15vw] hidden lg:inline-block'  alt='$result[nom]'>
                                </div>";
                            }
                            else{
                                echo"<div>
                                    <img src='asset/img/affiches/$result[affiche]' class='w-[25vw] lg:w-[15vw]'  alt='$result[nom]'>
                                    </div>";
                            }
                            }?>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class='flex w-[85vw] justify-between items-start h-[32vw] lg:h-[20vw] mx-auto overflow-hidden'>
                <?php
                    for ($i;$i<20;$i++){
                            $result=$stmt ->fetch(PDO::FETCH_ASSOC,PDO::FETCH_ORI_ABS,$i);
                            if (($i==15) or ($i==19)){
                                echo"<div>
                                    <img src='asset/img/affiches/$result[affiche]' class='w-[15vw] hidden lg:inline-block'  alt='$result[nom]'>
                                </div>";
                            }
                            else{
                                echo"<div>
                                    <img src='asset/img/affiches/$result[affiche]' class='w-[25vw] lg:w-[15vw]'  alt='$result[nom]'>
                                    </div>";
                            }}?>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class='flex w-[85vw] justify-between items-start h-[32vw] lg:h-[20vw] mx-auto overflow-hidden'>
                <?php
                    for ($i;$i<25;$i++){
                            $result=$stmt ->fetch(PDO::FETCH_ASSOC,PDO::FETCH_ORI_ABS,$i);
                            if (($i==20) or ($i==24)){
                                echo"<div>
                                    <img src='asset/img/affiches/$result[affiche]' class='w-[15vw] hidden lg:inline-block'  alt='$result[nom]'>
                                </div>";
                            }
                            else{
                                echo"<div>
                                    <img src='asset/img/affiches/$result[affiche]' class='w-[25vw] lg:w-[15vw]'  alt='$result[nom]'>
                                    </div>";
                            }
                                } ?>
                    </div>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-0 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        <span class='font-[Roboto] ml-5 lg:text-[24px] inline-block lg:ml-20 mt-5'>Réalisateurs à la une</span>
        <div id="default-carousel" class="relative w-full h-[40vw] lg:h-[26vw]" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-[40vw] overflow-hidden rounded-lg ">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item> 
                    <div class='flex justify-between lg:h-auto h-[32vw] items-center mt-5'>
                        <div class='flex w-[80vw] mx-auto justify-between lg:justify-evenly items-start lg:h-auto h-[32vw] text-[8px] lg:text-[28px]  overflow-hidden'>
                            <?php
                            $i=0;
                            for ($i;$i<2;$i++){
                                $result=$real->fetch(PDO::FETCH_ASSOC,PDO::FETCH_ORI_ABS,$i);
                                $sql = "SELECT * FROM `film`
                                        inner join realise on film.id_film = realise.id_film
                                        WHERE id_realisateur=$result[id_realisateur]";
                                $film_of_real = $pdo ->prepare($sql);
                                $film_of_real->execute();
                                $film1=$film_of_real -> fetch(PDO::FETCH_ASSOC);
                                $film2=$film_of_real -> fetch(PDO::FETCH_ASSOC);
                                echo"
                                <div class='flex flex-col items-center lg:items-start'>
                                    <div class='h-[25vw] lg:h-[18vw] flex items-start'>
                                        <a href='content/person.php?person=$result[id_realisateur]'><img src='asset/img/realisateurs/$result[photo_real]' class='w-[25vw] lg:w-[18vw] z-10 lg:border  lg:mt-[0.5px] lg:border-solid lg:border-white lg:border-r-[#1B1917]'  alt='$result[prenom_real]"." "."$result[nom_real]'></a>
                                        <div class='mt-px w-[18vw] h-[18vw] bg-[#1B1917] outline outline-1 outline-white hidden lg:flex flex-col'>
                                            <div class='flex justify-evenly mt-[20px] overflow-hidden h-[65%]' >";
                                            if ($film1!=FALSE){
                                                echo "<a href='content/film.php?id_film=$film1[id_film]' class='inline-block h-full'><img src='asset/img/affiches/$film1[affiche]' class='inline-block h-full'></a>";
                                                if ($film2!=FALSE){
                                                    echo "<a href='content/film.php?id_film=$film2[id_film]' class='inline-block h-full'><img src='asset/img/affiches/$film2[affiche]' class='inline-block h-full'></a>";
                                                    }
                                                }
                                                else{
                                                    echo "<div class='flex items-center justify-center'><span class='inline-block h-[36px]'>Pas de film</span></div>";
                                                }
                                            echo"
                                            </div>
                                        </div>
                                    </div>
                                    <span class='inline-block lg:ml-[20px]'>$result[prenom_real]"." "."$result[nom_real]</span>
                                </div>"; }
                                $i+=1;
                                $result=$real->fetch(PDO::FETCH_ASSOC,PDO::FETCH_ORI_ABS,$i);
                                echo"<div class='flex flex-col items-center lg:hidden'>
                                <div>
                                    <img src='asset/img/realisateurs/$result[photo_real]' class='w-[25vw]'  alt='$result[prenom_real]"." "."$result[nom_real]'>
                                </div>
                                <span class='inline-block'>$result[prenom_real]"." "."$result[nom_real]</span>
                            </div>"?>
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item> 
                    <div class='flex justify-between lg:h-auto h-[32vw] items-center mt-5'>
                        <div class='flex w-[80vw] mx-auto justify-between lg:justify-evenly items-start lg:h-auto h-[32vw] text-[8px] lg:text-[28px]  overflow-hidden'>
                            <?php
                            for ($i;$i<5;$i++){
                                $result=$real->fetch(PDO::FETCH_ASSOC,PDO::FETCH_ORI_ABS,$i);
                                $sql = "SELECT * FROM `film`
                                        inner join realise on film.id_film = realise.id_film
                                        WHERE id_realisateur=$result[id_realisateur]";
                                $film_of_real = $pdo ->prepare($sql);
                                $film_of_real->execute();
                                $film1=$film_of_real -> fetch(PDO::FETCH_ASSOC);
                                $film2=$film_of_real -> fetch(PDO::FETCH_ASSOC);
                                echo"
                                <div class='flex flex-col items-center lg:items-start'>
                                    <div class='h-[25vw] lg:h-[18vw] flex items-start'>
                                        <img src='asset/img/realisateurs/$result[photo_real]' class='w-[25vw] lg:w-[18vw] z-10 lg:border  lg:mt-[0.5px] lg:border-solid lg:border-white lg:border-r-[#1B1917]'  alt='$result[prenom_real]"." "."$result[nom_real]'>
                                        <div class='mt-px w-[18vw] h-[18vw] bg-[#1B1917] outline outline-1 outline-white hidden lg:flex flex-col'>
                                            <div class='flex justify-evenly mt-[20px] overflow-hidden h-[65%]' >";
                                            if ($film1!=FALSE){
                                                echo "<a href='content/film.php?id_film=$film1[id_film]' class='inline-block h-full'><img src='asset/img/affiches/$film1[affiche]' class='inline-block h-full'></a>";
                                                if ($film2!=FALSE){
                                                    echo "<a href='content/film.php?id_film=$film2[id_film]' class='inline-block h-full'><img src='asset/img/affiches/$film2[affiche]' class='inline-block h-full'></a>";
                                                    }
                                                }
                                                else{
                                                    echo "<div class='flex items-center justify-center'><span class='inline-block h-[36px]'>Pas de film</span></div>";
                                                }
                                            echo"
                                            </div>
                                        </div>
                                    </div>
                                    <span class='inline-block lg:ml-[20px]'>$result[prenom_real]"." "."$result[nom_real]</span>
                                </div>"; }
                                $i+=1;
                                $result=$real->fetch(PDO::FETCH_ASSOC,PDO::FETCH_ORI_ABS,$i);
                                echo"<div class='flex flex-col items-center lg:hidden'>
                                <div>
                                    <img src='asset/img/realisateurs/$result[photo_real]' class='w-[25vw]'  alt='$result[prenom_real]"." "."$result[nom_real]'>
                                </div>
                                <span class='inline-block'>$result[prenom_real]"." "."$result[nom_real]</span>
                            </div>"?>
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class='flex justify-between lg:h-auto h-[32vw] items-center mt-5'>
                        <div class='flex w-[80vw] mx-auto justify-between lg:justify-evenly items-start lg:h-auto h-[32vw] text-[8px] lg:text-[28px]  overflow-hidden'>
                            <div class='flex flex-col items-center lg:items-start'>
                                <div class='h-[25vw] lg:h-[18vw] flex items-start'>
                                    <img src="asset/img/realisateurs/alfred-hitchcock.jpeg" class='w-[25vw] lg:w-[18vw] z-10 lg:border  lg:mt-[0.5px] lg:border-solid lg:border-white lg:border-r-[#1B1917]'  alt="Alfred Hitchcock">
                                        <div class='mt-px w-[18vw] h-[18vw] bg-[#1B1917] outline outline-1 outline-white hidden lg:flex flex-col'>
                                            <div class='flex justify-evenly mt-[20px] overflow-hidden h-[65%]' >
                                                <img src='asset/img/affiches/the_Birds.jpg' class='inline-block'>
                                                <img src='asset/img/affiches/rear_Window.png' class=' inline-block'>
                                            </div>
                                            <div class="flex gap-10 mx-auto mt-[8%]">
                                            <div class=' inline-block relative w-[25px] rotate-180 h-[25px] bg-opacity-0 rounded-full border border-solid border-white'>
                                                <span class='absolute bottom-[11px] right-[5px] pr-[13px] pt-[2px] rounded-lg bg-white inline-block'></span><span class='absolute bottom-[14px] right-[3px] pr-[10px] pt-[2px] rounded-lg rotate-45 bg-white inline-block'></span><span class='absolute bottom-[8px] right-[3px] pr-[10px] pt-[2px] -rotate-45 rounded-lg bg-white inline-block'></span>
                                            </div>
                                            <div class=' inline-block relative w-[25px] h-[25px] bg-opacity-0 rounded-full border border-solid border-white'>
                                                <span class='absolute bottom-[11px] right-[5px] pr-[13px] pt-[2px] rounded-lg bg-white inline-block'></span><span class='absolute bottom-[14px] right-[3px] pr-[10px] pt-[2px] rounded-lg rotate-45 bg-white inline-block'></span><span class='absolute bottom-[8px] right-[3px] pr-[10px] pt-[2px] -rotate-45 rounded-lg bg-white inline-block'></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <span class='inline-block lg:ml-[20px]'>Alfred Hitchcock</span>
                        </div>
                        <div class='flex flex-col items-center lg:items-start '>
                            <div class='h-[25vw] lg:h-[18vw] flex items-start'>
                                <img src="asset/img/realisateurs/guillermo_del_toro.webp" class='w-[25vw] lg:w-[18vw] z-10 lg:border  lg:mt-[0.5px] lg:border-solid lg:border-white lg:border-r-[#1B1917]'  alt="Alfred Hitchcock">
                                <div class='mt-px w-[18vw] h-[18vw] bg-[#1B1917] outline outline-1 outline-white hidden lg:flex flex-col'>
                                    <div class='flex justify-evenly mt-[20px] overflow-hidden h-[65%]' >
                                        <img src='asset/img/affiches/pinocchio.webp' class='inline-block'>
                                        <img src='asset/img/affiches/hellboy.webp' class=' inline-block'>
                                    </div>
                                    <div class="flex gap-10 mx-auto mt-[8%]">
                                        <div class=' inline-block relative w-[25px] rotate-180 h-[25px] bg-opacity-0 rounded-full border border-solid border-white'>
                                            <span class='absolute bottom-[11px] right-[5px] pr-[13px] pt-[2px] rounded-lg bg-white inline-block'></span><span class='absolute bottom-[14px] right-[3px] pr-[10px] pt-[2px] rounded-lg rotate-45 bg-white inline-block'></span><span class='absolute bottom-[8px] right-[3px] pr-[10px] pt-[2px] -rotate-45 rounded-lg bg-white inline-block'></span>
                                        </div>
                                        <div class=' inline-block relative w-[25px] h-[25px] bg-opacity-0 rounded-full border border-solid border-white'>
                                            <span class='absolute bottom-[11px] right-[5px] pr-[13px] pt-[2px] rounded-lg bg-white inline-block'></span><span class='absolute bottom-[14px] right-[3px] pr-[10px] pt-[2px] rounded-lg rotate-45 bg-white inline-block'></span><span class='absolute bottom-[8px] right-[3px] pr-[10px] pt-[2px] -rotate-45 rounded-lg bg-white inline-block'></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <span class='inline-block lg:ml-[20px]'>Guillermo Del Toro</span>
                            </div>
                            <div class='flex flex-col items-center lg:hidden'>
                                <div>
                                    <img src="asset/img/realisateurs/akira_kurosawa.jpg" class='w-[25vw]'  alt="Akira Kurosawa">
                                </div>
                                <span class='inline-block'>Akira Kurosawa</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class='flex justify-between lg:h-auto h-[32vw] items-center mt-5'>
                        <div class='flex w-[80vw] mx-auto justify-between lg:justify-evenly items-start lg:h-auto h-[32vw] text-[8px] lg:text-[28px]  overflow-hidden'>
                            <div class='flex flex-col items-center lg:items-start'>
                                <div class='h-[25vw] lg:h-[18vw] flex items-start'>
                                    <img src="asset/img/realisateurs/alfred-hitchcock.jpeg" class='w-[25vw] lg:w-[18vw] z-10 lg:border  lg:mt-[0.5px] lg:border-solid lg:border-white lg:border-r-[#1B1917]'  alt="Alfred Hitchcock">
                                        <div class='mt-px w-[18vw] h-[18vw] bg-[#1B1917] outline outline-1 outline-white hidden lg:flex flex-col'>
                                            <div class='flex justify-evenly mt-[20px] overflow-hidden h-[65%]' >
                                                <img src='asset/img/affiches/the_Birds.jpg' class='inline-block'>
                                                <img src='asset/img/affiches/rear_Window.png' class=' inline-block'>
                                            </div>
                                            <div class="flex gap-10 mx-auto mt-[8%]">
                                            <div class=' inline-block relative w-[25px] rotate-180 h-[25px] bg-opacity-0 rounded-full border border-solid border-white'>
                                                <span class='absolute bottom-[11px] right-[5px] pr-[13px] pt-[2px] rounded-lg bg-white inline-block'></span><span class='absolute bottom-[14px] right-[3px] pr-[10px] pt-[2px] rounded-lg rotate-45 bg-white inline-block'></span><span class='absolute bottom-[8px] right-[3px] pr-[10px] pt-[2px] -rotate-45 rounded-lg bg-white inline-block'></span>
                                            </div>
                                            <div class=' inline-block relative w-[25px] h-[25px] bg-opacity-0 rounded-full border border-solid border-white'>
                                                <span class='absolute bottom-[11px] right-[5px] pr-[13px] pt-[2px] rounded-lg bg-white inline-block'></span><span class='absolute bottom-[14px] right-[3px] pr-[10px] pt-[2px] rounded-lg rotate-45 bg-white inline-block'></span><span class='absolute bottom-[8px] right-[3px] pr-[10px] pt-[2px] -rotate-45 rounded-lg bg-white inline-block'></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <span class='inline-block lg:ml-[20px]'>Alfred Hitchcock</span>
                        </div>
                        <div class='flex flex-col items-center lg:items-start '>
                            <div class='h-[25vw] lg:h-[18vw] flex items-start'>
                                <img src="asset/img/realisateurs/guillermo_del_toro.webp" class='w-[25vw] lg:w-[18vw] z-10 lg:border  lg:mt-[0.5px] lg:border-solid lg:border-white lg:border-r-[#1B1917]'  alt="Alfred Hitchcock">
                                <div class='mt-px w-[18vw] h-[18vw] bg-[#1B1917] outline outline-1 outline-white hidden lg:flex flex-col'>
                                    <div class='flex justify-evenly mt-[20px] overflow-hidden h-[65%]' >
                                        <img src='asset/img/affiches/pinocchio.webp' class='inline-block'>
                                        <img src='asset/img/affiches/hellboy.webp' class=' inline-block'>
                                    </div>
                                    <div class="flex gap-10 mx-auto mt-[8%]">
                                        <div class=' inline-block relative w-[25px] rotate-180 h-[25px] bg-opacity-0 rounded-full border border-solid border-white'>
                                            <span class='absolute bottom-[11px] right-[5px] pr-[13px] pt-[2px] rounded-lg bg-white inline-block'></span><span class='absolute bottom-[14px] right-[3px] pr-[10px] pt-[2px] rounded-lg rotate-45 bg-white inline-block'></span><span class='absolute bottom-[8px] right-[3px] pr-[10px] pt-[2px] -rotate-45 rounded-lg bg-white inline-block'></span>
                                        </div>
                                        <div class=' inline-block relative w-[25px] h-[25px] bg-opacity-0 rounded-full border border-solid border-white'>
                                            <span class='absolute bottom-[11px] right-[5px] pr-[13px] pt-[2px] rounded-lg bg-white inline-block'></span><span class='absolute bottom-[14px] right-[3px] pr-[10px] pt-[2px] rounded-lg rotate-45 bg-white inline-block'></span><span class='absolute bottom-[8px] right-[3px] pr-[10px] pt-[2px] -rotate-45 rounded-lg bg-white inline-block'></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <span class='inline-block lg:ml-[20px]'>Guillermo Del Toro</span>
                            </div>
                            <div class='flex flex-col items-center lg:hidden'>
                                <div>
                                    <img src="asset/img/realisateurs/akira_kurosawa.jpg" class='w-[25vw]'  alt="Akira Kurosawa">
                                </div>
                                <span class='inline-block'>Akira Kurosawa</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-0 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 0" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 0" data-carousel-slide-to="3"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        <span class='font-[Roboto] ml-5 lg:text-[24px] inline-block lg:ml-20 mt-5'>Acteurs à la une</span>
        <div id="default-carousel" class="relative w-full h-[40vw] lg:h-[20vw] mb-10" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-[40vw] lg:h-[18vw] overflow-hidden rounded-lg ">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class='flex w-[80vw] ml-[10vw]  justify-between items-start h-[32vw] lg:h-[18vw] overflow-hidden text-[8px] lg:text-[16px]'>
                        <div class='flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\david_harbour.jpg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                    <span>David harbour</span>
                    </div>
                    <div class='flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\chris_pratt.jpeg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <span>Chriss Pratt</span>
                    </div>
                    <div class='flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\tom_cruise.jpg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <span>Tom Cruise</span>
                    </div>
                    <div class='hidden lg:flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\leonardo-dicaprio.jpeg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <span>Leonardo Dicaprio</span>
                    </div>
                    <div class='lg:flex flex-col items-center hidden '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\milla_jovovich.webp" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                    <span>Milla Jovovich</span>
                    </div>
                </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class='flex w-[80vw] ml-[10vw]  justify-between items-start h-[32vw] lg:h-[20vw] overflow-hidden text-[8px] lg:text-[16px]'>
                        <div class='flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\david_harbour.jpg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                    <span>David harbour</span>
                    </div>
                    <div class='flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\chris_pratt.jpeg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <span>Chriss Pratt</span>
                    </div>
                    <div class='flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\tom_cruise.jpg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <span>Tom Cruise</span>
                    </div>
                    <div class='hidden lg:flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\leonardo-dicaprio.jpeg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <span>Leonardo Dicaprio</span>
                    </div>
                    <div class='lg:flex flex-col items-center hidden '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\milla_jovovich.webp" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                    <span>Milla Jovovich</span>
                    </div>
                </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class='flex w-[80vw] ml-[10vw]  justify-between items-start h-[32vw] lg:h-[20vw] overflow-hidden text-[8px] lg:text-[16px]'>
                        <div class='flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\david_harbour.jpg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                    <span>David harbour</span>
                    </div>
                    <div class='flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\chris_pratt.jpeg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <span>Chriss Pratt</span>
                    </div>
                    <div class='flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\tom_cruise.jpg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <span>Tom Cruise</span>
                    </div>
                    <div class='hidden lg:flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\leonardo-dicaprio.jpeg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <span>Leonardo Dicaprio</span>
                    </div>
                    <div class='lg:flex flex-col items-center hidden '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\milla_jovovich.webp" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                    <span>Milla Jovovich</span>
                    </div>
                </div>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class='flex w-[80vw] ml-[10vw]  justify-between items-start h-[32vw] lg:h-[20vw] overflow-hidden text-[8px] lg:text-[16px]'>
                        <div class='flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\david_harbour.jpg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                    <span>David harbour</span>
                    </div>
                    <div class='flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\chris_pratt.jpeg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <span>Chriss Pratt</span>
                    </div>
                    <div class='flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\tom_cruise.jpg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <span>Tom Cruise</span>
                    </div>
                    <div class='hidden lg:flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\leonardo-dicaprio.jpeg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <span>Leonardo Dicaprio</span>
                    </div>
                    <div class='lg:flex flex-col items-center hidden '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\milla_jovovich.webp" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                    <span>Milla Jovovich</span>
                    </div>
                </div>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class='flex w-[80vw] ml-[10vw]  justify-between items-start h-[32vw] lg:h-[20vw] overflow-hidden text-[8px] lg:text-[16px]'>
                        <div class='flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\david_harbour.jpg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                    <span>David harbour</span>
                    </div>
                    <div class='flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\chris_pratt.jpeg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <span>Chriss Pratt</span>
                    </div>
                    <div class='flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\tom_cruise.jpg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <span>Tom Cruise</span>
                    </div>
                    <div class='hidden lg:flex flex-col items-center '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\leonardo-dicaprio.jpeg" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <span>Leonardo Dicaprio</span>
                    </div>
                    <div class='lg:flex flex-col items-center hidden '>
                        <div class='w-[25vw] lg:w-[15vw] h-[25vw] lg:h-[15vw]'>
                            <img src="asset\img\acteurs\milla_jovovich.webp" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                    <span>Milla Jovovich</span>
                    </div>
                </div>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-0 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        <?php
        include('content/footer.php')
        ?>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="asset/script.js"></script>
    <script src="asset/script/index.js"></script>
</body>
</html>