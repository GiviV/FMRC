<?php
    session_start();
    include('index.php');
    require_once 'config/connect.php';
    $vacancys_id = $_GET['id']; 
    $vacancy = mysqli_query($connect, "SELECT * FROM `vacancy` WHERE `id`='$vacancys_id'");
    $vacancy = mysqli_fetch_assoc($vacancy);
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
               <a href="doctors-list.php">  
                    <img src="img/arrow-left.svg" alt="Back">
                </a>

                <h2>edit Vacancy</h2>
            </div>

            <form action="vendor-vacancy/edit.php" class="add-doc-form" method="post" enctype="multipart/form-data">

            <div class="forms-container">
                    <div class="">
                        <input type="hidden" name="id" value="<?=$vacancys_id?>">
                        <input type="text" placeholder="Job title" name="title" value="<?= $vacancy['name']?>">
                        <input id="" cols="30" rows="10" placeholder="Functions" name="func" value="<?= $vacancy['functions']?>"></input>

                    </div>
                    <input name="req" id="" cols="30" rows="10" placeholder="Requirements" value="<?= $vacancy['requirements']?>"></input>
                    <input name="pres" id="" cols="30" rows="10" placeholder="Personal Abilities" value="<?= $vacancy['personal']?>"></input>

                <button class="save-btn" type="submit">Save</button>
            </form>

        </div>

    </main>

</body>

</html>