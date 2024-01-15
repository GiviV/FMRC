<?php
    require_once 'config/connect.php';
    $doctors_id = $_GET['id']; 
    $doctor = mysqli_query($connect, "SELECT * FROM `doctors` WHERE `id`='$doctors_id'");
    $doctor = mysqli_fetch_assoc($doctor);
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
               <a href="doctors-list.php">  
                    <img src="img/arrow-left.svg" alt="Back">
                </a>

                <h2>edit Doctor</h2>
            </div>

            <form action="vendor/edit.php" class="add-doc-form" method="post" enctype="multipart/form-data">

                <div class="forms-container">
                    <div class="">
                        <input type="hidden" name="id" value="<?=$doctors_id?>">
                        <input type="text" placeholder="name" name="name" value="<?=$doctor['name']?>">
                        <input type="text" placeholder="Position" name="position" value="<?=$doctor['position']?>">
                        <input type="file" name="img" >
                        <input type="hidden" name="hid_img" id="" value="<?=$doctor['img']?>">
                    </div>
                    <input placeholder="About" name="about" value="<?=$doctor['about']?>"> </input>
                    <input  placeholder="Experience" name="experience" value="<?=$doctor['experience']?>"></input>
                </div>

                <button class="save-btn" type="submit">Save</button>
            </form>

        </div>

    </main>

</body>

</html>