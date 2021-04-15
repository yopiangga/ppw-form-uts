  
<?php 

include("./../config/connection.php");

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $sql = "DELETE FROM mahasiswa where id=$id";

    $query = mysqli_query($conn, $sql);

    if($sql){
        header('Location: ./../read/read-data.php');
    }else {
        echo "gagal delete";
    }
}

?>