<?php
    require_once 'config/connect.php';
    $doctors = mysqli_query($connect, "SELECT * FROM `doctors`");
    $doctors = mysqli_fetch_all($doctors);
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
                <h2>Doctors</h2>

                <a href="add-doctor.php"><button class="add">Add doctor</button></a>
            </div>

            <div class="table-container">


                <table>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>position</th>
                        <th>About</th>
                        <th>Experience</th>
                        <th>image</th>
                        <th></th>
                    </tr>
                    <?php 
                        foreach($doctors as $item){
                    ?>
                    <tr>
                        <td><?= $item[0]?></td>
                        <td><?= $item[1]?></td>
                        <td><?= $item[2]?></td>
                        <td><?= $item[3]?></td>
                        <td><?= $item[4]?></td>
                        <td>
                            <p><?= $item[5]?></p>
                            <img src="imgs/doctors/dali-davitadze.png" alt="">
                        </td>
                        <td>
                            <a href="edit_doctors.php?id=<?= $item[0]?>"><button class="edit">edit</button></a>
                            <a href="vendor/delete.php?id=<?= $item[0]?>"><button class="delete">delete</button></a>
                        </td>

                    </tr>
                    <?php 
                        }
                    ?>

                </table>


            </div>

        </div>
        <form action="" method="post">
                <p>Name</p>
                <input type="text" name="name">

                <p>Position</p>
                <input type="text" name="position">

                <p>About</p>
                <input type="text" name="about">

                <p>Experience</p>
                <input type="text" name="experience">

                <p>image</p>
                <input type="text" name="image">

                <button class="save-btn">Save</button>
            </form>
    </main>

</body>

</html>