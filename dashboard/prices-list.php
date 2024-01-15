<?php
    session_start();
    include('index.php');
    require_once 'config/connect.php';
    $prices = mysqli_query($connect, "SELECT * FROM `prices`");
    $prices = mysqli_fetch_all($prices);
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
                <h2>Prices</h2>

                <a href="add-price.php"> <button class="add">Add Price</button></a>
            </div>
            <div class="table-container">
                <table>
                    <tr>
                        <th>#</th>
                        <th>Lab Title</th>
                        <th>price</th>
                        <th></th>
                    </tr>
                    <?php 
                        foreach($prices as $item){
                    ?>
                    <tr>
                        <td><?= $item[0]?></td>
                        <td><?= $item[1]?></td>

                        <td><?= $item[2]?></td>

                        <td class="btn-td">
                            <a href="edit_prices.php?id=<?= $item[0]?>"><button class="edit">edit</button></a>
                            <a href="vendor-price/delete.php?id=<?= $item[0]?>"><button class="delete">delete</button></a>
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