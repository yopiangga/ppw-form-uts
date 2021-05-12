  
<?php 
session_start();
include("./../config/connection.php");

if(!isset($_SESSION['status']) || $_SESSION['status'] != "login"){
    $_SESSION['status'] = "";
}

if(isset($_GET['id']) && $_SESSION['status'] == "login"){
    $id = $_GET['id'];
    $sql = "DELETE FROM image where id=$id";

    $query = mysqli_query($conn, $sql);

    if($sql){
        header('Location: ./../read/read-image.php');
    }else {
        echo "gagal delete";
    }
}
    header('Location: ./../read/read-image.php');
?>