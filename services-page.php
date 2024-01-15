<?php
require_once 'dashboard/config/connect.php';
    $service_id = $_GET['id'];
  $service = mysqli_query($connect, "SELECT * FROM `services` WHERE `id`='$service_id'");
    $service = mysqli_fetch_assoc($service);
?>


     <?php
        require_once 'includes/header.php';
    ?>
    
    <main>
        <div class="container">
            <div class="service-page">
                <div class="serviceName">
                    <a href="departments.php">
                        <svg width="33" height="30" viewBox="0 0 33 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M33 14.9999C33 15.5303 32.7893 16.0391 32.4142 16.4141C32.0391 16.7892 31.5304 16.9999 31 16.9999L7.828 16.9999L16.416 25.5839C16.7915 25.9595 17.0025 26.4688 17.0025 26.9999C17.0025 27.531 16.7915 28.0404 16.416 28.4159C16.0405 28.7915 15.5311 29.0024 15 29.0024C14.4689 29.0024 13.9595 28.7915 13.584 28.4159L1.584 16.4159C1.39774 16.2301 1.24997 16.0094 1.14915 15.7664C1.04832 15.5235 0.996422 15.263 0.996422 14.9999C0.996422 14.7368 1.04832 14.4764 1.14915 14.2334C1.24997 13.9904 1.39774 13.7697 1.584 13.5839L13.584 1.58392C13.9595 1.20837 14.4689 0.997391 15 0.997391C15.5311 0.997391 16.0405 1.20837 16.416 1.58392C16.7915 1.95946 17.0025 2.46881 17.0025 2.99992C17.0025 3.53102 16.7915 4.04037 16.416 4.41592L7.828 12.9999L31 12.9999C31.5304 12.9999 32.0391 13.2106 32.4142 13.5857C32.7893 13.9608 33 14.4695 33 14.9999Z"
                                fill="#0D285B" />
                        </svg>
                    </a>
                    <h2><?= $service['title']?></h2>
                </div>
                <div class="service-info">
                    <p class="gilroy-dark-18 ">
                        <?= $service['text']?>
                    </p>
                    <img src="imgs/services-img.jpg" alt="service">
                </div>

            </div>
        </div>
    </main>
    
        <?php
        require_once 'includes/footer.php';
    ?>

</body>

</html>