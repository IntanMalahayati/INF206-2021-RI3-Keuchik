<?php include ('Header.php'); ?>
<?php

include "koneksi.php";
$result= mysqli_query($koneksi, "SELECT* FROM datawarga ")

?>

<title>Daftar Pengajuan</title>
    <div class="row">
      <div class="col">
          <br><br>

          <h3 class="text-center text-dark">Daftar Pengajuan</h3>
</div>
        </div>
    </div>
    
        <table class="table">
            <thead>
        <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>nik</th>
        <th>usia</th>
        <th>alamat</th>
        <th>email</th>
        <th>nohp</th>
        <th>kegiatan</th>
        <th>dalamrangka</th>
        <th>hari tanggal</th>
        <th>waktu</th>
        <th>tempat</th>
        <th>penanggung jawab</th>
        <th>keterangan</th>
        <th colspan="2">Status</th>
        </tr>
        </thead>
        
    <?php

    $x=1;

    ?>
    <?php

    while($row = mysqli_fetch_assoc($result)):    

    ?>
    <tbody>
    <tr>
    <td><?php echo $x; ?></td>
    <td> <?php echo $row["namalengkap"]; ?> </td>
    <td> <?php echo $row["nik"]; ?> </td>
    <td> <?php echo $row["usia"]; ?> </td>
    <td> <?php echo $row["alamat"]; ?> </td>
    <td> <?php echo $row["email"]; ?> </td>
    <td> <?php echo $row["nohp"]; ?> </td>
    <td> <?php echo $row["kegiatan"]; ?> </td>
    <td> <?php echo $row["dalamrangka"]; ?> </td>
    <td> <?php echo $row["haritanggal"]; ?> </td>
    <td> <?php echo $row["waktu"]; ?> </td>
    <td> <?php echo $row["tempat"]; ?> </td>
    <td> <?php echo $row["penanggungjawab"]; ?> </td>
    <td> <?php echo $row["keterangan"]; ?> </td>
    <td><a href="terima.php?namalengkap=<?= $row['namalengkap']?>"  > TERIMA </a> </td>
    <td><a href="tolak.php?namalengkap=<?= $row['namalengkap']?>"  > TOLAK </a> </td>
    </p></td>
    </tr>
    
    <?php $x++; ?>
    <?php endwhile; ?>
    </table>
    </tbody>
    
    
<?php include ('Footer.php'); ?>
