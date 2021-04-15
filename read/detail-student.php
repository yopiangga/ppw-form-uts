<?php
include("./../config/connection.php");

if (!isset($_GET['id'])) {
    header('Location: ./../read/read-data.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$query = mysqli_query($conn, $sql);

$mahasiswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
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

    <title>Detail Student - Petikdua</title>
</head>

<body class="detailStudent-page">

    <div>
        <section class="bg-main"></section>
    </div>

    <div class="form-section">
        <div class="content">
            <div class="form-box">
                <h2>Student Detail</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis!</p>

                <form class="form-biodata">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <h4><?= $mahasiswa['email'] ?></h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Telephone</label>
                                <h4><?= $mahasiswa['telp'] ?></h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <h4><?= $mahasiswa['fname'] ?></h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <h4><?= $mahasiswa['lname'] ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">University</label>
                                <h4><?= $mahasiswa['university'] ?></h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Major</label>
                                <h4><?= $mahasiswa['major'] ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Place of birth</label>
                                <h4><?= $mahasiswa['placeBirth'] ?>"</h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Date of birth</label>
                                <h4><?= $mahasiswa['dateBirth'] ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Gender</label>
                                <h4><?php if($mahasiswa['gender'] == 1){echo 'Male';} else {echo 'Female';}?></h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Zip Code</label>
                                <h4><?= $mahasiswa['zipcode'] ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Address</label>
                                <h4><?= $mahasiswa['address'] ?></h4>
                            </div>
                        </div>
                    </div>
                    
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