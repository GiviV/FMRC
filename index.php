<?php
require_once 'dashboard/config/connect.php';
$news = mysqli_query($connect, "SELECT * FROM `news`");
$news = mysqli_fetch_all($news);

$corporate = mysqli_query($connect, "SELECT * FROM `corporate`");
$corporate = mysqli_fetch_all($corporate);
$centers = mysqli_query($connect, "SELECT * FROM `centers`");
$centers = mysqli_fetch_all($centers);
?>


<!DOCTYPE html>
<!--<html lang="en">-->

<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <link rel="stylesheet" href="style.css">-->
<!--    <link rel="icon" href="imgs/logo.ico" />-->
<!--    <title>Sailors</title>-->
<!--    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />-->
<!--</head>-->

<!--<body>-->
    <?php
    require_once 'includes/header.php';
    ?>

    <section class="hero-section" >
        <div class="hero">

            <h1>"Your Health Is <br> In Relible Hands"</h1>
            <p class="gilroy-whites-16">Regional Center for Family Medicine  </p>

            <div class="hero-clicks">
                <div class="hero-btns">
                    <a href="departments.php"><button>Services</button></a>
                    <a href="prices.php"><button>Service Prices</button></a>
                </div>

                <div class="working-time">
                    <div>
                        <p>Mon-Fri: 9:00 - 18:00</p>
                        <p>Sat: 10:00 - 14:00</p>
                    </div>
                   <a href="appointment.html"><button>Make an appointmet</button></a>
                </div>
            </div>
        </div>
        <div class="hero">

           <h1>"Your Health Is <br> In Relible Hands"</h1>
            <p class="gilroy-whites-16">Regional Center for Family Medicine</p>
            <div class="hero-clicks">
                <div class="hero-btns">
                    <a href="departments.php"><button>Services</button></a>
                    <a href="prices.php"><button>Service Prices</button></a>
                </div>
                <div class="working-time">
                    <div>
                        <p>Mon-Fri: 9:00 - 18:00</p>
                        <p>Sat: 10:00 - 16:00</p>
                    </div>
                    <button>Make an appointmet</button>
                </div>

            </div>
        </div>
    </section>
    <section class="container whyUs-section" >
        <h5>Why us?</h5>
        <div class="why-us-wrapper">
            <div class="whyUs-div" data-aos="fade-right">
                    <img src="imgs/white-sailors.svg" alt="hands">
                    <h6>Highly qualified medical personnel</h6>
            </div>
            <div class="whyUs-div" data-aos="fade-left">
            <img src="imgs/white-sailors.svg" alt="hands">
                    <h6>High-quality diagnostics</h6>
            </div>
            <div class="whyUs-div" data-aos="fade-right">
            <img src="imgs/white-sailors.svg" alt="hands">
                    <h6>Affordable prices</h6>
            </div>

            <div class="whyUs-div" data-aos="fade-left">
            <img src="imgs/white-sailors.svg" alt="hands">
                    <h6>State programs - universal health care</h6>
            </div>
        </div>
    </section>


    <div class="news-section ">

        <section>
            <h3>News</h3>
            <div class="news-container news-slider">
                <?php
                foreach ($news as $item) {
                ?>
                    <a class="news" height="300px" href="new.php?id=<?= $item[0] ?>" data-aos="fade-up">
                        <img src="imgs/<?= $item[3] ?>" alt="News" class="news-img" height="200px">
                        <div>
                            <span class="news-date">
                                <img src="imgs/calendar-blue.svg" alt="Calendar">
                                <p><?= $item[2] ?></p>
                            </span>
                            <p class="gilroy-dark-20"><?= $item[1] ?></p>
                            <p class="gilroy-grey-16"><?= mb_substr($item[4], 0, 40) . '...' ?></p>
                        </div>
                    </a>
                <?php
                }
                ?>
            </div>
        </section>
    </div>

    <section class="counts">

        <div class="count-content">
            <div data-aos="fade-right">
                <p class="gilroy-white-76">99%</p>
                <p class="gilroy-blue-24">Positive Feedback</p>
            </div>
            <div data-aos="fade-up">
                <p class="gilroy-white-76">5000+</p>
                <p class="gilroy-blue-24">Satisfied Patient in Week</p>
            </div>
            <div data-aos="fade-left">
                <p class="gilroy-white-76">81</p>
                <p class="gilroy-blue-24">Professional Doctor</p>
            </div>
        </div>
    </section>


    <section class="container partners-section">

        <h5>Our Partners</h5>
        <div class="partners">

            <div class="partner" data-aos="fade-up">
                <div class="partner-box">
                    <div class="partner-name">
                        <img src="imgs/medcenter-logo.png" alt="Partner">
                    </div>
                    <div class="partner-contact">
                        <a href="tel:+995596226060">
                            <div>
                                <img src="imgs/call-4.svg" alt="Call">
                                <p>+995 596 22 60 60</p>
                            </div>
                        </a>
                        
                          <a href="mailto:info@medcenter.ge">

                            <div>
                                <img src="imgs/mail-1.svg" alt="Call">
                                <p>info@medcenter.ge</p>
                            </div>
                        </a>
                       
                       
                       <a>
                        <div>
                            <img src="imgs/location-1.svg" alt="Call">
                            <p>str.Batumi, May 26/ A.Pushukini N118-120</p>
                        </div>
                     </a>
                        
                         <a href="http://medcenter.ge/?lang=ka" target="_blank">
                        <div>
                            <img src="imgs/internet.svg" alt="Globe">
                            <p>www.medcenter.ge</p>
                        </div>

                        </a>
                    </div>
                    <a href="medcenter.php">
                        <button>See More</button>
                    </a>
                </div>

                <!-- <img src="imgs/doctor-heart.png" alt="Team"> -->
            </div>
            <div class="partner" data-aos="fade-up">
                <div class="partner-box">
                    <div class="partner-name">
                        <img src="imgs/tamaris.png" alt="Partner">
                        <p>Tamar settlement family <br> medicine center</p>
                    </div>


                    <div class="partner-contact">
                           <a href="tel:0422252008">
                            <div>
                                <img src="imgs/call-4.svg" alt="Call">
                                <p>0 422 25 20 08</p>
                            </div>
                            
                            
                        </a>
                        
                      
                           <a href="tel:+995588882323">
                            <div>
                                <img src="imgs/call-4.svg" alt="Call">
                                <p>+995 588 88 23 23</p>
                            </div>
                            
                            
                        </a>
                        
                         <a href="mailto:tamarsfmc@gmail.com">

                            <div>
                                <img src="imgs/mail-1.svg" alt="Call">
                                <p>tamarsfmc@gmail.com</p>
                            </div>
                        </a>
                       
                        
                        
                           <a href="#">
                        <div>
                            <img src="imgs/location-1.svg" alt="Call">
                            <p>Batumi, Tbeti St.4</p>
                        </div>

                        </a>
                        
                       
                    <a href="tamaris.php">
                        <button>See More</button>
                    </a>
                </div>

                <!-- <img src="imgs/doctor-heart.png" alt="Team"> -->
            </div>

        </div>
        
            <div class="partner" data-aos="fade-up">
                <div class="partner-box">
                    <div class="partner-name">
                        <img src="imgs/solomed.png" alt="Partner">
                        <p>Solomed</p>
                    </div>

                    <div class="partner-contact">
                    

                <a href="tel:++995555774400">
                            <div>
                                <img src="imgs/call-4.svg" alt="Call">
                                <p>+995 555 77 44 00</p>
                            </div>

                        </a>
                        
                         <a href="mailto:solomedinfo@gmail.com">

                            <div>
                                <img src="imgs/mail-1.svg" alt="Call">
                                <p>solomedinfo@gmail.com</p>
                            </div>
                        </a>
                       
                        
                       
                        <div>
                            <img src="imgs/location-1.svg" alt="Call">
                            <p>Batumi, 26 May St.74</p>
                        </div>
                    </div>
                    <a href="solomed.php">
                        <button>See More</button>
                    </a>
                </div>

                <!-- <img src="imgs/doctor-heart.png" alt="Team"> -->
            </div>
</div>

    </section>





  
    <section class="container">

        <div id="faqs">
            <h4>Frequently Asked Questions</h4>

         
                 <?php
                foreach ($centers as $item) {
                ?>
                   
            
                <div class="faqs" data-aos="flip-up">
                  <div class="dropdown-action" onclick="dropDown(this)" >
                    <div> <p><?= $item[1] ?></p></div>
                    <img src="imgs/faq-arrow.svg" class="drop-btn" alt="Down" >
                  </div>
                  <div class="dropdown-content">
                     <p><?= $item[2] ?></p>
                  </div>
                </div>
            
          <?php
                }
                ?>


        </div>

    </section>



    <div class="reviews-container">

        <div class="reviews-header">
            <h3 data-aos="flip-right">Comments</h3>
            <div id="review-btns" data-aos="flip-left">

            </div>
        </div>
        <div class="reviews" data-aos="flip-up">


  <div class="review" >

                <div class="review-author">

                    <img src="imgs/user.png" alt="User" class="author-img">


                    <div class="name-stars">
                        <p>Leri Kochalidze </p>
                        <div class="stars">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                        </div>
                    </div>

                </div>
                <p class="review-txt">
                    The best team in Batumi 
                </p>
            </div>

            <div class="review">

                <div class="review-author">

                    <img src="imgs/user.png" alt="User" class="author-img">


                    <div class="name-stars">
                        <p>Nana Beridze</p>
                        <div class="stars">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                        </div>
                    </div>

                </div>
                <p class="review-txt">
                    This was the first time I had used Best Heath Clinics and was surprised at how professional the whole process was for my treatment.
                </p>
            </div>
            <div class="review">

                <div class="review-author">

                    <img src="imgs/user.png" alt="User" class="author-img">


                    <div class="name-stars">
                        <p>Tamaz Tchelidze</p>
                        <div class="stars">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/half-star.png" alt="Semi Star">
                        </div>
                    </div>

                </div>
                <p class="review-txt">
                        The most reliable clinic in ❤️️our cit❤️
               </p>
            </div>

            <div class="review">

                <div class="review-author">

                    <img src="imgs/user.png" alt="User" class="author-img">


                    <div class="name-stars">
                        <p>Dato</p>
                        <div class="stars">
                        <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/half-star.png" alt="Semi Star">
                        </div>
                    </div>

                </div>
                <p class="review-txt">
                            Professional staff and ideal environment, thanks to the whole team
                    </p>
            </div>

            <div class="review">

                <div class="review-author">

                    <img src="imgs/user.png" alt="User" class="author-img">


                    <div class="name-stars">
                        <p>Saba Bakuridze</p>
                        <div class="stars">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                        </div>
                    </div>

                </div>
                <p class="review-txt">
                It is always nice to visit to your clinic. A warm friendly atmosphere where all members of staff are kind and courteous. I am particularly thankful for the kindness shown to me by everyone.
                </p>
            </div>

            <div class="review">

                <div class="review-author">

                    <img src="imgs/user.png" alt="User" class="author-img">


                    <div class="name-stars">
                        <p>Natia Faghava</p>
                        <div class="stars">
                             <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                        </div>
                    </div>

                </div>
                <p class="review-txt">
                        You are a very cool team❤️
                </p>
            </div>

            <div class="review">

                <div class="review-author">

                    <img src="imgs/user.png" alt="User" class="author-img">


                    <div class="name-stars">
                        <p>Natalia Nemsadze</p>
                        <div class="stars">
                           <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/star.png" alt="Star">
                            <img src="imgs/half-star.png" alt="Semi Star">
                        </div>
                    </div>

                </div>
                <p class="review-txt">
                    i'm setisfied with everything here, friendly doctors, cheap prices and high quality service. thanks
                </p>
            </div>
        </div>
    </div>


    <?php
    require_once 'includes/footer.php';
    ?>


    
    <script>
        function dropDown(e) {
      let dropdownContent = e.nextElementSibling;
      if (e.classList.contains("active-dropdown")) {
        dropdownContent.style.maxHeight = 0;
        e.classList.remove("active-dropdown");
      } else {
        dropdownContent.style.maxHeight = dropdownContent.scrollHeight + "px";
        e.classList.add("active-dropdown");
      }
    }

    </script>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



    <script type="text/javascript">
        $(document).ready(function() {

            $('.news-slider').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                arrows: false,
                responsive: [{
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
        $(document).ready(function() {
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


  <script type="text/javascript">
            // function reloadIt() {
            //     if (window.location.href.substr(-2) !== "ru") {
            //         window.location = window.location.href + "ru";
            //     }
            // }
            
            window.onload = function() {
            if(window.location.hash.substr(-3) !== "#ru") {
                window.location = window.location.hash + "#ru";
                window.location.reload();
            }
        }
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
            setTimeout(function() {
                document.getElementById("scroll-down").classList.remove('dissapear')
            }, 500);

        }
    </script>



    <script>
        $('.reviews').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            responsive: [{
                    breakpoint: 1160,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 820,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]

        });
    </script>



  

    <script>
        let temp = document.querySelector(".temporary");

        setTimeout(function() {
            temp.style.display = "none"
        }, 9000);
    </script>
</body>

</html>