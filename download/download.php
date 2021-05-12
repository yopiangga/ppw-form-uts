

<?php 


$folder = "./../assets/images/profile/";
$filename = $_GET['file'];

if(!file_exists($folder.$filename)){
    echo "Anda dilarang download file ini bray";
} else {
    $type = filetype($folder.$filename);
    echo $type;
    header("Content-Disposition: attachment; filename=".basename($filename));
    header("Content-Type: $type");
    readfile($folder.$filename);

}







?>