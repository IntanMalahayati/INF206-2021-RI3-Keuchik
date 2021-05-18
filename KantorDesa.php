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
          <form id="login-form" class="form" action="" method="post">
          
            <h3 class="text-center text-dark">Login</h3>
            <div class="form-group">
              <label for="nip" class="text-dark">NIP</label><br>
              <input type="text" name="nip" id="nip" class="form-control">
            </div>
            <div class="form-group">
              <label for="password" class="text-dark">Password</label><br>
              <input type="text" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
              <label for="remember-me" class="text-dark"><span><input id="remember-me" name="remember-me" type="checkbox"></span><span> Remember me</span></label><br>
              <button type="submit" class="btn btn-secondary">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include ('Footer.php'); ?>