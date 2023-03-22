<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <link src='../asset/style/reset.css' rel="stylesheet">
    <link src='../asset/style/style.css' rel="stylesheet">
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
                <div>
                    <div id="default-carousel" class="relative w-[40vw] h-[66vw] md:w-[25vw] md:h-[40vw] mb-10" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative md:h-[36vw] h-[60vw] overflow-hidden">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out  bg-[url(../asset/img/affiches/hellboy.webp)] " data-carousel-item>
                                <div class='backdrop-blur-lg w-full h-full flex items-center'>
                                    <img src="../asset/img/affiches/hellboy.webp" class='w-full mx-auto inline-block'>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out flex items-center bg-[url(../asset/img/img_film/hellboy_1.jpg)] bg-cover" data-carousel-item>
                                <div class='backdrop-blur-lg w-full h-full flex items-center'>
                                    <img src="../asset/img/img_film/hellboy_1.jpg" class='w-full my-auto inline-block' >
                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out flex items-center bg-[url(../asset/img/img_film/hellboy_2.jpg)] bg-cover" data-carousel-item>
                                <div class='backdrop-blur-lg w-full h-full flex items-center '>
                                    <img src="../asset/img/img_film/hellboy_2.jpg" class='w-full my-auto inline-block'>
                                </div>
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out flex items-center bg-[url(../asset/img/img_film/hellboy_3.webp)] bg-cover" data-carousel-item>
                                <div class='backdrop-blur-lg w-full h-full flex items-center'>
                                    <img src="../asset/img/img_film/hellboy_3.webp" class='w-full my-auto inline-block'>
                                </div>
                            </div>
                            <!-- Item 5 -->
                            <div class="hidden duration-700 ease-in-out flex items-center bg-[url(../asset/img/img_film/hellboy_4.webp)] bg-cover" data-carousel-item>
                                <div class='backdrop-blur-lg w-full h-full flex items-center'>
                                    <img src="../asset/img/img_film/hellboy_4.webp" class='w-full my-auto inline-block'>
                                </div>
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-0 z-30 grid grid-cols-5 w-full -translate-x-1/2 h-[10%] bottom-[0%] left-1/2 overflow-hidden">
                            <button type="button" class="h-full w-full object-cover" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"> <img src="../asset/img/affiches/hellboy.webp" class='w-full h-full' alt=""></button>
                            <button type="button" class="h-full w-full object-cover" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"><img src="../asset/img/img_film/hellboy_1.jpg" class='w-full h-full ' alt=""></button>
                            <button type="button" class="h-full w-full object-cover" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"><img src="../asset/img/img_film/hellboy_2.jpg" class='w-full h-full ' alt=""></button>
                            <button type="button" class="h-full w-full object-cover" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"><img src="../asset/img/img_film/hellboy_3.webp" class='w-full h-full ' alt=""></button>
                            <button type="button" class="h-full w-full object-cover" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"><img src="../asset/img/img_film/hellboy_4.webp" class='w-full h-full ' alt=""></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="absolute z-0 top-0 left-0 z-30 flex items-center justify-center h-[85%] px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-4 h-4 lg:w-8 lg:h-8 rounded-full bg-black/30 dark:bg-dray-800/30 hover:bg-black/50 dark:hover:bg-gray-800/60 focus:ring-4 focus:ring-white dark:focus:ring-gray-800/70 focus:outline-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute z-0 top-0 right-0 z-30 flex items-center justify-center h-[85%] px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-4 h-4 lg:w-8 lg:h-8 rounded-full bg-black/30 dark:bg-gray-800/30 hover:bg-black/50 dark:hover:bg-gray-800/60 focus:ring-4 focus:ring-white dark:focus:ring-gray-800/70 focus:outline-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class='relative flex flex-col text-[14px] md:text-[1.2em] h-[66vw] md:w-[25vw] md:h-[40vw]'>
                    <span class='text-[34px] w-[40vw] md:w-[25vw] lg:text-[50px] inline-block '>Hellboy</span>
                    <span class='inline-block'>Sortie:2004</span>
                    <span class='inline-block h-[30vw] md:h-[20vw] text-[8px] lg:text-[12px] top-[72px] md:top-[100px] bg-[#33312E] z-10 overflow-hidden' id='description'>Né dans les flammes de l'enfer, le démon Hellboy est transporté sur Terre lors d'une sombre cérémonie célébrée par les nazis, désireux d'utiliser les forces infernales à des fins de conquête. Sauvé par le docteur Broom, Hellboy est alors élevé pour combattre les forces du Mal. Armé, possédant un bras droit en pierre, il fait équipe avec le télépathe Abe Sapien et Liz Sherman, capable de contrôler le feu...<br><button id='cacher' class='ml-[35%] text-[12px] bg-[#33312E] border-white border border-solid px-1 md:hidden'>Cacher</button></span>
                    <button  id='voirPlus' class='md:hidden'>Voir plus</button>
                    <div class='bg-[#191919] flex items-center absolute z-0 right-0 bottom-0 rounded-[10px]'>
                        <span class='text-[10px] md:text-[16px] inline-block px-2'>
                            Ajouter à ma liste
                        </span>
                        <div class='pr-1'>
                            <img src="../asset/img/logos/Vector.svg" class='w-[20px] h-[20px] md:w-[30px] md:h-[30px] lg:w-[40px] lg:h-[40px]'>
                        </div>
                    </div>
                </div>
            </div>
            <div class='flex md:flex-col justify-between md:justify-start gap-2 text-[12px] md:text-[10px] md:h-[40vw] flex-wrap md:items-end md:border-solid md:border-r-black md:border-y-black md:border-2 border-l-transparent'>
                <a href='catalogue?cat=Action' class='inline-block px-4 md:pr-1 md:pl-3 py-1 md:py-px rounded-2xl bg-[#D9D9D9] text-black'>Action</a>
                <span class='inline-block px-4 md:pr-1 md:pl-3 py-1 md:py-px rounded-2xl bg-[#D9D9D9] text-black'>Fantastique</span>
                <span class='inline-block px-4 md:pr-1 md:pl-3 py-1 md:py-px rounded-2xl bg-[#D9D9D9] text-black'>Sombre</span>
            </div>
            <div class='flex md:flex-col gap-4 md:items-center'>
            <div class='grid grid-cols-1 w-[100px] xl:w-[200px] text-center'>
                    Réalisateurs
                    <div class='text-[10px] max-h-[110px] overflow-scroll flex flex-col items-center'>
                        <a href='person.php?person=guillermo_del_toro'>
                            <img src="../asset/img/realisateurs/guillermo_del_toro.webp" alt="Guillermo Del Toro">
                            <span class='text-center'>Guillermo Del Toro</span>
                        </a>
                    </div>
                </div>
                <div class='flex flex-col items-center'>
                    Acteurs
                    <div class='grid w-[160px] lg:w-[230px] xl:w-[330px] max-h-[110px] overflow-scroll'>
                        <div class='grid grid-cols-2 grid-rows-[40px] lg:grid-rows-[70px] gap-x-[10px] text-[10px] text-center'>
                            <a href='person.php?person=david_harbour' class='overflow-hidden'>
                                <img src='../asset/img/acteurs/david_harbour.jpg'>
                            </a>
                            <a href='person.php?person=milla_jovovich' class='overflow-hidden'>
                                <img src='../asset/img/acteurs/milla_jovovich.webp'>
                            </a>
                            <a href='person.php?person=david_harbour'>David harbour</a>
                            <a href='person.php?person=milla_jovovich'>Milla Jovovich</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class='flex-col'>
            <span class='ml-[9px]'>Films liés</span>
            <div id="default-carousel" class="relative w-full h-[37vw] lg:h-[24vw] mb-10 z-0" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative z-0 h-[36vw] overflow-hidden rounded-lg ">
                    <!-- Item 1 -->
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
                <div class="absolute z-0 z-30 flex space-x-3 -translate-x-1/2 bottom-0 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute z-0 top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-5 h-5 rounded-full md:w-10 md:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute z-0 top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-5 h-5 rounded-full md:w-10 md:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
            <div class='max-h-[100px] md:max-h-[200px] lg:h-auto lg:max-h-[400px] overflow-y-scroll'>
                <div class='grid grid-cols-[50px_1fr] md:grid-cols-[70px_1fr] relative'>
                    <div class='flex flex-col'>
                        <img src='../asset/img/avatar/user_avatar.png'>
                        <span class='text-[12px]'>Pseudo</span>
                    </div>
                    <div class='ml-2 '>
                        <div class='inline-block h-0 w-0 border-b-[10px] ml-2 border-b-[#1CD4E1] -mb-2 border-r-[9px] border-solid border-r-transparent'></div>
                        <div class='bg-[#1CD4E1] text-black rounded-lg w-fit text-[10px] md:text-[14px] px-2 py-1'>Super film !</div>
                    </div>
                </div>
                <div class='grid grid-cols-[50px_1fr] md:grid-cols-[70px_1fr] relative'>
                    <div class='flex flex-col'>
                        <img src='../asset/img/avatar/user_avatar.png'>
                        <span class='text-[12px]'>Pseudo</span>
                    </div>
                    <div class='ml-2 '>
                        <div class='inline-block h-0 w-0 border-b-[10px] ml-2 border-b-[#1CD4E1] -mb-2 border-r-[9px] border-solid border-r-transparent'></div>
                        <div class='bg-[#1CD4E1] text-black rounded-lg w-fit text-[10px] md:text-[14px] px-2 py-1'>Super film !</div>
                    </div>
                </div>
                <div class='grid grid-cols-[50px_1fr] md:grid-cols-[70px_1fr] relative'>
                    <div class='flex flex-col'>
                        <img src='../asset/img/avatar/user_avatar.png'>
                        <span class='text-[12px]'>Pseudo</span>
                    </div>
                    <div class='ml-2 '>
                        <div class='inline-block h-0 w-0 border-b-[10px] ml-2 border-b-[#1CD4E1] -mb-2 border-r-[9px] border-solid border-r-transparent'></div>
                        <div class='bg-[#1CD4E1] text-black rounded-lg w-fit text-[10px] md:text-[14px] px-2 py-1'>Super film !</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include("footer.php");
    ?>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="../asset/script.js"></script>
</body>
</html>