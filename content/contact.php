<?php
session_start();
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
    <link src='../asset/style/style.css' rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kodchasan:ital@0;1&family=MuseoModerno&family=Roboto&display=swap');
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

</head>
<body class='bg-[#33312E]'>
<?php
require_once("navbar.php");
?>
<div class='flex flex-col items-center pb-20'>
    <div class='bg-[#1CA4E1] p-3 md:p-10 text-[10px] md:text-[16px] md:pt-2 mt-20 inline-block rounded-md'>
        <span class='flex justify-around text-[24px] md:text-[36px] w-full mb-5'>Nous contacter</span>
        <form class='flex flex-col gap-4 items-center' method='post' id='form_contact' action="../traitement/traitement_contact.php">
            <div class='flex gap-4 flex-col md:flex-row'>
                <div class='flex flex-col'>
                    <label for="email" >email</label>
                    <input type="email" name='email' class='text-[10px] md:text-[16px] p-0 md:px-[12px] md:py-[8px]' required='required'>
                    <label for="entreprise" >entreprise</label>
                    <input type="text" name='entreprise' class='text-[10px] md:text-[16px] p-0 md:px-[12px] md:py-[8px]' required='required'>
                    <label for="objet">objet</label>
                    <input type="text" name='objet' class='text-[10px] md:text-[16px] p-0 md:px-[12px] md:py-[8px]' required='required'>
                </div>
                <div class='flex flex-col'>
                    <label for='message'>votre message</label>
                    <textarea name='message' class='border border-solid' form="form_contact" class='text-[10px] md:text-[16px]' rows="7" cols="28"></textarea>
                </div>
            </div>
            <input type='submit' class='bg-slate-200 px-2 py-px rounded-md border border-solid'>
            
        </form>
    </div>
</div>
<?php
require_once("footer.php");
?>

<script src='../asset/script.js'></script>
</body>
