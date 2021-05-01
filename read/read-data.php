<?php

session_start();

include("./../config/connection.php");

if(!isset($_SESSION['status']) || $_SESSION['status'] != "login"){
    $_SESSION['status'] = "";
}

$result = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY id ASC");

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
                        <button onclick="window.location.href='./../insert/insert-data.php'">Insert Data</button>
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
                            <th>Name</th>
                            <th>University</th>
                            <th>Major</th>
                            <th class="skor">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($mahasiswa = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <th><?= $mahasiswa['id'] ?></th>
                                <td><?= $mahasiswa['fname'] . " " . $mahasiswa['lname'] ?></td>
                                <td><?= $mahasiswa['university'] ?></td>
                                <td><?= $mahasiswa['major'] ?></td>
                                <td class="skor">
                                    <?php
                                    if ($_SESSION['status'] == "login") {
                                    ?>
                                        <a href="./../delete/config_delete.php?id=<?= $mahasiswa['id'] ?>" class="badge badge-danger">Delete</a>
                                        <a href="./../update/edit-data.php?id=<?= $mahasiswa['id'] ?>" class="badge badge-warning">Edit</a>
                                    <?php } ?>

                                    <a href="./../read/detail-student.php?id=<?= $mahasiswa['id'] ?>" class="badge badge-primary">Detail</a>
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