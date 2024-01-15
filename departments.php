<?php
    require_once 'dashboard/config/connect.php';
    $services = mysqli_query($connect, "SELECT * FROM `services`");
    $services = mysqli_fetch_all($services);
?>




    <?php
        require_once 'includes/header.php';
    ?>


    <div class="container departments-section">

        <div class="search-title">
            <p class="gilroy-dark-48">Departments</p>

            <form class="search-box" method="get">
                <input type="text" class="search-input" placeholder="Search Department..." name="search" type="search" value="<?= $_GET['search'] ?>">
          
                <button class="search-button" type="submit">
                  <img src="imgs/search.svg" alt="Search">
                </button>
             </form>
        </div>
        <?php 
if (isset($_GET['search'])) { 
    
    $s = trim(htmlspecialchars($_GET['search'])); 
        $s_query ="WHERE `title` LIKE '%$s%'";
    }
 else { 
    $s = '';
    $s_query = ''; 
} 

?>

        <section>

            <div class="departments-container">
            <?php 
                            $sql_news = mysqli_query($connect, "SELECT * FROM `services` $s_query"); 

                            while($row_news = mysqli_fetch_assoc($sql_news)) {
                    ?> 
                <div class="departments">
                    <a href="services-page.php?id=<?= $row_news['id']?>">
                        <div class="department">
                            <p><?= $row_news['title']?></p>
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 20C10 19.6685 10.1317 19.3505 10.3661 19.1161C10.6005 18.8817 10.9185 18.75 11.25 18.75H25.7325L20.365 13.385C20.1303 13.1503 19.9984 12.8319 19.9984 12.5C19.9984 12.1681 20.1303 11.8497 20.365 11.615C20.5997 11.3803 20.9181 11.2484 21.25 11.2484C21.5819 11.2484 21.9003 11.3803 22.135 11.615L29.635 19.115C29.7514 19.2311 29.8438 19.369 29.9068 19.5209C29.9698 19.6728 30.0022 19.8356 30.0022 20C30.0022 20.1644 29.9698 20.3272 29.9068 20.4791C29.8438 20.6309 29.7514 20.7689 29.635 20.885L22.135 28.385C21.9003 28.6197 21.5819 28.7516 21.25 28.7516C20.9181 28.7516 20.5997 28.6197 20.365 28.385C20.1303 28.1503 19.9984 27.8319 19.9984 27.5C19.9984 27.1681 20.1303 26.8497 20.365 26.615L25.7325 21.25H11.25C10.9185 21.25 10.6005 21.1183 10.3661 20.8839C10.1317 20.6495 10 20.3315 10 20Z" fill="#0D285B"/>
                                </svg>
                            </div>
                    </a>
                            <?php } ?>
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