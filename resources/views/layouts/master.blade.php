<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend_assets') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->

  <!-- Tempusdominus Bootstrap 4 -->
  {{-- <link rel="stylesheet" href="{{ asset('backend_assets') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> --}}
  <!-- iCheck -->
  {{-- <link rel="stylesheet" href="{{ asset('backend_assets') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> --}}
  <!-- JQVMap -->
  {{-- <link rel="stylesheet" href="{{ asset('backend_assets') }}/plugins/jqvmap/jqvmap.min.css"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend_assets') }}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('backend_assets') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('backend_assets') }}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('backend_assets') }}/plugins/summernote/summernote-bs4.min.css">
  <!--toastr css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">



    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <span class="brand-text font-weight-light">ADMIN PANEL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('Dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Dashbaord

              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('SiteSettingPage') }}" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>
                 Site Setting

              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('TitleSettingPage') }}" class="nav-link ">
              <i class="nav-icon fas fa-heading"></i>
              <p>
               Title Setting

              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('MyDetail') }}" class="nav-link ">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
               My Detail

              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('Education') }}" class="nav-link ">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Education

              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('Experience') }}" class="nav-link ">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                Experience

              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('SoftwareSkill') }}" class="nav-link ">
              <i class="nav-icon fas fa-code"></i>
              <p>
                Software Skill

              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('PersonalSkill') }}" class="nav-link ">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Personal Skill

              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="{{ route('Testimonial') }}" class="nav-link ">
              <i class="nav-icon fas fa-comment"></i>
              <p>
                Testimonial

              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('Blog') }}" class="nav-link ">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
               Blog

              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('Service') }}" class="nav-link ">
              <i class="nav-icon fas fa-tools"></i>
              <p>
               Service

              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('Message') }}" class="nav-link ">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
               Message

              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('Portfolio') }}" class="nav-link ">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
               Portfolio

              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('PortfolioDetail') }}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Portfolio Detail

              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('Profile') }}" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p>
               Profile
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('Logout') }}" class="nav-link ">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
               Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     @yield('content')


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('backend_assets') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('backend_assets') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend_assets') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->





<!-- overlayScrollbars -->
<script src="{{ asset('backend_assets') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend_assets') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend_assets') }}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend_assets') }}/dist/js/pages/dashboard.js"></script>
<!--toastr js--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@yield('js')
</body>
</html>
