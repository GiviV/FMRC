<?php
    require_once 'dashboard/config/connect.php';
    $vacancy_id = $_GET['id'];
    $vacancy = mysqli_query($connect, "SELECT * FROM `vacancy`  WHERE `id` = '$vacancy_id'");
    $vacancy = mysqli_fetch_all($vacancy);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="imgs/logo.ico" />
    <title>Careers</title>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

</head>

<body>

    <div class="popup-container" id="popup">

        <div class="popup">
            <div class="popup-title">
                <p>Send CV/Resume</p>
                <button onclick="popdown()"> 
                    <img src="imgs/close-popup.svg" alt="Close">
                </button>
            </div>

            <form action="dashboard/persons/persons.php" method="post"  enctype="multipart/form-data">

                <label for="fname">Full Name:</label><br>
                <input type="text" id="fname" name="name" placeholder="Full Name"><br><br>
               
            <input class="hidden-input" type="text" value="<?= $vacancy[0][1] ?>" name="job" >
              
              
              
                <label for="phone">Phone</label><br>
                <input type="tel" id="phone" name="phone" placeholder="Phone number"><br><br>
                <label for="phone">Email</label><br>
                <input type="text" id="email" name="email" placeholder="Email"><br><br>
                <label for="date">Date of birth</label><br>
                <input type="date" id="date" name="date" class="birth-date" format="DD MMMM YYYY"><br><br>
                <label for="experience">Years of experience</label><br>
                <input type="number" id="experience" name="experience" placeholder="Date of birth" min="0"><br><br>
                <input type="text" name="message" placeholder="message">
                <div class="double-input-popup">

                    <div class="form-group file-area">
                        <label for="cv">Resume/CV </label>
                        <input type="file" id="cv" name="attachment" placeholder="Attachment" />
                        <div class="file-dummy">
                            <div class="success">Great, your files are selected. Keep on.</div>
                            <div class="default">Upload file</div>
                        </div>
                    </div>

                    <div class="container-a">
                        <input type='radio' id='male' value="male" checked='checked' name='radio'>
                        <label for='male'>Male</label>
                        <input type='radio' id='female' value="female" name='radio'>
                        <label for='female'>Female</label>
                    </div>
                </div>


                <div class="popup-checkbox">
                    <input type="checkbox" name="" id="">
                    <p> Personal information provided by you will be processed and stored in accordance with the rules established by the Georgian Legislation. by sending the information to AHT you are automatically giving the consent that your personal information will stay in our Database for 2 years.</p>
                </div>


            <button class="submit" name="button">
                Send
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.7832 3.21745C20.682 3.1167 20.5541 3.04695 20.4146 3.01639C20.2751 2.98584 20.1298 2.99574 19.9957 3.04495L3.49573 9.04495C3.35343 9.09892 3.23092 9.19491 3.14447 9.32016C3.05802 9.44542 3.01172 9.59401 3.01172 9.7462C3.01172 9.89839 3.05802 10.047 3.14447 10.1722C3.23092 10.2975 3.35343 10.3935 3.49573 10.4474L10.6957 13.3274L13.5757 20.5275C13.6298 20.6635 13.7226 20.7807 13.8425 20.8647C13.9625 20.9487 14.1044 20.9957 14.2507 20.9999C14.4023 20.9968 14.5494 20.9479 14.6725 20.8595C14.7957 20.7711 14.8892 20.6475 14.9407 20.5049L20.9407 4.00495C20.9918 3.87226 21.0042 3.72777 20.9763 3.58834C20.9484 3.44891 20.8814 3.32028 20.7832 3.21745ZM14.2507 18.15L12.1582 12.9L15.7507 9.30745L14.6932 8.24995L11.0707 11.8724L5.85073 9.74995L18.9982 5.00245L14.2507 18.15Z" fill="#1A4689"/>
                    </svg>   
            </button>
            </form>
        </div>
    </div>

   <?php
    require 'includes/header.php';
   ?>

        <section class="vacancy-txt container" id="vacancy">
                <?php
                foreach($vacancy as $item){
                ?>
            <div class="vacancy-title">
                <p class="gilroy-dark-48"><?= $item[1] ?></p>
            </div>

            <div class="vacancy-about"> 
                <p class="gilroy-dark-18-b">Requirements</p>
                
                <p class="gilroy-dark-18 "><?= $item[3]?></p>
            
            </div>
            <div class="vacancy-about"> 
                <p class="gilroy-dark-18-b">Functions:</p>
                <p class="gilroy-dark-18 "><?= $item[2]?></p>
            
            </div>
            <div class="vacancy-about"> 
                <p class="gilroy-dark-18-b">Personal abilities:</p>
                <p class="gilroy-dark-18 "><?= $item[4]?></p>
            
            </div>
                    <?php } ?>
            <button class="apply-btn">Apply now</button>
        </section>

    </div>


<?php 
require 'includes/footer.php';
?>



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