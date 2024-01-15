<?php
session_start();
    include('index.php');
    require_once 'config/connect.php';
    $vacancy = mysqli_query($connect, "SELECT * FROM `vacancy`");
    $vacancy = mysqli_fetch_all($vacancy);
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
                <h2>Vacancy</h2>

                <a href="add-vacancy.php"> <button class="add">Add vacancy</button></a>
            </div>

            <div class="table-container">


                <table>
                    <tr>
                        <th>#</th>
                        <th>Vacancy Name</th>
                        <th>Functions</th>
                        <th>Requirements</th>
                        <th>Personal abilities</th>
                        <th></th>
                    </tr>
                    <?php 
                        foreach($vacancy as $item){
                    ?>
                    <tr>

                        <td><?= $item[0]?></td>
                        <td><?= $item[1]?></td>

                        <td><?= $item[2]?></td>
                        <td>
                        <?= $item[3]?>
                        </td>
                        <td>
                        <?= $item[4]?>
                        </td>

                        <td class="btn-td">
                            <a href="edit_vacancy.php?id=<?= $item[0]?>"><button class="edit">edit</button></a>
                           <a href="vendor-vacancy/delete.php?id=<?= $item[0]?>"> <button class="delete">delete</button></a>
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