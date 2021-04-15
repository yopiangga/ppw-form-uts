<?php 

include "./../config/connection.php";

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
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

    $sql = "INSERT INTO mahasiswa 
    (email, password, telp, fname, lname, university, major, placeBirth, dateBirth, gender, zipcode, address) VALUE 
    ('$email', '$password', '$telp', '$fname', '$lname', '$university', '$major', '$placeBirth', '$dateBirth', '$gender', '$zipcode', '$address')";

    $query = mysqli_query($conn, $sql);

    if($query){
        header('Location: ./../read/read-data.php');
    } else {
        echo "gagal submit";
        echo mysqli_error($conn);
    }
}



?>