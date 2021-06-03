<?php
require ('functions.php');

if(isset($_POST["proses"]) ) {

    if(pengajuan($_POST) > 0 ) {
        echo "<script>
                alert('Data telah dikirim!');
              </script>";
        header("Location: Pemberitahuan.php");
        exit;
    } else {
        echo mysqli_error($conn);
    }
}
?>

<?php include ('Header.php'); ?>
<title>Form Pengajuan | Keuchik</title>

<form  class="form" action="" method="POST">
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
                <label for="">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik">
            </div>
            <div class="form-group">
                <label for="">Usia</label>
                <input type="text" class="form-control" id="usia" name="usia">
            </div>
        </div>
        <div class="col-sm-6 bordered">
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="">No HP</label>
                <input type="text" class="form-control" id="nohp" name="nohp">
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
                <label for="">Nama Kegiatan</label>
                <input type="text" class="form-control" id="kegiatan" name="kegiatan">
            </div>
            <div class="form-group">
                <label for="">Dalam Rangka</label>
                <input type="text" class="form-control" id="dlmrangka" name="dlmrangka">
            </div>            
            <div class="form-group">
                <label for="">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>
            <div class="form-group">
                <label for="">Waktu</label>
                <input type="time" class="form-control" id="waktu" name="waktu">
            </div>
        </div>
            <div class="col-sm-6 bordered">
            <div class="form-group">
                <label for="">Tempat</label>
                <input type="text" class="form-control" id="tempat" name="tempat">
            </div>
            <div class="form-group">
                <label for="">Penanggung Jawab</label>
                <input type="text" class="form-control" id="pj" name="pj">
            </div>
            <div class="form-group">
                <label for="">Keterangan</label>
                <textarea rows="5" cols="50" type="text" id="ket" name="ket" class="form-control" style="height: 121px;" id=""></textarea>
            </div>
        </div>
    </div>
    <p style="text-align: right;"><button type="submit" class="btn btn-dark form-group"  style="text-align:right;" name="proses">Submit</button></p>
  </div>
</form>

<?php include ('Footer.php'); ?>
