<?php

require ('functions.php');

$namalengkap = $_GET['namalengkap'];
$sql = "UPDATE kegiatan SET status='ditolak' WHERE namalengkap='$namalengkap'";
$execute = mysqli_query($conn, $sql);

if($execute){
    echo "<script>
            alert('Pengajuan ditolak!')
        </script>";
    header("Location:halamankantordesa.php");
}else{
    echo "<script>
            alert('Gagal!')
        </script>";
	return false;
}
?>




