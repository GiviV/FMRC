<?php

    session_start();
    include('index.php');
    
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
            require_once '../admin/includes/add_nav.php'
        ?>
        <div></div>

        <div class="dashboard-content">

            <div class="add-title">
               <a href="doctors-list.php">  
                    <img src="img/arrow-left.svg" alt="Back">
                </a>

                <h2>Add Doctor</h2>
            </div>

            <form action="vendor/create.php" class="add-doc-form" method="post" enctype="multipart/form-data">

                <div class="forms-container">
                    <div class="">
                        <input type="text" placeholder="name" name="name">
                        <input type="text" placeholder="Position" name="position">
                        <input type="file" name="img">
                    </div>
                    <textarea id="" cols="30" rows="10" placeholder="About" name="about"></textarea>
                    <textarea id="" cols="30" rows="10"  placeholder="Experience" name="experience"></textarea>
                </div>

                <button class="save-btn" type="submit">Save</button>
            </form>

        </div>

    </main>

</body>

</html>