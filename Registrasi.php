<?php
require ('functions.php');

if(isset($_POST["daftar"]) ) {

    if(registrasi($_POST) > 0 ) {
        echo "<script>
                alert('Anda berhasil mendaftar!');
              </script>";
        header("Location: Warga.php");
        exit;
    } else {
        echo mysqli_error($conn);
    }
}

?>

<?php include ('Header.php'); ?>
<title>Registrasi | Keuchik</title>

<p style="text-align: center;">
  <img src="img/avatar.png" width="75"><br>
</p>
<div id="login">
  <div class="container">
    <div id="login-row" class="row justify-content-center align-items-center">
      <div id="login-column" class="col-md-6">
        <div id="login-box" class="col-md-12">
          <form id="login-form" class="form" action="" method="POST">
            <h3 class="text-center text-dark">Daftar</h3>
            <div class="form-group">
              <label for="nik" class="text-dark">NIK</label><br>
              <input type="text" name="nik" id="nik" class="form-control" required />
            </div>
            <div class="form-group">
              <label for="name" class="text-dark">Nama Lengkap</label><br>
              <input type="text" name="name" id="name" class="form-control" required />
            </div>
            <div class="form-group">
              <label for="nohp" class="text-dark">No HP</label><br>
              <input type="text" name="nohp" id="nohp" class="form-control" required />
            </div>
            <div class="form-group">
              <label for="password" class="text-dark">Password</label><br>
              <input type="password" name="password" id="password" class="form-control" required />
            </div>
            <div class="form-group">
              <label for="password" class="text-dark">Konfirmasi Password</label><br>
              <input type="password" name="password2" id="password2" class="form-control" required />
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="daftar">Daftar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include ('Footer.php'); ?>