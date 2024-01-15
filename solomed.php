
<?php
        require_once 'includes/header.php';
?>



    <section class="container">


        <div class="partner-about-txt">

            <div class="part-name">
                <img src="imgs/solomed.png" alt="Solomed">
                <p class="gilroy-40-blue">Solomed</p>
            </div>


        
          


             <ul class="advantage">

                <li>
                    <p class="gilroy-40-blue">Advantages</p>
                </li>
                <li>
                    <img src="imgs/check.svg" alt="Check">
                    <p class="gilroy-dark-20">High-quality VIP service;</p>
                </li>

                <li>
                    <img src="imgs/check.svg" alt="Check">
                    <p class="gilroy-dark-20">Full outpatient service; </p>
                </li>

                <li>
                    <img src="imgs/check.svg" alt="Check">
                    <p class="gilroy-dark-20">Diagnosis and treatment;</p>
                </li>

                <li>
                    <img src="imgs/check.svg" alt="Check">
                    <p class="gilroy-dark-20">Everything in one space;</p>
                </li>

                <li>
                    <img src="imgs/check.svg" alt="Check">
                    <p class="gilroy-dark-20">Team of professionals;</p>
                </li>

                <li>
                    <img src="imgs/check.svg" alt="Check">
                    <p class="gilroy-dark-20"> Ultra-modern technologies and laboratory; </p>
                </li>

                <li>
                    <img src="imgs/check.svg" alt="Check">
                    <p class="gilroy-dark-20">Plastic surgery;</p>
                </li>

                <li>
                    <img src="imgs/check.svg" alt="Check">
                    <p class="gilroy-dark-20">Hair transplantation;</p>
                </li>
            </ul> 
            <div class="partner-contact-box">

                <div>
                    <img src="imgs/call-4.svg" alt="Call">
                  <a href="tel:+995555774400"> <p>+995 555 77 44 00</p></a> 
                </div>
    
           
    
                <div>
                    <img src="imgs/location-1.svg" alt="Location">
                    <a href="#"><p>26 May st.74</p></a>
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