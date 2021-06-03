<?php
require ('functions.php');

if( isset($_POST["login"]) ) {

  $nik = $_POST["nik"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM warga WHERE NIK = '$nik'");
  $row = mysqli_fetch_assoc($result);
  
  if( mysqli_num_rows($result) === 1 ) {
    if($password == $row["pass"]) {
      header("Location: HomeWarga.php");
      exit;
    }
    else{
      $error = true;
    }
  }
  $error = true;
}

?>

<?php include ('Header.php'); ?>
<title>Login warga | Keuchik</title>

<p style="text-align: center;">
  <img src="img/avatar.png" width="75"><br>
</p>
<div id="login">
  <div class="container">
    <div id="login-row" class="row justify-content-center align-items-center">
      <div id="login-column" class="col-md-6">
        <div id="login-box" class="col-md-12">
          <form id="login-form" class="form" action="" method="POST">
            <h3 class="text-center text-dark">Login</h3>
            
            <?php if( isset($error) ) : ?>
            <p style="color: #d63333; font-size: 14px;">NIK / Password salah!</p>
            <?php endif; ?>

            <div class="form-group">
              <label for="nik" class="text-dark">NIK</label><br>
              <input type="text" name="nik" id="nik" class="form-control" required />
            </div>
            <div class="form-group">
              <label for="password" class="text-dark">Password</label><br>
              <input type="password" name="password" id="password" class="form-control" required />
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="login">Login</button>
            </div>
          </form>
          <p class="login-card-footer-text text-dark">Belum terdaftar? 
          <a class="text-dark" href="Registrasi.php">Daftar disini!</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include ('Footer.php'); ?>