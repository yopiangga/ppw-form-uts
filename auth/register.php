
<?php 

    if($_SESSION['status'] == "login"){
        header("location: ./login.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/css-reset.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/scss/desktop-style.css">
    <link rel="stylesheet" href="assets/scss/tablet-style.css">
    <link rel="stylesheet" href="assets/scss/mobileLandscape-style.css">
    <link rel="stylesheet" href="assets/scss/mobile-style.css">
    <link rel="stylesheet" href="assets/js/aos/aos.css">

    <title>Create Account - Petikdua</title>
</head>
<body class="login-page">
    
   <div class="login">
        <div class="login-left">
            <div class="content">
                <h3>Petikdua</h3>
                <h1>Get Started with Petikdua</h1>
                <p>Start your account with special menu.</p>

                <button class="btn-google"> <img src="https://img-authors.flaticon.com/google.jpg" alt=""> Sign Up with Google</button>
                <div class="choice-login">
                    <hr>
                    <h6>Or Sign Up Email</h6>
                    <hr>
                </div>

                <form action="./insert/complete-data.php" method="POST">
                    <div class="form-group">
                        <label>Email address</label>
                        <i class="fa fa-user"></i>
                        <input type="email" placeholder="example@petikdua.com" name="email">
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <i class="fa fa-phone"></i>
                        <input type="text" placeholder="+62 823 3041 0865" name="telp">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <i class="fa fa-lock"></i>
                        <input type="password" placeholder="min 6 character" name="password">
                    </div>
                    <button class="btn-login" type="submit" name="submit">Register</button>

                    <h6>Have an Account? <a href="./login.php">Login</a></h6>
                </form>
            </div>
        </div>
        <div class="login-right">
            <img src="./assets/images/animation-1.png" alt="">
            <h2>Designed for Learn Table</h2>
            <p>Lorem ipsum dolor sit amet. Incidunt debitis magnam, culpa a reiciendis molestiae laudantium facilis.</p>
        </div>
   </div>

    <script src="assets/js/aos/aos.js"></script>
    <script>AOS.init()</script>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/style.js"></script>
</body>
</html>