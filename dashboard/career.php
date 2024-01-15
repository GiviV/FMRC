<?php
    session_start();
    include('index.php');
    require_once 'dashboard/config/connect.php';
    $vacancy = mysqli_query($connect, "SELECT * FROM `vacancy`");
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

            <form action="">

                <label for="fname">Full Name:</label><br>
                <input type="text" id="fname" name="fname" placeholder="Full Name"><br><br>
                <label for="phone">Phone</label><br>
                <input type="tel" id="phone" name="phone" placeholder="Phone number"><br><br>
                <label for="phone">Email</label><br>
                <input type="text" id="email" name="email" placeholder="Email"><br><br>
                <label for="date">Date of birth</label><br>
                <input type="date" id="date" name="date" class="birth-date" format="DD MMMM YYYY"><br><br>
                <label for="experience">Years of experience</label><br>
                <input type="number" id="experience" name="experience" placeholder="Date of birth" min="0"><br><br>
                <div class="double-input-popup">

                    <div class="form-group file-area">
                        <label for="images">Resume/CV </label>
                        <input type="file" name="images" id="images" required="required" multiple="multiple" />
                        <div class="file-dummy">
                            <div class="success">Great, your files are selected. Keep on.</div>
                            <div class="default">Upload file</div>
                        </div>
                    </div>

                    <div class="container-a">
                        <input type='radio' id='male' checked='checked' name='radio'>
                        <label for='male'>Male</label>
                        <input type='radio' id='female' name='radio'>
                        <label for='female'>Female</label>
                    </div>
                </div>


                <div class="popup-checkbox">
                    <input type="checkbox" name="" id="">
                    <p> Personal information provided by you will be processed and stored in accordance with the rules established by the Georgian Legislation. by sending the information to AHT you are automatically giving the consent that your personal information will stay in our Database for 2 years.</p>
                </div>


            <button class="submit">
                Send
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.7832 3.21745C20.682 3.1167 20.5541 3.04695 20.4146 3.01639C20.2751 2.98584 20.1298 2.99574 19.9957 3.04495L3.49573 9.04495C3.35343 9.09892 3.23092 9.19491 3.14447 9.32016C3.05802 9.44542 3.01172 9.59401 3.01172 9.7462C3.01172 9.89839 3.05802 10.047 3.14447 10.1722C3.23092 10.2975 3.35343 10.3935 3.49573 10.4474L10.6957 13.3274L13.5757 20.5275C13.6298 20.6635 13.7226 20.7807 13.8425 20.8647C13.9625 20.9487 14.1044 20.9957 14.2507 20.9999C14.4023 20.9968 14.5494 20.9479 14.6725 20.8595C14.7957 20.7711 14.8892 20.6475 14.9407 20.5049L20.9407 4.00495C20.9918 3.87226 21.0042 3.72777 20.9763 3.58834C20.9484 3.44891 20.8814 3.32028 20.7832 3.21745ZM14.2507 18.15L12.1582 12.9L15.7507 9.30745L14.6932 8.24995L11.0707 11.8724L5.85073 9.74995L18.9982 5.00245L14.2507 18.15Z" fill="#039ED6"/>
                    </svg>
                    
            </button>

            </form>

        </div>

    </div>


    <?php
        require_once 'includes/header.php';
    ?>

    <div class="container career-section">
        <div class="search-title">
            <p class="gilroy-dark-48">Right space for your career</p>

            <div class="search-box">
                <input type="text" class="search-input" placeholder="Search Department...">

                <button class="search-button">
                    <img src="imgs/search.svg" alt="">
                </button>
            </div>
        </div>


        <section class="careers" id="careers">
            <?php 
                foreach($vacancy as $item){
            ?>
            <div class="vacancy">
                <p><?= $item[1] ?></p>
                <a href="vacancy.php"> <button >See more</button></a>
            </div>
            <?php } ?>
        </section>

    </div>



    <footer>

        <div class="footer-content">
            <div class="footer-intro">
                <div class="footer-logo">
                    <img src="imgs/logo-white.png" alt="Sailors">
                    <span>
                        <p class="gilroy-white-24">Sailors &nbsp; &#9679</p>
                        <p class="gilroy-white-24-t">Family Medical Regional Center LTD.</p>
                    </span>
                </div>


                <div class="footer-info">
                    <a href="https://www.google.com/maps/place/33+%E1%83%9C%E1%83%98%E1%83%99%E1%83%9D%E1%83%9A%E1%83%9D%E1%83%96+%E1%83%91%E1%83%90%E1%83%A0%E1%83%90%E1%83%97%E1%83%90%E1%83%A8%E1%83%95%E1%83%98%E1%83%9A%E1%83%98+%E1%83%A5%E1%83%A3%E1%83%A9%E1%83%90,+%E1%83%91%E1%83%90%E1%83%97%E1%83%A3%E1%83%9B%E1%83%98/@41.6484503,41.6355575,17z/data=!4m5!3m4!1s0x4067863fcacc141b:0xada29649bebbb04c!8m2!3d41.6482912!4d41.6382472"
                        target="_blank">
                        <div class="contact-info">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.8867 6.97769C13.1945 6.97769 12.5178 7.18296 11.9422 7.56755C11.3667 7.95213 10.918 8.49876 10.6531 9.1383C10.3882 9.77784 10.3189 10.4816 10.454 11.1605C10.589 11.8394 10.9224 12.4631 11.4118 12.9526C11.9013 13.442 12.525 13.7754 13.2039 13.9104C13.8828 14.0455 14.5866 13.9762 15.2261 13.7113C15.8657 13.4464 16.4123 12.9978 16.7969 12.4222C17.1814 11.8466 17.3867 11.1699 17.3867 10.4777C17.3857 9.54976 17.0166 8.66013 16.3604 8.00398C15.7043 7.34784 14.8147 6.97875 13.8867 6.97769ZM13.8867 12.2277C13.5406 12.2277 13.2023 12.1251 12.9145 11.9328C12.6267 11.7405 12.4024 11.4672 12.2699 11.1474C12.1375 10.8276 12.1028 10.4757 12.1703 10.1363C12.2379 9.79682 12.4045 9.485 12.6493 9.24025C12.894 8.99551 13.2058 8.82884 13.5453 8.76132C13.8848 8.69379 14.2366 8.72845 14.5564 8.8609C14.8762 8.99336 15.1495 9.21766 15.3418 9.50544C15.5341 9.79323 15.6367 10.1316 15.6367 10.4777C15.6362 10.9417 15.4516 11.3865 15.1236 11.7145C14.7955 12.0426 14.3507 12.2272 13.8867 12.2277Z"
                                    fill="#EBEBEB" />
                                <path
                                    d="M20.6111 3.74691C18.9482 2.08444 16.7284 1.09686 14.3802 0.974781C12.032 0.852704 9.72175 1.60478 7.89543 3.08587C6.06911 4.56695 4.85614 6.67204 4.49064 8.99485C4.12513 11.3177 4.633 13.6935 5.91622 15.6639L12.5283 25.8146C12.6755 26.0405 12.8767 26.2261 13.1136 26.3545C13.3506 26.483 13.616 26.5503 13.8855 26.5503C14.1551 26.5503 14.4204 26.483 14.6574 26.3545C14.8944 26.2261 15.0956 26.0405 15.2427 25.8146L21.8551 15.6639C23.0457 13.8361 23.5719 11.6546 23.3455 9.48491C23.119 7.31527 22.1536 5.28942 20.6111 3.74691ZM20.3888 14.7087L13.8856 24.6919L7.38228 14.7087C5.39166 11.6528 5.8186 7.56328 8.39745 4.98433C9.11815 4.2636 9.97375 3.6919 10.9154 3.30184C11.8571 2.91179 12.8663 2.71103 13.8856 2.71103C14.9048 2.71103 15.9141 2.91179 16.8557 3.30184C17.7974 3.6919 18.653 4.2636 19.3737 4.98433C21.9525 7.56328 22.3794 11.6528 20.3888 14.7087Z"
                                    fill="#EBEBEB" />
                            </svg>
                            <p>Batumi, Baratashvili 33</p>
                        </div>
                    </a>
                    <a href="tel:0422277303">
                        <div class="contact-info">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.59955 3.4827L9.78316 3.10429C10.8931 2.75009 12.0789 3.32319 12.5541 4.44301L13.5001 6.67383C13.9115 7.64515 13.6827 8.78806 12.9347 9.49867L10.8502 11.4765C10.9789 12.6601 11.3771 13.825 12.0437 14.9712C12.6767 16.0802 13.5258 17.0509 14.5407 17.8258L17.0443 16.9898C17.9926 16.6741 19.0266 17.0382 19.6074 17.8929L20.9637 19.8839C21.6402 20.8783 21.5181 22.2489 20.6788 23.0915L19.7801 23.9946C18.8847 24.8934 17.6054 25.2201 16.4228 24.8504C13.6288 23.9792 11.0625 21.3931 8.71945 17.0921C6.37312 12.7844 5.54481 9.12796 6.23562 6.12713C6.52602 4.86431 7.42473 3.8578 8.59955 3.4827Z"
                                    fill="#EBEBEB" />
                            </svg>
                            <p>0 422 277 303</p>
                        </div>
                    </a>
                </div>

                <div class="footer-social">
                    <a href="">
                        <img src="imgs/instagram-w.svg" alt="">
                    </a>
                    <a href="">
                        <img src="imgs/facebook-w.svg" alt="">
                    </a>
                </div>

            </div>


            <div class="footer-menu">
                <p class="gilroy-white-24">Menu</p>
                <ul>
                    <a href="#">
                        <li>Home</li>
                    </a>
                    <a href="#">
                        <li>About Us</li>
                    </a>
                    <a href="#">
                        <li>Services</li>
                    </a>
                    <a href="#">
                        <li>Doctors</li>
                    </a>
                    <a href="#">
                        <li>Contact</li>
                    </a>
                    <a href="#">
                        <li>Careers</li>
                    </a>
                    <a href="#">
                        <li>Prices</li>
                    </a>


                </ul>
                <a href="#"> <button class="btn-primary">make an appointment</button></a>

            </div>

        </div>

        <div class="footer-footer">
            <p> &#169; Copyrights 2022</p>
        </div>
    </footer>




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