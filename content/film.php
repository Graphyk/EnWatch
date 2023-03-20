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
    <div class='bg-[#33312E] text-[#1CD4E1] flex flex-col'>
        <span class='font-[Roboto] lg:text-[24px] inline-block mt-5'>Akira Kurosawa</span>
        <div id="default-carousel" class="relative w-[25vw] h-[40vw] mb-10" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-[36vw] overflow-hidden ">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../asset/img/affiches/hellboy.webp" class='w-full mx-auto inline-block'>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../asset/img/img_film/hellboy_1.jpg" class='w-full my-auto inline-block' >
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../asset/img/img_film/hellboy_2.jpg" class='w-full my-auto inline-block'>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../asset/img/img_film/hellboy_3.webp" class='w-full my-auto inline-block'>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../asset/img/img_film/hellboy_4.webp" class='w-full my-auto inline-block'>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex w-full -translate-x-1/2 h-[15%] bottom-[0%] left-1/2 overflow-hidden">
                <button type="button" class="w-[20%] h-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"> <img src="../asset/img/affiches/hellboy.webp" class='object-cover' alt=""></button>
                <button type="button" class="w-[20%] h-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"><img src="../asset/img/img_film/hellboy_1.jpg" class='object-cover' alt=""></button>
                <button type="button" class="w-[20%] h-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"><img src="../asset/img/img_film/hellboy_2.jpg" class='object-cover' alt=""></button>
                <button type="button" class="w-[20%] h-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"><img src="../asset/img/img_film/hellboy_3.webp" class='object-cover' alt=""></button>
                <button type="button" class="w-[20%] h-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"><img src="../asset/img/img_film/hellboy_4.webp" class='object-cover' alt=""></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black/30 dark:bg-dray-800/30 hover:bg-black/50 dark:hover:bg-gray-800/60 focus:ring-4 focus:ring-white dark:focus:ring-gray-800/70 focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black/30 dark:bg-gray-800/30 hover:bg-black/50 dark:hover:bg-gray-800/60 focus:ring-4 focus:ring-white dark:focus:ring-gray-800/70 focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
    <?php
        include("footer.php");
    ?>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="../asset/script.js"></script>
</body>
</html>