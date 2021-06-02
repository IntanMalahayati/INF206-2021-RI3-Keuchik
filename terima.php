<?php

require "koneksi.php";

$namalengkap = $_GET['namalengkap'];
$sql = "UPDATE datawarga SET status='diterima' WHERE namalengkap='$namalengkap'";
$execute = mysqli_query($koneksi, $sql);

if($execute){
    header("Location:diterima.php");
}else{

    echo "gagal menerima";
}
?>




