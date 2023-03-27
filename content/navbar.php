<navbar class='bg-[#1CA4E1]  h-[45px] px-[20px] sticky top-[0] z-[999] inline-block flex justify-between items-center font-[MuseoModerno] '>
    <div class='flex items-center'>
        <a href='/ENWATCH' class='flex items-center'>
            <div class='md:text-[24px] lg:text-[40px] text-[#643CCE] hidden md:inline-block'>EnWatch</div>
            <img src="/ENWATCH/asset/img/logos/33312E.png" class='w-[35px] ml-[5px] h-[35px] inline-block'>
        </a>
        <div id='burgerMenu' class='translate-x-[100%] h-[100vh] md:h-auto z-20 md:translate-x-[0px] ease-out bg-[#1CA4E1] md:flex flex-col items-end top-[8.7%] hidden  md:z-auto fixed right-0 md:static text-[12px]  lg:text-[24px] flex md:flex-row ml-[50px] gap-[30px]'>
            <span class='flex gap-[5px]'><a href='/enwatch/content/catalogue.php'>Films</a><span id='dropbtn1' class='relative inline-block cursor-pointer -mt-[5px]'>
            <div id='dropmenu1' class='bg-[#643CCE] md:ease-out md:duration-500 -translate-y-[1000%]  md:w-[20vw] flex flex-col md:flex-row items-center z-20 absolute top-5 md:top-[36.5px] lg:top-[45.5px] md:rounded-b-[10px] -left-[77px] w-[108px] md:-left-[355%] text-[8px] md:text-[16px]'>
                <div class='flex flex-col w-full md:w-1/2 items-center md:rounded-bl-[10px] border border-solid border-black'>
                    <a href='categorie' class='inline-block'>action</a>
                    <a href='categorie' class='inline-block'>animation</a>
                </div>
                <div class='flex flex-col w-full  md:w-1/2 items-center md:rounded-br-[10px] border border-solid border-black'>
                    <a href='categorie' class='inline-block'>animation</a>
                    <a href='categorie' class='inline-block'>action</a>
                </div> 
            </div>
            <span class='pr-[20px] pt-1 rotate-45 bg-black rounded-lg inline-block'></span><span class='pr-[20px]  rounded-lg -ml-[8.5px] pt-1 -rotate-45 bg-black inline-block'></span></span></span>
            <span class='flex gap-[5px]'>Réalisateurs<span id='dropbtn2' class='cursor-pointer relative inline-block -mt-[5px]'>
            <div id='dropmenu2' class='-translate-y-[1000%] md:-translate-x-[0%] bg-[#643CCE] -left-[77px] w-[108px] md:w-[20vw] flex items-center z-20 absolute top-5 md:top-[36.5px] lg:top-[45.5px] md:-left-[8.5vw] text-[8px] md:text-[12px]'>
                <div class='flex flex-col w-1/2 item-center border border-solid border-black py-[10px]'>
                    <a href='/enwatch/content/person.php?person=alfred-hitchcock' class='flex flex-col items-center h-[110px]' ]>
                        <img src="/ENWATCH/asset/img/realisateurs/alfred-hitchcock.jpeg" alt="alfred hitchcock" class='w-[100px]'>
                        Alfred Hitchcock
                    </a>
                    <a href='categorie' class='flex flex-col items-center h-[110px]' ]>
                        <img src="/ENWATCH/asset/img/realisateurs/akira_kurosawa.jpg" alt='Akira Kurosawa'  class='w-[100px]'>
                        Akira Kurosawa
                    </a>
                </div>
                <div class='flex flex-col w-1/2 items-center border border-solid border-black py-[10px]'>
                    <a href='categorie' class='flex flex-col items-center h-[110px]' ]>
                        <img src="/ENWATCH/asset/img/realisateurs/guillermo_del_toro.webp" alt="Guillermo del toro" class='w-[100px]'>
                        Guillermo Del Toro
                    </a>
                    <a href='/ENWATCH/content/person.php?person=alfred_hitchcock' class='flex flex-col items-center h-[110px]' ]>
                        <img src="/ENWATCH/asset/img/realisateurs/alfred-hitchcock.jpeg" alt="alfred hitchcock" class='w-[100px]'>
                        Alfred Hitchcock
                    </a>
                </div> 
                </div> 
            <span class='pr-[20px] pt-1 rotate-45  rounded-lg bg-black inline-block'></span><span class='pr-[20px] -ml-[8.5px] pt-1 rounded-lg -rotate-45 bg-black inline-block'></span></span></span>
            <span class='flex gap-[5px]'>Acteurs<span id='dropbtn3' class='cursor-pointer relative inline-block -mt-[5px]'>
            <div id='dropmenu3' class='-translate-y-[1000%] bg-[#643CCE] -left-[77px] w-[108px] flex items-center absolute top-5 md:top-[36.5px] z-20 lg:top-[45.5px]  md:-left-[8.5vw] text-[8px] md:text-[16px]'>
                <div class='flex flex-col w-1/2 items-center border border-solid border-black'>
                    <a href='categorie' class='inline-block'>action</a>
                    <a href='categorie' class='inline-block'>animation</a>
                </div>
                <div class='flex flex-col w-1/2 items-center border border-solid border-black'>
                    <a href='categorie' class='inline-block'>animation</a>
                    <a href='categorie' class='inline-block'>action</a>
                </div> 
            </div> 
                <span class='pr-[20px] pt-1 rounded-lg rotate-45 bg-black inline-block'></span><span class='pr-[20px] -ml-[8.5px] pt-1 -rotate-45 rounded-lg bg-black inline-block'></span></span></span>
            <?php
            if (!isset($_SESSION["connected"])){
            echo"
            <div class='flex  md:hidden -ml-[12px] text-[16px] flex-col'>
                <a href='/ENWATCH/content/inscription.php'>Inscription</a>
                <a href='/ENWATCH/content/connexion.php' class='text-[#8E1CBB]'>Connexion</a>
            </div>";}
            else{
                echo"<a class='inline-block md:hidden'>
                        <span>$_SESSION[pseudo]</span>
                        <div class='rounded-full overflow-hidden w-[50px] h-[50px]'>
                            <img src='/ENWATCH/asset/img/avatar/$_SESSION[pp]' class='w-full'>
                        </div>
                    </a>";
            }
            ?>
        </div>
    </div>
    <button id='OpenBtn' class='flex flex-col justify-evenly h-[25px] md:hidden'>
        <span class='px-[10px] py-[1px] bg-white'></span>
        <span class='px-[10px] py-[1px] bg-white'></span>
        <span class='px-[10px] py-[1px] bg-white'></span>
    </button>
    <?php
            if (!isset($_SESSION["connected"])){
            echo"
            <div class='hidden md:flex -ml-[12px] text-[16px] flex-col'>
                <a href='/ENWATCH/content/inscription.php'>Inscription</a>
                <a href='/ENWATCH/content/connexion.php' class='text-[#8E1CBB]'>Connexion</a>
            </div>";}
            else{
                if ($_SESSION["role"]>=1){
                    echo "<a href='/ENWATCH/traitement/crud/admin.php'>admin</a>";
                }
                echo"
                <a class='hidden md:flex items-end text-[12px]'>
                        <span>$_SESSION[pseudo]</span>
                        <div class='rounded-full overflow-hidden w-[40px] h-[40px]'>
                            <img src='/ENWATCH/asset/img/avatar/$_SESSION[pp]' class='w-full'>
                        </div>
                    </a>";
                
            }
            ?>
</navbar>