<?php
    session_start();
    include('index.php');
    require_once 'config/connect.php';
    $services_id = $_GET['id']; 
    $services = mysqli_query($connect, "SELECT * FROM `services` WHERE `id`='$services_id'");
    $services = mysqli_fetch_assoc($services);
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
               <a href="services-list.php">  
                    <img src="img/arrow-left.svg" alt="Back">
                </a>

                <h2>edit services</h2>
            </div>

            <form action="vendor-service/edit.php" class="add-doc-form" method="post">

                <div class="forms-container">
                    <div class="">
                        <input type="hidden" name="id" value="<?=$services_id?>">
                        <input type="text" placeholder="title" name="title" value="<?= $services['title']?>">
                        <textarea name="text" id="" cols="30" rows="10"><?=$services['text']?></textarea>
                    </div>
                </div>

                <button class="save-btn" type="submit">Save</button>
            </form>

        </div>

    </main>

</body>

</html>