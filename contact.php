
    <?php
        require_once 'includes/header.php';
    ?>

    <div class="container contact-us">

        <p class="gilroy-dark-48">Contact Us</p>
        <form action="contactprov.php" method="post" class="appointment">
            <div class="columned-inputs">

                <div class="input-box">
                    <label for="first-name">Name</label>
                    <input type="text" name="name" placeholder="First Name" required>
                </div>

                <div class="input-box">
                    <label for="surname">Surname</label>
                    <input type="text" name="surname" placeholder="Last Name" required>
                </div>

                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Email" required>
                </div>

                <div class="input-box">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" placeholder="Phone Number" required>
                </div>
  
            </div>
            
        <!--    <div id="sent-popup">  -->
        <!--        <div class="sent-successfully">-->
        <!--            <img src="imgs/sent.svg" alt="Sent">-->
        <!--            <p>sent-successfully</p>-->
        <!--        </div>-->
        <!--</div>-->


            <div class="input-box">
                <label for="time">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your message goes here..."></textarea>
            </div>

            
            <button class="submit">
                Send
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.7832 3.21745C20.682 3.1167 20.5541 3.04695 20.4146 3.01639C20.2751 2.98584 20.1298 2.99574 19.9957 3.04495L3.49573 9.04495C3.35343 9.09892 3.23092 9.19491 3.14447 9.32016C3.05802 9.44542 3.01172 9.59401 3.01172 9.7462C3.01172 9.89839 3.05802 10.047 3.14447 10.1722C3.23092 10.2975 3.35343 10.3935 3.49573 10.4474L10.6957 13.3274L13.5757 20.5275C13.6298 20.6635 13.7226 20.7807 13.8425 20.8647C13.9625 20.9487 14.1044 20.9957 14.2507 20.9999C14.4023 20.9968 14.5494 20.9479 14.6725 20.8595C14.7957 20.7711 14.8892 20.6475 14.9407 20.5049L20.9407 4.00495C20.9918 3.87226 21.0042 3.72777 20.9763 3.58834C20.9484 3.44891 20.8814 3.32028 20.7832 3.21745ZM14.2507 18.15L12.1582 12.9L15.7507 9.30745L14.6932 8.24995L11.0707 11.8724L5.85073 9.74995L18.9982 5.00245L14.2507 18.15Z" fill="#1A4689"/>
                    </svg>
                    
            </button>

        </form>




    </div>
    <?php
    require 'includes/footer.php';
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