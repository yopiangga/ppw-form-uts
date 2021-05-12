<?php 

include "./../config/connection.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
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

    if($_FILES['imgProfile']['name'] == null){
        $image = "example.jpg";
        $kondisi = 1;
    } else {
        $imgName = $_FILES['imgProfile']['name'];
        $imgTmp = $_FILES['imgProfile']['tmp_name'];
        $folder = "./../assets/images/profile/";
        $image = rand().$imgName;

        $upload = move_uploaded_file($imgTmp, $folder.$image);
        if($upload){
            $kondisi = 1;
        } else {
            $kondisi = 0;
        }
    }

    if($kondisi){
        $sql = "INSERT INTO mahasiswa 
        (email, password, telp, fname, lname, university, major, placeBirth, dateBirth, gender, zipcode, address, image) VALUE 
        ('$email', '$password', '$telp', '$fname', '$lname', '$university', '$major', '$placeBirth', '$dateBirth', '$gender', '$zipcode', '$address', '$image')";
    
        $query = mysqli_query($conn, $sql);

        if($query){
            header('Location: ./../read/read-data.php');
        } else {
            echo "gagal submit";
            echo mysqli_error($conn);
        }
    }
}
