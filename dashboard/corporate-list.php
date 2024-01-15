<?php
    session_start();
    include('index.php');
    require_once 'config/connect.php';
    $corporate = mysqli_query($connect, "SELECT * FROM `corporate`");
    $corporate = mysqli_fetch_all($corporate);
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

            <div class="list-title">
                <h2>News</h2>
               <a href="add-corporate-news.php"><button class="add">Add news</button></a>
            </div>

            <div class="table-container">
                <table>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>News text</th>
                        <th>image</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                    <?php 
                        foreach($corporate as $item){
                    ?>
                    <tr>
                        <td><?= $item[0]?></td>
                        <td><?= $item[3]?></td>
                      
                        <td><?= $item[4]?></td>
                        <td>
                            <p><?= $item[1]?></p>
                            <img src="imgs/<?= $item[1]?>" alt="">
                        </td>
                        <td><?= $item[2]?></td>
                    
                        <td>
                            <a href="edit_news.php?id=<?= $item[0]?> "><button class="edit">edit</button></a>
                            <a href="vendor-news/delete.php?id=<?= $item[0]?>"><button class="delete">delete</button></a>
                        </td>

                    </tr>
                    <?php
                        }
                    ?>
                

                </table>


            </div>

        </div>

    </main>

</body>

</html>