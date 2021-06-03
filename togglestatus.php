<?php
require 'functions.php';

    $current_status = $_GET['current_status'];
    $nik = $_GET['nik'];

    switch($current_status){
        case "1" :
            $newStatus = 2;
            break;
        case "2":
            $newStatus = 3;
            break;
        case "3":
            $newStatus = 2;
            break;
        default :
            $newStatus = 1;
            break;
    }
    $sql = "UPDATE kegiatan SET Status = '$newStatus' WHERE NIK = '$nik'";

    $query = mysqli_query($conn, $sql);

    if(!$query){
        echo "g" .mysqli_error($conn) ;
    }
    else{
        header('location: halamankantordesa.php');
    }

    // header('location: halamankantordesa.php');

?>