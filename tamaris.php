<?php
        require_once 'includes/header.php';
?>



    <section class="container">


        <div class="partner-about-txt">

            <div class="part-name">
                <img src="imgs/tamaris-blue.png" alt="Tamaris">
                 <p class="gilroy-40-blue">თამარის დასახლების საოჯახო მედიცინის ცენტრი</p> 
            </div>


            <div class="partner-content">

                <div>
                    <p class="gilroy-dark-20">
            
                  
                  
                  Tamari Settlement Family Medicine Center combines different directions: family medicine - services provided by the universal health care program. <br>
                  Oncology - in West Georgia,In addition, the Department of Nuclear Medicine interacts with us, <br>
                  where with the involvement of highly qualified specialists, you can undergo PET/CT-positron-emission computed tomography, which is the gold standard for the diagnosis of oncological pathology. <br>
                  Radiation therapy department, where our patients will be served by highly experienced local and guest specialists.  <br>
                  Laboratory - our clinic operates a molecular diagnostics laboratory with <strong>ISO9001:2015</strong> certificate, which performs research in various directions, Among them, oncogenotyping, which is important in the process of planning chemotherapy for oncological pathologies.
                  Rehabilitation - Ken Walker Rehabilitation Center, high-tech research, a dedicated team of professionals and all services in one place. 
                    </p>
                   
                </div>

                <img src="imgs/partner-img.png" alt="Partner">

            </div>
          


         
            <div class="partner-contact-box">

                <div>
                    <img src="imgs/call-4.svg" alt="Call">
                  <a href="tel:+995596226060"> <p>+995 596 22 60 60</p></a> 
                </div>
     
         
    
                <div>
                    <img src="imgs/location-1.svg" alt="Location">
                    <a href="#"><p>Batumi, Tbeti St. 4</p></a>
                </div>

    
              
            </div>
        </div>

       
    </section>

    <?php
             require_once 'includes/footer.php';
            ?>

    <script>
        function openClose() {
            document.getElementById("mobile-nav").classList.toggle("hidden");
            document.getElementById("menu-opener").classList.toggle("close");
        }
    </script>

    <script>
        function dissapear() {
            document.getElementById("scroll-down").classList.add("dissapear");
            setTimeout(function () { document.getElementById("scroll-down").classList.remove('dissapear') }, 500);
        }
    </script>
</body>

</html>