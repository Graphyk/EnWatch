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
    <div class='bg-[#1F1E1D] text-[#1CD4E1] flex flex-col'>
        <div class='px-[20px] gap-[20px] flex flex-col font-[Kodchasan]  pt-[100px] '>
            <span class='text-[32px] lg:text-[64px]'>Bonjour,</span>
            <span class='inline-block lg:text-[48px] ml-[15vw]'>Que voulez vous regarder ?</span>
        </div>
        <span class='font-[Roboto] lg:text-[32px] inline-block ml-4 mt-5'>Nouveautés</span>
        <div id="default-carousel" class="relative w-full h-[40vw] lg:h-[24vw]" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-[40vw] overflow-hidden rounded-lg ">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class='flex w-[85vw] justify-between items-start h-[32vw] lg:h-[20vw] mx-auto overflow-hidden'>
                        <div>
                            <img src="asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
                        </div>
                        <div>
                            <img src="asset/img/affiches/asterix_et_obelix-l-empire-du-milieu.jfif" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <div>
                            <img src="asset/img/affiches/gladiator.jpg" class='w-[25vw] lg:w-[15vw]'  alt="Gladiator">
                        </div>
                        <div>
                            <img src="asset/img/affiches/matrix.jpg" class='w-[25vw] lg:w-[15vw]'  alt="matrix">
                        </div>
                        <div>
                            <img src="asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
                        </div> 
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class='flex w-[85vw] justify-between items-start h-[32vw] lg:h-[20vw] mx-auto overflow-hidden'>
                        <div>
                            <img src="asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
                        </div>
                        <div>
                            <img src="asset/img/affiches/asterix_et_obelix-l-empire-du-milieu.jfif" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <div>
                            <img src="asset/img/affiches/gladiator.jpg" class='w-[25vw] lg:w-[15vw]'  alt="Gladiator">
                        </div>
                        <div>
                            <img src="asset/img/affiches/matrix.jpg" class='w-[25vw] lg:w-[15vw]'  alt="matrix">
                        </div>
                        <div>
                            <img src="asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
                        </div> 
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class='flex w-[85vw] justify-between items-start h-[32vw] lg:h-[20vw] mx-auto overflow-hidden'>
                        <div>
                            <img src="asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
                        </div>
                        <div>
                            <img src="asset/img/affiches/asterix_et_obelix-l-empire-du-milieu.jfif" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <div>
                            <img src="asset/img/affiches/gladiator.jpg" class='w-[25vw] lg:w-[15vw]'  alt="Gladiator">
                        </div>
                        <div>
                            <img src="asset/img/affiches/matrix.jpg" class='w-[25vw] lg:w-[15vw]'  alt="matrix">
                        </div>
                        <div>
                            <img src="asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
                        </div> 
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class='flex w-[85vw] justify-between items-start h-[32vw] lg:h-[20vw] mx-auto overflow-hidden'>
                        <div>
                            <img src="asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
                        </div>
                        <div>
                            <img src="asset/img/affiches/asterix_et_obelix-l-empire-du-milieu.jfif" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <div>
                            <img src="asset/img/affiches/gladiator.jpg" class='w-[25vw] lg:w-[15vw]'  alt="Gladiator">
                        </div>
                        <div>
                            <img src="asset/img/affiches/matrix.jpg" class='w-[25vw] lg:w-[15vw]'  alt="matrix">
                        </div>
                        <div>
                            <img src="asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
                        </div> 
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class='flex w-[85vw] justify-between items-start h-[32vw] lg:h-[20vw] mx-auto overflow-hidden'>
                        <div>
                            <img src="asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
                        </div>
                        <div>
                            <img src="asset/img/affiches/asterix_et_obelix-l-empire-du-milieu.jfif" class='w-[25vw] lg:w-[15vw]'  alt="asterix et obélix">
                        </div>
                        <div>
                            <img src="asset/img/affiches/gladiator.jpg" class='w-[25vw] lg:w-[15vw]'  alt="Gladiator">
                        </div>
                        <div>
                            <img src="asset/img/affiches/matrix.jpg" class='w-[25vw] lg:w-[15vw]'  alt="matrix">
                        </div>
                        <div>
                            <img src="asset/img/affiches/matrix.jpg" class='w-[15vw] hidden lg:inline-block'  alt="matrix">
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
        <span class='font-[Roboto] lg:text-[32px] inline-block ml-4 mt-5'>Réalisateurs à la une</span>
        <div id="default-carousel" class="relative w-full h-[40vw] lg:h-[26vw]" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-[40vw] overflow-hidden rounded-lg ">
                <!-- Item 1 -->
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
                                        <img src='asset/img/affiches/hellboy.jpg' class=' inline-block'>
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
                <!-- Item 2 -->
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
                                        <img src='asset/img/affiches/hellboy.jpg' class=' inline-block'>
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
                                        <img src='asset/img/affiches/hellboy.jpg' class=' inline-block'>
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
                                        <img src='asset/img/affiches/hellboy.jpg' class=' inline-block'>
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
        <span class='font-[Roboto] lg:text-[32px] inline-block ml-4 mt-5'>Acteurs à la une</span>
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
</body>
</html>