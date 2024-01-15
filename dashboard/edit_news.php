<?php
    require_once 'config/connect.php';
    $news_id = $_GET['id']; 
    $news = mysqli_query($connect, "SELECT * FROM `news` WHERE `id`='$news_id'");
    $news = mysqli_fetch_assoc($news);
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

                <h2>edit News</h2>
            </div>

            <form action="vendor-news/edit.php" class="add-doc-form" method="post" enctype="multipart/form-data">

                <div class="forms-container">
                    <div class="">
                        <input type="hidden" name="id" value="<?=$news_id?>">
                        <input type="text" placeholder="title" name="title" value="<?=$news['title']?>">
                        <input type="text" placeholder="text" name="text" value="<?=$news['text']?>">
                        <input type="file" name="img">
                        <input type="date" placeholder="date" name="date" value="<?=$news['date']?>"> </input>
                        <input type="hidden" name="hid_img" id="" value="<?=$news['img']?>">
                    </div>
                </div>

                <button class="save-btn" type="submit">Save</button>
            </form>

        </div>

    </main>

</body>

</html>