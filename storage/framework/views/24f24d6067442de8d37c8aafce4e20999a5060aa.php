<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assetsadmin/img/favicon.png" rel="icon">
  <link href="assetsadmin/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assetsadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assetsadmin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assetsadmin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assetsadmin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assetsadmin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assetsadmin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assetsadmin/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assetsadmin/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/admin" class="logo d-flex align-items-center">
        <img src="assets/img/logo/justlogo.png" alt="">
        <span class="d-none d-lg-block">Viola Laundry</span>
      </a>
    </div><!-- End Logo -->

  </header><!-- End Header -->

  <main>

    <div class="row justify-content-center mt-5">
        <div class="col-md-3">

          <?php if(session()->has('loginError')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?php echo e(session('loginError')); ?>

            </div>
          <?php endif; ?>

            <div>
                <h1 class="h3 mb-4 fw-normal text-center">Login</h1>
        
                <form action="/admin" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="text-center">
                    <img class="mb-4" src="assets/img/logo/login.png" alt="" width="140" height="140">
                    </div>
                    <div class="p-2">
                    <input type="text" class="form-control" id="username" name="username_admin" placeholder="Username" autofocus required>
                    </div>
                    <div class="p-2">
                    <input type="password" class="form-control" id="password" name="password_admin" placeholder="Password" required>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Login</button>
                </form>
                
            </div>
        </div>
      </div>

  </main>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assetsadmin/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assetsadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assetsadmin/vendor/chart.js/chart.min.js"></script>
  <script src="assetsadmin/vendor/echarts/echarts.min.js"></script>
  <script src="assetsadmin/vendor/quill/quill.min.js"></script>
  <script src="assetsadmin/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assetsadmin/vendor/tinymce/tinymce.min.js"></script>
  <script src="assetsadmin/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assetsadmin/js/main.js"></script>

</body>

</html>
<?php /**PATH G:\Game\skripsi\viola\violalaundry\resources\views/admin/login.blade.php ENDPATH**/ ?>