<?php

session_start();

if(!isset($_SESSION['status']) || $_SESSION['status'] != "login"){
    header('Location: ./../read/read-data.php');
}

include './../config/connection.php';

$uploadDir = './../assets/images/profile/';
if (isset($_POST['submit'])) {
    $fileName = $_FILES['imgProfile']['name'];
    $tmpName = $_FILES['imgProfile']['tmp_name'];
    $fileSize = $_FILES['imgProfile']['size'];
    $fileType = $_FILES['imgProfile']['type'];
    $filePath = $uploadDir . $fileName;
    $result = move_uploaded_file($tmpName, $filePath);
    if ($result) {
        
        $sql = "INSERT INTO image (name, size, type) VALUE ('$fileName', '$fileSize', '$fileType')";

        $query = mysqli_query($conn, $sql);
        if($query){
            header('Location: ./../read/read-image.php');
        } else {
            echo "gagal submit";
            echo mysqli_error($conn);
        }

        exit;
    } else {
        echo "Gagal Upload";
    }
}

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
                    <h1>IMAGE STUDENTS</h1>
                    <p>Students Exchange - Australia</p>
                
                    <?php
                    if ($_SESSION['status'] == "login") {
                    ?>
                        <div class="button">
                            <button onclick="window.location.href='./../read/read-data.php'">Read Data</button>
                            <button onclick="window.location.href='./../read/read-image.php'">Read Image</button>
                        </div>
                    <?php } else { ?>
                        <button onclick="window.location.href='./../auth/login.php'">Login</button>
                    <?php } ?>
                </div>

            </div>
        </section>
    </div>

    <div class="form-section">
        <div class="content">
            <div class="form-box">
                <h2>Insert Image</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis!</p>

                <form class="form-biodata" action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Image Profile</label>
                                <div class="box-profile">
                                    <label for="imgProfile" class="lblImgProfile">Image Upload</label>
                                    <input class="imgProfile" name="imgProfile" id="imgProfile" type="file"></input>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn-submit" name="submit" type="submit">SUBMIT</button>

                </form>
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