<?php
    require_once 'config/connect.php';
    $corporate_id = $_GET['id']; 
    $corporate = mysqli_query($connect, "SELECT * FROM `corporate` WHERE `id`='$corporate_id'");
    $corporate = mysqli_fetch_assoc($corporate);
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
               <a href="corporate-list.php">  
                    <img src="img/arrow-left.svg" alt="Back">
                </a>

                <h2>edit Corporate</h2>
            </div>

            <form action="vendor-corporate/edit.php" class="add-doc-form" method="post" enctype="multipart/form-data">

                <div class="forms-container">
                    <div class="">
                        <input type="hidden" name="id" value="<?=$corporate_id?>">
                        <input type="text" placeholder="title" name="title" value="<?=$corporate['title']?>">
                        <input type="text" placeholder="text" name="text" value="<?=$corporate['text']?>">
                        <input type="file" name="img" >
                        <input type="date" placeholder="date" name="date" value="<?=$corporate['date']?>"> </input>
                    </div>
                </div>

                <button class="save-btn" type="submit">Save</button>
            </form>

        </div>

    </main>

</body>

</html>