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
    <?php
    require_once('../traitement/form_insc.php');
    require_once('footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <script src="../asset/script.js"></script>
    <script src='../asset/script/file_pp.js'></script>
</body>