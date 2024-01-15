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
        require_once '../admin/includes/add_nav.php';
       ?>
        <div></div>

        <div class="dashboard-content">

            <div class="add-title">
             <a href="price-list.php">
                    <img src="img/arrow-left.svg" alt="Back">
                </a>
                <h2>Add Price</h2>
            </div>

            <form action="vendor-price/create.php" class="add-doc-form" method="post">

                <div class="forms-container">
                    <div class="">
                        <input type="text" name="title">
                        <input type="number" name="price">
                    </div>
                </div>

                <button class="save-btn" type="submit">Save</button>
            </form>

        </div>

    </main>

</body>

</html>