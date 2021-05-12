<?php

session_start();

include("./../config/connection.php");

if(!isset($_SESSION['status']) || $_SESSION['status'] != "login"){
    $_SESSION['status'] = "";
}

$result = mysqli_query($conn, "SELECT * FROM image ORDER BY id ASC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./../assets/css/css-reset.css">
    <link rel="stylesheet" href="./../assets/fonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="./../assets/scss/desktop-style.css">
    <link rel="stylesheet" href="./../assets/scss/tablet-style.css">
    <link rel="stylesheet" href="./../assets/scss/mobileLandscape-style.css">
    <link rel="stylesheet" href="./../assets/scss/mobile-style.css">
    <link rel="stylesheet" href="./../assets/js/aos/aos.css">

    <title>Data Students - Petikdua</title>
</head>

<body class="readData-page">

    <div>
        <section class="bg-main"></section>

        <section class="main">
            <div class="content">
                <div class="content-left">
                    <h4>PETIKDUA</h4>
                    <h1>DATA STUDENTS</h1>
                    <p>Students Exchange - Australia</p>
                    <?php
                    if ($_SESSION['status'] == "login") {
                    ?>
                        <div class="button">
                            <button onclick="window.location.href='./../insert/insert-data.php'">Insert Data</button>
                            <button onclick="window.location.href='./../insert/insert-image.php'">Insert Image</button>
                        </div>
                    <?php } else { ?>
                        <button onclick="window.location.href='./../auth/login.php'">Login</button>
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>

    <div class="table-section">
        <div class="content">
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th class="rank">ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Size</th>
                            <th>Type</th>
                            <th class="skor">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($image = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <th><?= $image['id'] ?></th>
                                <td><img src="./../assets/images/profile/<?=$image['name']?>" alt=""></td>
                                <td><?= $image['name'] ?></td>
                                <td><?= $image['size'] ?></td>
                                <td><?= $image['type'] ?></td>
                                <td class="skor">
                                    <a href="./../delete/config_delete_image.php?id=<?= $image['id'] ?>" class="badge badge-danger">Delete</a>
                                    <a href="./../assets/images/profile/<?=$image['name']?>" class="badge badge-primary" download>Download</a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="./../assets/js/aos/aos.js"></script>
    <script>
        AOS.init()
    </script>
    <script src="./../assets/js/jquery-3.5.1.min.js"></script>
    <script src="./../assets/js/style.js"></script>
</body>

</html>