<?php
    require_once 'config/connect.php';
    $centers_id = $_GET['id']; 
    $centers = mysqli_query($connect, "SELECT * FROM `centers` WHERE `id`='$centers_id'");
    $centers = mysqli_fetch_assoc($centers);
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
               <a href="centers-list.php">  
                    <img src="img/arrow-left.svg" alt="Back">
                </a>

                <h2>edit News</h2>
            </div>

            <form action="vendor-centers/edit.php" class="add-doc-form" method="post" enctype="multipart/form-data">

                <div class="forms-container">
                    <div class="">
                        <input type="hidden" name="id" value="<?=$centers_id?>">
                        <input type="text" placeholder="question" name="question" value="<?=$centers['question']?>">
                        <textarea type="text" placeholder="answer" name="answer" value=""> <?=$centers['answer']?></textarea>
                    </div>
                </div>

                <button class="save-btn" type="submit">Save</button>
            </form>

        </div>

    </main>

</body>

</html>