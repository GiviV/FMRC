
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
              <a href="centers-list.php">
                    <img src="img/arrow-left.svg" alt="Back">
                </a>
                <h2>Add News</h2>
            </div>

            <form action="vendor-centers/create.php" class="add-doc-form" method='post' enctype="multipart/form-data">

                <div class="forms-container">
                    <div class="">
                        <input type="text" placeholder="Question" name="question">
                        <textarea type="text" name="answer" placeholder="Answer"></textarea>
                    </div>
                </div>

                <button class="save-btn">Save</button>
            </form>

        </div>

    </main>

</body>

</html>