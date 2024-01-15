<?php
    require_once 'dashboard/config/connect.php';
    $doctors = mysqli_query($connect, "SELECT * FROM `doctors`");
    $doctors = mysqli_fetch_all($doctors);
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

    <section class="container doctors-section">
        <div class="search-title">
            <p class="gilroy-dark-48" data-aos="fade-right">Our Doctors</p>

            <form class="search-box" action="" method="get" data-aos="fade-left">
                <input type="text" name="search" class="search-input" placeholder="Search Doctor..." value="<?= $_GET['search'] ?>">
          
                <button class="search-button" type="submit">
                  <img src="imgs/search.svg" alt="Search">
                </button>
             </form>
        </div>

        


        
        <div class="doctors-container">
        <?php 
require_once 'dashboard/config/connect.php';
// DB connection  
// search 
if (isset($_GET['search'])) { 
    
    $s = trim(htmlspecialchars($_GET['search']));
    foreach($doctors as $i){  
        $s_query ="WHERE `name` LIKE '%$s%' OR `position` LIKE '%$s%' OR `id` LIKE '%$s%' ";
    }
    }
 else { 
    $s = '';
    $s_query = ''; 
} 


// get news 
    $sql_news = mysqli_query($connect, "SELECT * FROM `doctors` $s_query"); 
    
    while($row_news = mysqli_fetch_assoc($sql_news)) {
                    ?> 
            <div class="doctor" data-aos="fade-up">
            
                <div class="frame">              
                </div>
                <img src="imgs/doctors/<?= $row_news['img']?>" alt="<?= $row_news['name']?>">
                <div class="dr-info">
                    <div> 
                        <p class="dr-name"><?= $row_news['name']?></p>
                        <p class="dr-pos"><?= $row_news['position']?></p>
                     </div>

                     <a href="doctor.php?id=<?= $row_news['id']?>"><button>Read more</button></a>
                 
                 </div>

            </div>
            <?php
                        }
                 ?> 
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
<script>
    const searchInput = document.querySelector(".search-input");

    let users = [];

    searchInput.addEventListener("input", e => {
         const value = e.target.value;
         users.foreach(user => {
            const isVisible = user.name.includes(value)
            user.element.classList.toggle("hide", !isVisible)
         })
    })

    fetch("http://sailorscopy/dashboard/message.json")
    .then(res => res.json())
    .the(data => {
        users = data.map(user => {
            const card = userCar
        })
    })
</script>
</body>

</html>