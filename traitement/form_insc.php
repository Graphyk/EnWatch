<form action='traitement_insc.php' method='post' class='flex flex-col items-center relative z-10 bg-[#F9F9F9] rounded-[10px] pt-[10px] lg:pt-[20px] pb-[20px] lg:pb-[40px] w-[200px] md:w-[400px] lg:w-[500px] font-[Kodchasan] mx-auto my-[20%]'>
    <!-- values:image_uploads
                pseudo
                nom
                prenom
                mdp
                verif_mdp -->
    <div>
        <label for="image_uploads">Photo de profil</label>
    </div>
    <div class='relative'>
        <div class="preview w-[100px] md:w-[200px] h-[100px] md:h-[200px] overflow-hidden rounded-full  blur-sm" >
        </div>
        <input type="file" id="image_uploads" name="image_uploads" class='absolute w-[100px] md:w-[200px] h-[100px] md:h-[200px] cursor-pointer rounded-full bottom-0 left-0 opacity-0 z-[99]' accept=".jpg, .jpeg, .png" multiple>
        <img src="../asset/img/logos/kisspng-white-house-johns-hopkins-university-website-servi-white-cross-5ab020e49e7627.0961720415214921966491.png" id='cross' alt="" class='z-0 cursor-pointer absolute left-[30px] md:top-[60px] top-[30px] md:left-[60px] w-[40px] md:w-[80px] h-[40px] md:h-[80px]'>
    </div>
    <label for="pseudo" class='w-[80%] text-[14px] md:text-[18px] lg:text-[22px]'>
        <span class='ml-2'>Pseudo</span>
        <input type="text" name='pseudo' class='bg-[#1CD4E1] rounded-[10px] w-full h-[24px] md:h-[30px] lg:h-[36px] border-transparent'>
    </label>
    <label for="nom" class='w-[80%] text-[14px] md:text-[18px] lg:text-[22px] mt-2 md:mt-4'>
        <span class='ml-2'>Nom</span>
        <input type="text" name='nom' class='bg-[#1CD4E1] rounded-[10px] w-full h-[24px] md:h-[30px] lg:h-[36px] border-transparent'>
    </label>
    <label for="prenom" class='w-[80%] text-[14px] md:text-[18px] lg:text-[22px] mt-2 md:mt-4'>
        <span class='ml-2'>Prénom</span>
        <input type="text" name='prenom' class='bg-[#1CD4E1] rounded-[10px] w-full h-[24px] md:h-[30px] lg:h-[36px] border-transparent'>
    </label>
    <label for="mdp" class='w-[80%] text-[14px] md:text-[18px] lg:text-[22px] mt-2 md:mt-4'>
        <span class='ml-2'>Mot de passee</span>
        <input type="password" name='mdp' class='bg-[#1CD4E1] rounded-[10px] w-full h-[24px] md:h-[30px] lg:h-[36px] border-transparent'>
    </label>
    <label for="verif_mdp" class='w-[80%] text-[14px] md:text-[18px] lg:text-[22px] mt-2 md:mt-4'>
        <span class='ml-2'>Verif. Mot de passe</span>
        <input type="password" name='verif_mdp' class='bg-[#1CD4E1] rounded-[10px] w-full h-[24px] md:h-[30px] lg:h-[36px] border-transparent'>
    </label>
    <input type='submit' value='Connexion' class='text-[14px] md:text-[18px] lg:text-[22px] mt-[20px] md:mt-[30px] bg-[#00B2BF] py-px px-3 md:py-1 md:px-5 rounded-[5px]'>
</form>