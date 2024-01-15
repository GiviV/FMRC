<?php
    session_start();
    include('index.php');
    require_once 'config/connect.php';
    $persons = mysqli_query($connect, "SELECT * FROM `persons`");
    $persons = mysqli_fetch_all($persons);
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
                <h2>Persons</h2>
            </div>
            <div class="table-container">
                <table>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>phone</th>
                        <th>email</th>
                        <th>date</th>
                        <th>years of experience</th>
                        <th>img</th>
                    </tr>
                    <?php 
                        foreach($persons as $item){
                    ?>
                    <tr>
                        <td><?= $item[0]?></td>
                        <td><?= $item[1]?></td>
                        <td><?= $item[2]?></td>
                        <td><?= $item[3]?></td>
                        <td><?= $item[4]?></td>
                        <td><?= $item[5]?></td>
                        <td><?= $item[6]?></td>
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