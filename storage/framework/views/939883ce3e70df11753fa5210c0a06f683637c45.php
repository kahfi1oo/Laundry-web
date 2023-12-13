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
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/dashboard" class="logo d-flex align-items-center">
        <img src="assets/img/logo/justlogo.png" alt="">
        <span class="d-none d-lg-block">Viola Laundry</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>
          </ul>

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">Nama Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Nama Admin</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form action="/admin" method="get">
                <button type="submit" class="dropdown-item d-flex align-items-center"><i class="bi bi-box-arrow-right"></i>
                  Sign Out</button>
                
              </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link <?php echo e(($title === "dashboard") ? '' : 'collapsed'); ?>" href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php echo e(($title === "job") ? '' : 'collapsed'); ?>" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Pekerjaan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="/jobproses" class="<?php echo e(($title === "jobproses") ? 'active' : ''); ?>">
                  <i class="bi bi-circle"></i><span>Sedang Proses</span>
                </a>
            </li>
            <li>
                <a href="/jobdone" class="<?php echo e(($title === "jobdone") ? 'active' : ''); ?>">
                    <i class="bi bi-circle"></i><span>Telah Selesai</span>
                </a>
            </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php echo e(($title === "laporan") ? '' : 'collapsed'); ?>" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="/laporhari" class="<?php echo e(($title === "laporhari") ? 'active' : ''); ?>">
                  <i class="bi bi-circle"></i><span>Harian</span>
                </a>
            </li>
            <li>
                <a href="/laporminggu" class="<?php echo e(($title === "laporminggu") ? 'active' : ''); ?>">
                    <i class="bi bi-circle"></i><span>Mingguan</span>
                </a>
            </li>
            <li>
                <a href="/laporbulan" class="<?php echo e(($title === "laporbulan") ? 'active' : ''); ?>">
                    <i class="bi bi-circle"></i><span>Bulanan</span>
                </a>
            </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php echo e(($title === "akunsetting") ? '' : 'collapsed'); ?>" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Account Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/akunadmin" class="<?php echo e(($title === "akunadmin") ? 'active' : ''); ?>">
              <i class="bi bi-circle"></i><span>Admin</span>
            </a>
          </li>
          <li>
            <a href="/akunuser" class="<?php echo e(($title === "akunuser") ? 'active' : ''); ?>">
              <i class="bi bi-circle"></i><span>User</span>
            </a>
          </li>
        </ul>
      </li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <?php echo $__env->yieldContent('mainadmin'); ?>

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

</html><?php /**PATH G:\Game\skripsi\viola\violalaundry\resources\views/admin/mainadmin.blade.php ENDPATH**/ ?>