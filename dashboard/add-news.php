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
              <a href="news-list.php">
                    <img src="img/arrow-left.svg" alt="Back">
                </a>
                <h2>Add News</h2>
            </div>

            <form action="vendor-news/create.php" class="add-doc-form" method='post' enctype="multipart/form-data">

                <div class="forms-container">
                    <div class="">
                        <input type="text" placeholder="Title" name="title">
                        <input type="date" name="date">
                        <input type="file" name="img">
                    </div>
                    <textarea id="" cols="30" rows="10" placeholder="Text" name="text"></textarea>
                </div>

                <button class="save-btn">Save</button>
            </form>

        </div>

    </main>

</body>

</html>