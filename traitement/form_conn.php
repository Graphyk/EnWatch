<form action='../traitement/traitement_conn.php' method='post' class='flex flex-col items-center bg-[#F9F9F9] rounded-[10px] pt-[10px] lg:pt-[20px] pb-[20px] lg:pb-[40px] w-[200px] md:w-[400px] lg:w-[500px] font-[Kodchasan] mx-auto my-[20%]'>
    <label for="pseudo" class='w-[80%] text-[14px] md:text-[18px] lg:text-[22px]'>
        <span class='ml-2'>Pseudo</span>
        <input type="text" name='pseudo' class='bg-[#1CD4E1] rounded-[10px] w-full h-[24px] md:h-[30px] lg:h-[36px] border-transparent'>
    </label>
    <label for="mdp" class='w-[80%] text-[14px] md:text-[18px] lg:text-[22px] mt-2 md:mt-4'>
        <span class='ml-2'>Mot de passe</span>
        <input type="password" name='mdp' class='bg-[#1CD4E1] rounded-[10px] w-full h-[24px] md:h-[30px] lg:h-[36px] border-transparent'>
    </label>
    <input type='submit' value='Connexion' class='text-[14px] md:text-[18px] lg:text-[22px] mt-[20px] md:mt-[30px] bg-[#00B2BF] py-px px-3 md:py-1 md:px-5 rounded-[5px]'>
</form>