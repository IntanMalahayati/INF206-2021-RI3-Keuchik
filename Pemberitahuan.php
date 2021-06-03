<?php include ('Header.php'); ?>
<?php

include ('functions.php');
$result= mysqli_query($conn, "SELECT* FROM kegiatan ")

?>
<title>Pemberitahuan</title>

<div class="page-wrapper">
    <h3 class="text-center text-dark">Pemberitahuan</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-active">
                <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kegiatan</th>
                <th>Dalam Rangka</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Tempat</th>
                <th>PenanggungJawab</th>
                <th>Keterangan</th>
                <th>Status</th>
                </tr>
            </thead>
    <?php $x=1; ?>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tbody>
                <tr>
                <td><?php echo $x; ?></td>
                <td> <?php echo $row["NamaLengkap"]; ?> </td>
                <td> <?php echo $row["NamaKegiatan"]; ?> </td>
                <td> <?php echo $row["DalamRangka"]; ?> </td>
                <td> <?php echo $row["Tanggal"]; ?> </td>
                <td> <?php echo $row["Waktu"]; ?> </td>
                <td> <?php echo $row["Tempat"]; ?> </td>
                <td> <?php echo $row["PenanggungJawab"]; ?> </td>
                <td> <?php echo $row["Keterangan"]; ?> </td>
                <td> <?php if($row['Status'] == "1"){
                    echo "Di proses";
                }else if($row["Status"]=="2"){
                    echo "Diterima";
                }else{
                    echo "ditolak";
                }
                  ?> </td>
                </p></td>
                </tr>
                
                <?php $x++; ?>
                <?php endwhile; ?>
            </tbody>
    </table>
</div>
    
    
    
<?php include ('Footer.php'); ?>
