<?php
    require_once 'dashboard/config/connect.php';
    $news_id = $_GET['id'];
    $new = mysqli_query($connect, "SELECT * FROM `news` WHERE `id`='$news_id'");
    $new = mysqli_fetch_assoc($new);
    $news = mysqli_query($connect, "SELECT * FROM `news`");
    $news = mysqli_fetch_all($news);
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="imgs/logo.ico" />
    <title>Careers</title>

  
</head>

<body>

   <?php 
   require 'includes/header.php';
   ?>
        <div class="news-content">

            <div class="main-news">
 
                <img src="imgs/<?= $new['img']?>" class="main-news-img" alt="News Image" >

                <div class="news-info">

                      <div class="news-date">
                        <img src="imgs/calendar-blue.svg" alt="Calendar">
                        <p><?=$new['date']?></p>
                      </div>  

                      <div class="main-txt">
                        <p class="gilroy-dark-32"><?= $new['title']?></p>
                        <p class="gilroy-dark-18"><?= $new['text']?></p>
                      </div>
                      

                </div>

            </div>

            <div class="recent-news">

                <p class="gilroy-dark-32">Recent News</p>
                <?php 
                       for($i = count($news) -2;$i < count($news); $i++){
                            
                                               ?> 
                <a class="news" href="new.php?id=<?= $news[$i][0]?>">
                    <img src="imgs/<?=$news[$i][3]?>" alt="News" class="news-img">
                    <div>
                        <span class="news-date">
                            <img src="imgs/calendar-blue.svg" alt="Calendar">
                            <p><?=$news[$i][2]?></p>
                        </span>
                        <p class="gilroy-dark-20"><?=$news[$i][1]?></p>
                         <p class="gilroy-grey-16"><?= mb_substr($news[$i][4], 0, 40) . '...' ?></p>
                    </div>
                       </a>

                <?php } ?>
        </div>
        </div>

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

    <style>
        .news-content {
max-width: 1200px;
margin: auto;
display: grid;
grid-template-columns: 70% 30%;
gap:40px;
margin-top: 80px;
}



.main-news {
display: grid;
gap: 24px;
}



.main-news-img {
width: 100%;
border-radius: 12px;
}



.news-info {
display: grid;
gap:12px
}



.main-txt {
display: grid;
gap:8px
}



.gilroy-dark-32 {
font-family: 'Gilroy-Medium';
font-style: normal;
font-weight: 400;
font-size: 32px;
line-height: 39px;
color: #1A4689;
}
.recent-news {
display: flex;
flex-direction: column;
gap:20px



}
.recent-news .news{
margin: 0px;
}



.recent-news .news:nth-child(2){
margin-top: 24px;
}
.recent-news .news .gilroy-dark-20{
font-size: 18px;
line-height: 22px;
}



@media only screen and (max-width:1280px){



.news-content {
grid-template-columns: 100%;
gap:0px;
margin: 40px;
}



.recent-news {
flex-direction: row;
margin-top: 52px;
}



.recent-news .news:nth-child(2) {
margin-top: 0px;
}



.recent-news .gilroy-dark-32{
display: none;
}



}
    </style>
    <?php
    require 'includes/footer.php';
    ?>
    
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
    <script>

        function openClose() {
            document.getElementById("mobile-nav").classList.toggle("hidden");
            document.getElementById("menu-opener").classList.toggle("close");
        }

    </script>
     <script>
    let vacancy = document.getElementById("vacancy");
       let buttons = document.getElementsByClassName('apply-btn');

        document.querySelectorAll('.apply-btn').forEach((el, i) => {
            el.addEventListener('click', () => popup())
        } );

        function popup() {
            document.getElementById("popup").classList.add("hidden-popup");
            setTimeout(function(){ vacancy.style.display="none";},800);
        }

        function popdown() {
            document.getElementById("popup").classList.remove("hidden-popup");
            vacancy.style.display="grid";
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