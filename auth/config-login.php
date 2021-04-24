
<?php

session_start();

include("./../config/connection.php");

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * From mahasiswa
            where email='$email' and password='$password'";

    $query = mysqli_query($conn, $sql);

    $cek = mysqli_num_rows($query);

    if($cek > 0){
        $_SESSION['name'] = $cek['name'];
        $_SESSION['status'] = "login";

        header("location: ./../read/read-data.php");
    } else {
        header("location: ./login.php");
    }

}


?>