<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title><?= $title; ?></title>

  <link href="<?= base_url(); ?>assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?= base_url('assets/img/logo.png'); ?>">
  <style>
    body {
      background-image: url(../assets/img/bg-login.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }

    div.card {
      background-color: rgba(0,50,142,0.5);
    }

    h5.si-title {
      color: white;
      font-weight: bold;
    }

    button.btn-user {
      background-color: #00a8ce;
      color: white;
      font-weight: bold;
    }

    button.btn-user:hover {
      color: yellow;
    }

    @media only screen and (max-width: 400px) {
      h5.si-title {
        font-size: 14px;
    }
  </style>
</head>
<body>

  <div class="container mt-5 pt-5">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5">

        <div class="card o-hidden border-0 shadow-lg my-2">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row justify-content-center pb-2">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <img src="<?= base_url('assets/img/logo.png'); ?>" width="80">
                    <h5 class="mb-3 mt-3 si-title">SISTEM INFORMASI KEUANGAN <br> MA YPI MARTAPURA</h5>
                  </div>
                  
                  <?= $this->session->flashdata('message'); ?>

                  <form class="user" method="post" action="">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" placeholder="Username" value="<?= set_value('username'); ?>" autocomplete="off" autofocus required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
                    </div>
                    <button class="btn btn-user btn-block" name="login">Login</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <script src="<?= base_url() ?>assets/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>
</body>
</html>
