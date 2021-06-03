<?php
require ('functions.php');
$result= mysqli_query($conn, "SELECT* FROM Kegiatan ");
?>
<?php include ('Header.php'); ?>
<title>Daftar Pengajuan</title>

<div class="container">
    <h3 class="text-center text-dark">Daftar Pengajuan</h3>
    <div class="table-responsive">
        <table class="table table-bordered display responsive nowrap" width="100%" id="example">
            <thead class="dt-responsive table-active">
                <tr>
                    <th>No</th>
                    <th>Status</th>
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
                </tr>
            </thead>
            <tbody>
            <?php $x=1; ?>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td> <?php echo $x; ?></td>
                    <td> 
                    <?php if($row['Status'] == '1') : ?>
                        <a class="btn btn-warning"
                            href="togglestatus.php?current_status=<?= $row['Status'] ?>&nik=<?= $row['NIK'] ?>">PENDING</a>

                        <?php elseif ($row['Status'] == '2') : ?>
                        <a class="btn btn-success"
                            href="togglestatus.php?current_status=<?= $row['Status'] ?>&nik=<?= $row['NIK'] ?>">DITERIMA</a>

                        <?php else : ?>
                        <a class="btn btn-danger"
                            href="togglestatus.php?current_status=<?= $row['Status'] ?>&nik=<?= $row['NIK'] ?>">DITOLAK</a>
                        <?php endif; ?>
                    </td>
                    <td> <?php echo $row["NamaLengkap"]; ?> </td>
                    <td> <?php echo $row["NIK"]; ?> </td>
                    <td> <?php echo $row["Usia"]; ?> </td>
                    <td> <?php echo $row["Alamat"]; ?> </td>
                    <td> <?php echo $row["Email"]; ?> </td>
                    <td> <?php echo $row["NoHP"]; ?> </td>
                    <td> <?php echo $row["NamaKegiatan"]; ?> </td>
                    <td> <?php echo $row["DalamRangka"]; ?> </td>
                    <td> <?php echo $row["Tanggal"]; ?> </td>
                    <td> <?php echo $row["Waktu"]; ?> </td>
                    <td> <?php echo $row["Tempat"]; ?> </td>
                    <td> <?php echo $row["PenanggungJawab"]; ?> </td>
                    <td> <?php echo $row["Keterangan"]; ?> </td>
                </tr>
                <?php $x++; ?>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</div>        
<?php include ('Footer.php'); ?>