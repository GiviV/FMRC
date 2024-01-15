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
        require_once '../admin/includes/add_nav.php';
       ?>
        <div></div>

        <div class="dashboard-content">

            <div class="add-title">
                 <a href="vacancy-list.html">
                    <img src="img/arrow-left.svg" alt="Back">
                </a>
                <h2>Add Vacancy</h2>
            </div>

            <form action="vendor-vacancy/create.php" class="add-doc-form" method="post">

                <div class="forms-container">
                    <div class="">
                        <input type="text" placeholder="Job title" name="title">
                        <textarea id="" cols="30" rows="10" placeholder="Functions" name="func"></textarea>

                    </div>
                    <textarea name="req" id="" cols="30" rows="10" placeholder="Requirements" ></textarea>
                    <textarea name="pres" id="" cols="30" rows="10" placeholder="Personal Abilities"></textarea>
                </div>

                <button class="save-btn">Save</button>
            </form>

        </div>

    </main>

</body>

</html>