<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="index.php?include=konfirmasi-login" method="POST">
        <h2 class="form-login-heading">Admin Katalog</h2>
    <div class="login-wrap">
    <p class="login-warp">Sign in to start your session</p>
    <?php if(!empty($_GET['gagal'])){?>
      <?php if($_GET['gagal']=="userKosong"){?>
      <span class="text-danger">
      Maaf Username Tidak Boleh Kosong
      </span>
      <?php } else if($_GET['gagal']=="passKosong"){?>
      <span class="text-danger">
      Maaf Password Tidak Boleh Kosong
      </span>
      <?php } else {?>
      <span class="text-danger">
      Maaf Username dan Password Anda Salah
      </span>
      <?php }?>
      <?php }?>

          <input type="text" class="form-control" placeholder="Username" name="username">
          <br>
          <input type="password" class="form-control" placeholder="Password" name="password">
          <br>
          <button class="btn btn-theme btn-block" href="konfirmasilogin.php" type="login" name="login" ><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("foto/login-background.jpg", {
      speed: 500
    });
  </script>
</body>