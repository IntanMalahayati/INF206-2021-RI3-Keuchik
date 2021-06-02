<?php include ('Header.php'); ?>
<title>Form Pengajuan | Keuchik</title>

<form action="" method="post">
  <div class="container">
    <div class="row">
      <div class="col">
          <br><br>
          <h3 class="text-dark">Form Pengajuan Mengadakan Kegiatan</h3>
          <br>
          <h4 class="font-weight-light">Data Diri</h4><br>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 bordered">
        <table class="table">
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
        
    <?php

    $x=1;

    ?>
    <?php

    while($row = mysqli_fetch_assoc($result)):    

    ?>
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
    <td><a href='terima.php'> TERIMA </a> </td>
    <td><a href='tolak.php'> TOLAK </a> </td>
    </p></td>
    </tr>
    
    <?php $x++; ?>
    <?php endwhile; ?>
    </table>

        </div>
    </div>
    
  

<?php include ('Footer.php'); 