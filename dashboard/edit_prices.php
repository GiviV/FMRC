<?php
    session_start();
    include('index.php');
    require_once 'config/connect.php';
    $prices_id = $_GET['id']; 
    $prices = mysqli_query($connect, "SELECT * FROM `prices` WHERE `id`='$prices_id'");
    $prices = mysqli_fetch_assoc($prices);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard-style.css">
    <title>Dashboard</title>
</head>

<body>


    <main>
        <?php
            require_once '../admin/includes/add_nav.php';
        ?>
        <div></div>

        <div class="dashboard-content">

            <div class="add-title">
               <a href="news-list.php">  
                    <img src="img/arrow-left.svg" alt="Back">
                </a>

                <h2>edit prices</h2>
            </div>

            <form action="vendor-price/edit.php" class="add-doc-form" method="post">

                <div class="forms-container">
                    <div class="">
                        <input type="hidden" name="id" value="<?=$prices_id?>">
                        <input type="text" placeholder="title" name="title" value="<?=$prices['title']?>">
                        <input type="number" placeholder="price" name="price" value="<?=$prices['price']?>"> </input>
                    </div>
                </div>

                <button class="save-btn" type="submit">Save</button>
            </form>

        </div>

    </main>

</body>

</html>