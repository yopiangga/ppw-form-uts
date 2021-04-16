<?php

$email = "";
$password = "";
$telp = "";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];
}

if($email == "" && $password == ""){
    header("location: ./../register.php");
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

    <title>Complete Record - Petikdua</title>
</head>

<body class="completeData-page">

    <div class="completeData">

        <div class="complete-left">

            <div class="content">
                <h3>Petikdua</h3>

                <div class="line-proses">
                    <div class="item-group item-group-1 active">
                        <div class="icon">
                            <div class="circle">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>
                        <div class="text">
                            <h4>Run the Aplication Form</h4>
                            <p>Start filling out forms quickly on Aplication Form</p>
                        </div>
                    </div>
                    <div class="item-group item-group-2">
                        <div class="icon">
                            <div class="circle">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>
                        <div class="text">
                            <h4>Complete the data</h4>
                            <p>Enter data in accordance with personal data</p>
                        </div>
                    </div>
                    <div class="item-group item-group-3">
                        <div class="icon">
                            <div class="circle">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>
                        <div class="text">
                            <h4>Submit it to us</h4>
                            <p>Submit your data via the form to us by clicking submit</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="footer-text">
                    <h4>Open data table ?</h4>
                </div>
                <div class="footer-button">
                    <button>Open</button>
                </div>
            </div>
        </div>
        <div class="complete-right">
            <form class="container" action="./config_insert.php" method="POST">
                <section class="form form-1">
                    <div class="content">
                        <div class="image">
                            <img src="./../assets/images/start-form.png" alt="">
                        </div>
                        <h2>Launch Insert Form</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae alias accusantium atque
                            perspiciatis quae est veniam iusto laboriosam. Perspiciatis!</p>
                        <button type="button" class="btn-start">Get Start!</button>
                    </div>
                </section>

                <section class="form form-2">
                    <div class="content">
                        <h2>My Biodata</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis!</p>

                        <div class="form-biodata">
                            <div class="row" style="display: none;">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" value="<?= $email ?>" name="email" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="display: none;">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="password" value="<?= $password ?>" name="password" id="password">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="display: none;">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" value="<?= $telp ?>" name="telp" id="telp">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <input type="text" value="" name="fname" id="fname">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Last Name</label>
                                        <input type="text" name="lname" id="lname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">University</label>
                                        <input type="text" name="university" id="university">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Major</label>
                                        <input type="text" name="major" id="major">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Place of birth</label>
                                        <input type="text" name="placeBirth" id="placeBirth">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Date of birth</label>
                                        <input type="date" name="dateBirth" id="dateBirth">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Gender</label>
                                        <select name="gender" id="" id="gender">
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Zip Code</label>
                                        <input type="number" name="zipcode" id="zipcode">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <textarea name="address" id="address" cols="30" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="icon" id="btn-down">
                                            <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="form form-1">
                    <div class="content">
                        <div class="image">
                            <img src="././../assets/images/form-1.png" alt="">
                        </div>
                        <h2>Okey, Last Step!</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae alias accusantium atque
                            perspiciatis quae est veniam iusto laboriosam. Perspiciatis!</p>
                        <button class="btn-submit" type="submit" name="submit">SUBMIT</button>
                    </div>
                </section>
            </form>
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