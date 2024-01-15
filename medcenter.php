<?php
        require_once 'includes/header.php';
?>



    <section class="container">


        <div class="partner-about-txt">

            <div class="part-name">
                <img src="imgs/medcenter-logo.png" alt="Medcenter">
                <!-- <p class="gilroy-40-blue">Medcenter</p> -->
            </div>


            <div class="partner-content">

                <div>
                    <p class="gilroy-dark-20">
                        In 1945, the first oncology institution was established in Adjara under the name Onco Point. In 1951,
                        the Adjara Oncology Dispensary was founded on the basis of the N 1 hospital. Since 1965, the Adjara
                        Oncological Dispensary has been adding an inpatient facility and operation, the safety of the inpatient
                        facility (Pushkin N118) as LLC, History, Oncology Center of the Autonomous Republic of Adjara. In 2012,
                        an inpatient facility was opened. As a high-tech, multi-disciplinary medical institution named
                        "Medcenter".
                    </p>
                    <br>
                    <p class="gilroy-dark-20">
                        "Medcenter" is a high-tech, multi-profile treatment-diagnostic medical institution. The hospital has
                        introduced diagnostic studies according to international standards, which is very important in the
                        medical field, and all this allows the population to receive services according to international
                        standards without leaving the country.
                    </p>
                </div>

                <img src="imgs/partner-img.png" alt="Partner">

            </div>
          


            <ul class="advantage">
                <li>
                    <p class="gilroy-40-blue">Advantages</p>
                </li>
                <li>
                    <img src="imgs/check.svg" alt="Check">
                    <p class="gilroy-dark-20"> Location</p>
                </li>

                <li>
                    <img src="imgs/check.svg" alt="Check">
                    <p class="gilroy-dark-20"> Pre-registration system for the patient</p>
                </li>

                <li>
                    <img src="imgs/check.svg" alt="Check">
                    <p class="gilroy-dark-20">All kinds of high-tech, most precise laboratory studies and the
                        possibility of sending to electronic mail</p>
                </li>

                <li>
                    <img src="imgs/check.svg" alt="Check">
                    <p class="gilroy-dark-20">Ultra-modern equipment</p>
                </li>

                <li>
                    <img src="imgs/check.svg" alt="Check">
                    <p class="gilroy-dark-20">Highly qualified staff</p>
                </li>

                <li>
                    <img src="imgs/check.svg" alt="Check">
                    <p class="gilroy-dark-20">pleasant environment</p>
                </li>
            </ul>
            <div class="partner-contact-box">

                <div>
                    <img src="imgs/call-4.svg" alt="Call">
                  <a href="tel:+995596226060"> <p>+995 596 22 60 60</p></a> 
                </div>
    
                <div>
                    <img src="imgs/mail-1.svg" alt="Mail">
                    <a href="mailtp:info@medcenter.ge" target="_blank">  <p>info@medcenter.ge</p></a>
                </div>
    
                <div>
                    <img src="imgs/location-1.svg" alt="Location">
                    <a href="#"><p> A.Pushukini N118-120</p></a>
                </div>
               
                <div>
                    <img src="imgs/internet.svg" alt="Globe">
                    <a href="medcenter.ge" target="_blank"><p >www.medcenter.ge</p></a>
                </div>
                <div>
                    <img src="imgs/location-1.svg" alt="Location">
                    <a href="#"><p>str.Batumi, May 26</p></a>
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