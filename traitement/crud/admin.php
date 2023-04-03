<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link src='../../asset/style/reset.css' rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Kodchasan:ital@0;1&family=MuseoModerno&family=Roboto&display=swap');
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php include('../../content/navbar.php')
?>
<div class='flex flex-col gap-10 my-5 align-center w-full'>
    <div class='flex gap-3 justify-center'>
        <a href='admin_film.php' class='text-center w-[100px] py-1 bg-[#1CA4E1] rounded-sm'>
            Film
        </a>
        <a href='admin_realisateur.php' class='text-center w-[100px] py-1 bg-[#1CA4E1] rounded-sm'>
            Realisateurs
        </a>
    </div>
    <div class='flex gap-3 justify-center'>
        <a href='admin_acteur.php' class='text-center w-[100px] py-1 bg-[#1CA4E1] rounded-sm'>
            Acteurs
        </a>
        <a href='admin_utilisateur.php' class='text-center w-[100px] py-1 bg-[#1CA4E1] rounded-sm'>
            Utilisateurs
        </a>
    </div>
    <div class='flex justify-center'>
        <a href='admin_categorie.php' class='text-center w-[100px] py-1 bg-[#1CA4E1] rounded-sm'>
            Catégories
        </a>
    </div>
</div>
<?php include('../../content/footer.php')
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="../../asset/script.js"></script>