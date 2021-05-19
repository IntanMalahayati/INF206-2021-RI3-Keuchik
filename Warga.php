<?php

require ('functions.php');

if(isset($_POST["login"])){
  $nik=$_POST["nik"];
  $password=$_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM warga WHERE NIK = '$nik'");

  if(mysqli_num_rows($result)===1){
    $row=mysqli_fetch_assoc($result);
    
    if(password_verify($password, $row['password'])){
      echo 'ok';
      header("Location: FormWarga.php");
      exit();
    }
  }
  $error=true;
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

        <?php if( isset($error) ) : ?>
        <p style="color: red; font-size: 12px;">Nomor Induk Kependudukan / Password salah</p>
        <?php endif; ?>

          <form id="login-form" class="form" action="FormWarga.php" method="POST">
            <h3 class="text-center text-dark">Login</h3>
            <div class="form-group">
              <label for="nik" class="text-dark">NIK</label><br>
              <input type="text" name="nik" id="nik" class="form-control">
            </div>
            <div class="form-group">
              <label for="password" class="text-dark">Password</label><br>
              <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
              <label for="remember-me" class="text-dark"><span>
              <input id="remember-me" name="remember-me" type="checkbox"></span><span> Remember me</span></label><br>
              <button type="submit" class="btn btn-secondary">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include ('Footer.php'); ?>