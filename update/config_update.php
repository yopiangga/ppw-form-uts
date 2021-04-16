<?php

include "./../config/connection.php";

if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $email = $_POST['email'];
    $password = $_POST['password1'];
    $telp = $_POST['telp'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $university = $_POST['university'];
    $major = $_POST['major'];
    $placeBirth = $_POST['placeBirth'];
    $dateBirth = $_POST['dateBirth'];
    $gender = $_POST['gender'];
    $zipcode = $_POST['zipcode'];
    $address = $_POST['address'];

    $sql = "UPDATE mahasiswa SET
    email='$email', password='$password', telp='$telp', fname='$fname', lname='$lname', university='$university', 
    major='$major', placeBirth='$placeBirth', dateBirth='$dateBirth', gender='$gender', zipcode='$zipcode', address='$address'
    WHERE id='$id'
    ";

    $query = mysqli_query($conn, $sql);

    if($query){
        header('Location: ./../read/read-data.php');
    } else {
        echo "gagal submit";
        echo mysqli_error($conn);
    }
}