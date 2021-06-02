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
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="namalengkap" id="">
            </div>
            <div class="form-group">
                <label for="">NIK</label>
                <input type="text" class="form-control" name="nik" id="">
            </div>
            <div class="form-group">
                <label for="">Usia</label>
                <input type="text" class="form-control" name="usia" id="">
            </div>
        </div>
        <div class="col-sm-6 bordered">
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" id="">
            </div>
            <div class="form-group">
                <label for="">No HP</label>
                <input type="text" class="form-control" name="nohp" id="">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            <h4 class="font-weight-light">Kegiatan Yang Akan Diadakan</h4><br>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 bordered">
            <div class="form-group">
                <label for="">Kegiatan</label>
                <input type="text" class="form-control" name="kegiatan" id="">
            </div>
            <div class="form-group">
                <label for="">Dalam Rangka</label>
                <input type="text" class="form-control" name="dalamrangka" id="">
            </div>            
            <div class="form-group">
                <label for="">Hari/Tanggal</label>
                <input type="date" class="form-control" name="haritanggal" id="">
            </div>
            <div class="form-group">
                <label for="">Waktu</label>
                <input type="time" class="form-control" name="waktu" id="">
            </div>
        </div>
            <div class="col-sm-6 bordered">
            <div class="form-group">
                <label for="">Tempat</label>
                <input type="text" class="form-control" name="tempat" id="">
            </div>
            <div class="form-group">
                <label for="">Penanggung Jawab</label>
                <input type="text" class="form-control" name="penanggungjawab" id="">
            </div>
            <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" style="height: 121px;" id="">
            </div>
        </div>
    </div>
    <p style="text-align: right;"><button type="submit" class="btn btn-dark form-group" name="proses" style="text-align:right;">Submit</button></p>
  </div>
</form>

<?php include ('Footer.php'); 

?>

<?php

include "koneksi.php";
$execute = mysqli_query($koneksi, $sql);

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into datawarga set
    namalengkap = '$_POST[namalengkap]',
    nik = '$_POST[nik]',
    usia = '$_POST[usia]',
    alamat = '$_POST[alamat]',
    email = '$_POST[email]',
    nohp = '$_POST[nohp]',
    kegiatan = '$_POST[kegiatan]',
    dalamrangka = '$_POST[dalamrangka]',
    haritanggal = '$_POST[haritanggal]',
    waktu = '$_POST[waktu]',
    tempat = '$_POST[tempat]',
    penanggungjawab = '$_POST[penanggungjawab]',
    keterangan = '$_POST[keterangan]'");


}


?>