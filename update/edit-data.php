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
                </div>

            </div>
        </section>
    </div>

    <div class="form-section">
        <div class="content">
            <div class="form-box">
                <h2>Edit Biodata</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis!</p>

                <form class="form-biodata" action="./config_update.php" method="POST">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" value="<?= $mahasiswa['email'] ?>" name="email" id="email" disabled>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Telephone</label>
                                <input type="text" value="<?= $mahasiswa['telp'] ?>" name="telp" id="telp">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">New Password</label>
                                <input type="password" value="<?= $mahasiswa['password'] ?>" name="password1" id="password">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Repeat Password</label>
                                <input type="password" value="<?= $mahasiswa['password'] ?>" name="password2" id="password">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" value="<?= $mahasiswa['fname'] ?>" name="fname" id="fname">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" value="<?= $mahasiswa['lname'] ?>" name="lname" id="lname">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">University</label>
                                <input type="text" value="<?= $mahasiswa['university'] ?>" name="university" id="university">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Major</label>
                                <input type="text" value="<?= $mahasiswa['major'] ?>" name="major" id="major">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Place of birth</label>
                                <input type="text" value="<?= $mahasiswa['placeBirth'] ?>" name="placeBirth" id="placeBirth">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Date of birth</label>
                                <input type="date" value="<?= $mahasiswa['dateBirth'] ?>" name="dateBirth" id="dateBirth">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Gender</label>
                                <select name="gender" id="" id="gender">
                                    <option value="1" <?php if($mahasiswa['gender'] == 1){echo 'selected';}?>>Male</option>
                                    <option value="2" <?php if($mahasiswa['gender'] == 2){echo 'selected';} ?>>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Zip Code</label>
                                <input type="number" value="<?= $mahasiswa['zipcode'] ?>" name="zipcode" id="zipcode">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Address</label>
                                <textarea name="address" id="address" cols="30" rows="4"><?= $mahasiswa['address'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    

                    <button class="btn-submit" name="submit" type="submit">UPDATE DATA</button>

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