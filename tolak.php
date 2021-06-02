<?php

require "koneksi.php";

$namalengkap = $_GET['namalengkap'];
$sql = "UPDATE datawarga SET status='ditolak' WHERE namalengkap='$namalengkap'";
$execute = mysqli_query($koneksi, $sql);

if($execute){
    header("Location:ditolak.php");
}else{

    echo "gagal menolak";
}
?>




