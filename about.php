<?php
        require_once 'includes/header.php';
    ?>
   
   
   <div class="container about-us">
        <section>

        <div class="abt-main">
            <img src="imgs/line-l.png" alt="Line">
            <p class="gilroy-dark-48">About Us</p>
            <img src="imgs/line-l.png" alt="Line">
        </div>
        
         <p class="gilroy-dark-20">

        
            <div class="about-txt">


                <div class="about-about">
              

                <div class="abt-title">
                    <p class="gilroy-blue-32">History</p>
                    <img src="imgs/line-l.png" alt="Line">
                </div>
                <div class="history">
                    <img src="imgs/old-clinic.jpg" alt="Old Clinic">
                    <p class="gilroy-dark-20">
                        The Regional Center of Family Medicine was founded in 1937 under the name of the Children's Polyclinic, and since 2005 it has maintained its profile and has become one of the leading polyclinics of the region under the name of the Regional Center of Family Medicine.
                        <br><br>
                    In 2016, the "Regional Center of Family Medicine" was privatized, the service area was expanded and the quality of medical services was increased, new plenty doctors were added to the medical institution for both children and adults.                    </p>
                </div>

                <div class="abt-title">
                    <p class="gilroy-blue-32">Now</p>
                    <img src="imgs/line-l.png" alt="Line">
                </div>
                <div class="history-reverse">
                    <p class="gilroy-dark-20">
                   Currently, the medical facility is temporarily located at Baratshvili 33 (formerly David Hotel) and provides full outpatient services to the population.

                            <br>
The regional center of family medicine is a place where your health is in safe hands, the main value for us is the patient and his interests, for us your trust is a special responsibility.
                        </p>
                    <img src="imgs/current.png" alt="Current Clinic" class="current-clinic">
                </div>

                <div class="abt-title">
                    <p class="gilroy-blue-32">Future</p>
                    <img src="imgs/line-l.png" alt="Line">
                </div>

                <div class="history">
                    <img src="imgs/new-clinic.jpeg" alt="New Clinic">
                    <p class="gilroy-dark-20">
                 
From 2022, a new clinic is building on the territory of the regional center of family medicine, where a new medical center will be built taking into account modern standards.                </div>
            
            </div>
               
            </div>

            <div class="abt-title">
                <p class="gilroy-blue-32">Our Vision</p>
                <img src="imgs/line-l.png" alt="Line">
            </div>

            <div class="history">
                <!--<img src="imgs/1.png" alt="Line">-->
                <p class="gilroy-dark-20">
                   With a long professional past, a long experience of searching for better, the latest approaches and technology, the most modern equipment, Georgian goodwill, we came to this day, we came with the ambition to be the most reliable, quality and sought-after medical center.<br>
                   We are ready to provide quality medical services throughout the region,<br>
                   We gained the trust and recognition of the region, which is a great responsibility for us.
                </p>
            </div>


            <!--  this is achievements to add there-->
            <div class="achivement-container">

                <div class="abt-title">
                    <p class="gilroy-blue-40">Our Achievements</p>
                    <img src="imgs/line-l.png" alt="Line">
                </div>
                <div class="achievement">
                    <img src="imgs/iso.png" alt="Iso">

                    <div >
                        <p class="gilroy-blue-32">We have implemented a quality system</p>
                        <p class="gilroy-blue-32">ISO 9001:2015 certificate</p>
                        <p class="gilroy-dark-20">
                            Quality management system (Quality Management System) is a means of controlling the activities of the organization, which is directly or indirectly related to the achievement of goals.


                        </p>
                    </div>      
                </div>

                <div class="achievement">

                    <div>
                        <p class="gilroy-blue-32">ISO 9001:2015 certificate</p>
                        <p class="gilroy-dark-20">
                            More broadly, it includes organizational structure along with planning,Information about current processes, resources, and documentation used to achieve company goals (for example, meeting with customers and other stakeholders to improve the quality management system, product, or service).
                        </p>
                    </div>   
                    
                    <img src="imgs/iaf.png" alt="Iaf">

                </div>

            </div>
        </section>
    </div>
    
                <?php
             require_once 'includes/footer.php';
            ?>


    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



    <script type="text/javascript">
        $(document).ready(function () {

            $('.news-slider').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1160,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 920,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.hero-section').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,

                fade: true,
                dots: true,
                autoplay: true,
                autoplaySpeed: 2000,
                speed: 800,
            });



        });

    </script>



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