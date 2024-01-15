<?php
    require_once 'dashboard/config/connect.php';
    $doctor_id = $_GET['id']; 
    $doctor = mysqli_query($connect, "SELECT * FROM `doctors` WHERE `id`='$doctor_id'");
    $doctor = mysqli_fetch_assoc($doctor);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="imgs/logo.ico" />
    <title>Sailors</title>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

</head>

<body>
    <?php
        require_once 'includes/header.php';
    ?>
    <section class="container doctor-content">

        <div class="doctor">
            
                <div class="frame-2">              
                </div>
                <img src="imgs/doctors/<?= $doctor['img'] ?>" alt="<?=$doctor['name']?>" class="doctor-image">
              

            </div>
        <div class="doctor-txt">
            <div class="doctor-title">

               
                <div>
                    <p class="dr-name"><?= $doctor['name'] ?></p>
                  
                    <p class="dr-pos"><?=$doctor['position']?></p>
                </div>

            </div>

            <p class="gilroy-grey-16">
            <?= $doctor['about']?>
            </p>
            
            <div class="doctor-exp">

                <div class="exp-title">
                    <img src="imgs/line-s.png" alt="Line">
                    <p class="gilroy-blue-32">Experience</p>
                    <img src="imgs/line-l.png" alt="Line">
                </div>
                 <div class="doc-experience">  <p><?= $doctor['experience']?></p></div> 
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