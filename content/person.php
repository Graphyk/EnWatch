<?php
session_start();
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

<body class='bg-[#33312E]'>
<?php
    require_once('navbar.php');
?>
    <div class='flex flex-col text-[#1CD4E1]'>
        <div class='flex flex-col md:flex-row md:justify-between text-[30px] items-center px-2'>
            <div class='flex flex-col'>
                <span class='font-[Kodchasan]'>Guillermo Del Toro</span>
                <img src="../asset/img/realisateurs/guillermo_del_toro.webp" alt="" class='w-[250px]'>
                <div class='flex justify-end w-[250px]'>
                    <div class='bg-[#191919] flex items-center rounded-[10px] mt-2'>
                        <span class='text-[16px] inline-block px-2'>
                            Ajouter à ma liste
                        </span>
                        <div class='pr-1'>
                            <img src="../asset/img/logos/Vector.svg" class='w-[30px] h-[30px]'>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class='flex flex-col items-start w-[250px] text-[16px]'>
                Film à l'affiche
                <a href='film.php?film=hellboy'>
                    <img src='../asset/img/affiches/hellboy.webp' class='w-[150px]'>
                </a>
                </div>
            </div>
        </div>
        Film du réalisateur
        <div id="default-carousel" class="relative w-full h-[40vw] lg:h-[24vw]" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-[33vw] lg:h-[20vw] overflow-hidden rounded-lg ">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class='flex justify-between items-start h-[40vw] lg:h-[20vw] mx-auto overflow-hidden'>
                        <div>
                            <img src="../asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/asterix_et_obelix-l-empire-du-milieu.jfif" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/gladiator.jpg" class='w-[25vw] lg:w-[15vw]'  alt="Gladiator">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/matrix.jpg" class='w-[25vw] lg:w-[15vw]'  alt="matrix">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
                        </div> 
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class='flex justify-between items-start h-[32vw] lg:h-[20vw] mx-auto overflow-hidden'>
                        <div>
                            <img src="../asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/asterix_et_obelix-l-empire-du-milieu.jfif" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/gladiator.jpg" class='w-[25vw] lg:w-[15vw]'  alt="Gladiator">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/matrix.jpg" class='w-[25vw] lg:w-[15vw]'  alt="matrix">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
                        </div> 
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class='flex justify-between items-start h-[32vw] lg:h-[20vw] mx-auto overflow-hidden'>
                        <div>
                            <img src="../asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/asterix_et_obelix-l-empire-du-milieu.jfif" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/gladiator.jpg" class='w-[25vw] lg:w-[15vw]'  alt="Gladiator">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/matrix.jpg" class='w-[25vw] lg:w-[15vw]'  alt="matrix">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
                        </div> 
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class='flex justify-between items-start h-[32vw] lg:h-[20vw] mx-auto overflow-hidden'>
                        <div>
                            <img src="../asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/asterix_et_obelix-l-empire-du-milieu.jfif" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/gladiator.jpg" class='w-[25vw] lg:w-[15vw]'  alt="Gladiator">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/matrix.jpg" class='w-[25vw] lg:w-[15vw]'  alt="matrix">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
                        </div> 
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class='flex justify-between items-start h-[32vw] lg:h-[20vw] mx-auto overflow-hidden'>
                        <div>
                            <img src="../asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/asterix_et_obelix-l-empire-du-milieu.jfif" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/gladiator.jpg" class='w-[25vw] lg:w-[15vw]'  alt="Gladiator">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/matrix.jpg" class='w-[25vw] lg:w-[15vw]'  alt="matrix">
                        </div>
                        <div>
                            <img src="../asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
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
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="../asset/script.js"></script>
<?php
require_once('footer.php');
?>    
</body>
</html>