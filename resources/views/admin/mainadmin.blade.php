<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::asset('assetsadmin/img/favicon.png') }}" rel="icon">
  <link href="{{ URL::asset('assetsadmin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{ URL::asset('https://fonts.gstatic.com') }}" rel="preconnect">
  <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::asset('assetsadmin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assetsadmin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assetsadmin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assetsadmin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assetsadmin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assetsadmin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assetsadmin/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ URL::asset('assetsadmin/css/style.css') }}" rel="stylesheet">

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


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/akunadmin">
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
        <a class="nav-link {{ ($title === "dashboard") ? '' : 'collapsed' }}" href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ ($title === "job") ? '' : 'collapsed' }}" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Pekerjaan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="/jobproses" class="{{ ($title === "jobproses") ? 'active' : '' }}">
                  <i class="bi bi-circle"></i><span>Sedang Proses</span>
                </a>
            </li>
            <li>
                <a href="/jobdone" class="{{ ($title === "jobdone") ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Telah Selesai</span>
                </a>
            </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ ($title === "laporan") ? '' : 'collapsed' }}" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="/laporhari" class="{{ ($title === "laporhari") ? 'active' : '' }}">
                  <i class="bi bi-circle"></i><span>Harian</span>
                </a>
            </li>
            <li>
                <a href="/laporminggu" class="{{ ($title === "laporminggu") ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Mingguan</span>
                </a>
            </li>
            <li>
                <a href="/laporbulan" class="{{ ($title === "laporbulan") ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Bulanan</span>
                </a>
            </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ ($title === "akunsetting") ? '' : 'collapsed' }}" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Account Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/akunadmin" class="{{ ($title === "akunadmin") ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Admin</span>
            </a>
          </li>
          <li>
            <a href="/akunuser" class="{{ ($title === "akunuser") ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>User</span>
            </a>
          </li>
        </ul>
      </li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    @yield('mainadmin')

  </main>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ URL::asset('assetsadmin/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ URL::asset('assetsadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('assetsadmin/vendor/chart.js/chart.min.js') }}"></script>
  <script src="{{ URL::asset('assetsadmin/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ URL::asset('assetsadmin/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ URL::asset('assetsadmin/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ URL::asset('assetsadmin/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ URL::asset('assetsadmin/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ URL::asset('assetsadmin/js/main.js') }}"></script>

</body>

</html>