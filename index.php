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
</head>
<body>
    <?php
        include("content/navbar.php");
    ?>
    <!-- main container -->
    <div class='bg-[#33312E] text-[#1CD4E1] flex flex-col'>
        <div class='px-[20px] gap-[20px] flex flex-col font-[Kodchasan]  pt-[100px] '>
            <span class='text-[32px]'>Bonjour,</span>
            <span class='inline-block ml-[60px]'>Que voulez vous regarder ?</span>
        </div>
            <span class='font-[Roboto] inline-block ml-4 mt-5'>Nouveautés</span>
        <div class='flex justify-between h-[32vw] items-center'>
            <div class=' inline-block relative rotate-180 w-[30px] h-[30px] bg-opacity-0 rounded-full border border-solid border-white'>
                <span class='absolute bottom-[13px] right-[8px] pr-[13px] pt-[2px] rounded-lg bg-white inline-block'></span><span class='absolute bottom-[16px] right-[7px] pr-[10px] pt-[2px] rounded-lg rotate-45 bg-white inline-block'></span><span class='absolute bottom-[10px] right-[7px] pr-[10px] pt-[2px] -rotate-45 rounded-lg bg-white inline-block'></span>
            </div>
            <div class='flex w-[80vw] justify-between items-start h-[32vw] overflow-hidden'>
                <div>
                    <img src="asset/img/affiches/asterix_et_obelix-l-empire-du-milieu.jfif" class='w-[25vw]'  alt="asterix et obélix">
                </div>
                <div>
                    <img src="asset/img/affiches/gladiator.jpg" class='w-[25vw]'  alt="Gladiator">
                </div>
                <div>
                    <img src="asset/img/affiches/matrix.jpg" class='w-[25vw]'  alt="matrix">
                </div>
            </div>
            <div class=' inline-block relative w-[30px] h-[30px] bg-opacity-0 rounded-full border border-solid border-white'>
                <span class='absolute bottom-[13px] right-[8px] pr-[13px] pt-[2px] rounded-lg bg-white inline-block'></span><span class='absolute bottom-[16px] right-[7px] pr-[10px] pt-[2px] rounded-lg rotate-45 bg-white inline-block'></span><span class='absolute bottom-[10px] right-[7px] pr-[10px] pt-[2px] -rotate-45 rounded-lg bg-white inline-block'></span>
            </div>
        </div>
        

    </div>
</body>
</html>