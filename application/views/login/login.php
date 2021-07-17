
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SILOKERNF - Login</title>
  <link href="<?= base_url() ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>assets/admin/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <?php
                      if($this->session->flashdata('fail'))
                      {
                        echo '<div class="alert alert-danger">' . $this->session->flashdata('fail') . '</div>';
                        unset($_SESSION['fail']);
                      };

                  ?>
                  <form class="user" action="<?= base_url('index.php/Login/aksi_login/')?>" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control" id="username" name="username" placeholder="Enter Your Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="register.html">Create an Account!</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="<?= base_url() ?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/js/ruang-admin.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/js/script.js"></script>
</body>

</html>