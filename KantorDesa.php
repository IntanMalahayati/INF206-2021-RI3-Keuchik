<?php
require ('functions.php');

if( isset($_POST["login"]) ) {

  $nip = $_POST["nip"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM kantordesa WHERE NIP = '$nip'");
  $row = mysqli_fetch_assoc($result);

  if( mysqli_num_rows($result) === 1 ) {
    if($password == $row["Pass"]) {
      header("Location: Pemberitahuan.php");
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
<title>Login Kantor Desa | Keuchik</title>

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
            <p style="color: red; font-size: 12px;">Nomor Induk Pegawai / Password salah</p>
            <?php endif; ?>
            
            <div class="form-group">
              <label for="nip" class="text-dark">NIP</label><br>
              <input type="text" name="nip" id="nip" class="form-control">
            </div>
            <div class="form-group">
              <label for="password" class="text-dark">Password</label><br>
              <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="login">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include ('Footer.php'); ?>