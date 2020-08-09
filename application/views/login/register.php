<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register Account</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url("assets/"); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url("assets/"); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("assets/"); ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>FISIP UIN</b> BANDUNG </a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register Account</p>

      <form action="<?=base_url('Home/register_submit')?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="nama" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="NIM" name="nim" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="ion-card"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select type="text" name="jurusan" class="form-control" placeholder="MASUKAN" required>
              <option value="">--Pilih Jurusan--</option>
              <option value="Sosiologi">Sosiologi</option>
              <option value="Administrasi Negara">Administrasi Negara</option>
              <option value="Manjemen">Manjemen</option>
              <option value="Ilmu politik">Ilmu politik</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="ion-card"></span>
            </div>
          </div>
        </div>
         <div class="input-group mb-3">
          <select type="text" name="program" class="form-control" placeholder="MASUKAN" required>
              <option value="">--Pilih Program Studi--</option>
              <option value="S1">S1</option>
              <option value="S2">S2</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-graduation-cap"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="semester" name="semester" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="ion-ios-time-outline"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" value="<?= date('Y'); ?>" name="tahun" readonly required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="ion-ios-calendar"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Nomor HP" name="no" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          </div>
          <!-- /.col -->
          <br>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-success btn-block">Register</button>
          </div>
        </div>
          <!-- /.col -->
        
      </form>
    </br>
      <a href="<?=base_url("Home/login")?>" class="text-center">Already Have An Account</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?= base_url("assets/"); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url("assets/"); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url("assets/"); ?>dist/js/adminlte.min.js"></script>
</body>
</html>
