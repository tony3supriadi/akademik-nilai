<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$title?> | Aplikasi Akademik Nilai SMA N 1 Bobotsari</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url('/assets/bootstrap/css/bootstrap.min.css')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('/assets/dist/css/AdminLTE.min.css')?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url('/assets/dist/css/skins/_all-skins.min.css')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url('/assets/plugins/iCheck/flat/blue.css')?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?=base_url('/assets/plugins/morris/morris.css')?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=base_url('/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css')?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url('/assets/plugins/datatables/dataTables.bootstrap.css')?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?=base_url('/assets/plugins/datepicker/datepicker3.css')?>">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?=base_url('/assets/plugins/iCheck/all.css')?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?=base_url('/assets/plugins/datepicker/datepicker3.css')?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url('/assets/plugins/select2/select2.min.css')?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url('/assets/plugins/daterangepicker/daterangepicker.css')?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=base_url('/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url()?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>NL</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Akademik</b>NILAI</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>/assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?=base_url('/profil/QW1yaXphbCBGYXRodXJvaG1hbg.html')?>" class="btn btn-default btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a href="<?=base_url('/logout.html')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="<?=base_url('/profil/QW1yaXphbCBGYXRodXJvaG1hbg.html')?>" class="btn btn-xs btn-info">Profil</a>
          <a href="<?=base_url('/logout.html')?>" class="btn btn-xs btn-danger">Logout</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li <?php if ($navigation == "home") echo "class='active'"?>>
          <a href="<?=base_url()?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview <?php if ($navigation == "master") echo "active"?>">
          <a href="">
            <i class="fa fa-th"></i>
            <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('/siswa.html')?>"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
            <li><a href="<?=base_url('/guru.html')?>"><i class="fa fa-circle-o"></i> Data Guru</a></li>
            <li><a href="<?=base_url('/pelajaran.html')?>"><i class="fa fa-circle-o"></i> Pelajaran</a></li>
            <li><a href="<?=base_url('/kelas.html')?>"><i class="fa fa-circle-o"></i> Kelas</a></li>
            <li><a href="<?=base_url('/users.html')?>"><i class="fa fa-circle-o"></i> Users</a></li>
          </ul>
        </li>
        <li <?php if ($navigation == "kesiswaan") echo "class='active'"?>>
          <a href="<?=base_url('/kesiswaan.html')?>">
            <i class="fa fa-group"></i> <span>Kesiswaan</span>
          </a>
        </li>
        <li class="treeview <?php if ($navigation == "laporan") echo "active"?>">
          <a href="">
            <i class="fa fa-pie-chart"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('/laporan/siswa.html')?>"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
            <li><a href="<?=base_url('/laporan/guru.html')?>"><i class="fa fa-circle-o"></i> Data Guru</a></li>
            <li><a href="<?=base_url('/laporan/pelajaran.html')?>"><i class="fa fa-circle-o"></i> Pelajaran</a></li>
            <li><a href="<?=base_url('/laporan/kelas.html')?>"><i class="fa fa-circle-o"></i> Kelas</a></li>
            <li><a href="<?=base_url('/laporan/kesiswaan.html')?>"><i class="fa fa-circle-o"></i> Kesiswaan</a></li>
            <li><a href="<?=base_url('/laporan/penilaian.html')?>"><i class="fa fa-circle-o"></i> Penilaian</a></li>
            <li><a href="<?=base_url('/laporan/users.html')?>"><i class="fa fa-circle-o"></i> Users</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php $this->load->view($container); ?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; <?=date('Y')?> <a href="http://www.babeloft.com" target="_blank">BebeLoft</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?=base_url('/assets/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url('/assets/bootstrap/js/bootstrap.min.js')?>"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?=base_url('/assets/plugins/morris/morris.min.js')?>"></script>
<!-- Sparkline -->
<script src="<?=base_url('/assets/plugins/sparkline/jquery.sparkline.min.js')?>"></script>
<!-- jvectormap -->
<script src="<?=base_url('/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?>"></script>
<script src="<?=base_url('/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url('/assets/plugins/knob/jquery.knob.js')?>"></script>
<!-- Select2 -->
<script src="<?=base_url('/assets/plugins/select2/select2.full.min.js')?>"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?=base_url('/assets/plugins/daterangepicker/daterangepicker.js')?>"></script>
<!-- DataTables -->
<script src="<?=base_url('/assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('/assets/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
<!-- datepicker -->
<script src="<?=base_url('/assets/plugins/datepicker/bootstrap-datepicker.js')?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url('/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>"></script>
<!-- bootstrap datepicker -->
<script src="<?=base_url('/assets/plugins/datepicker/bootstrap-datepicker.js')?>"></script>
<!-- Slimscroll -->
<script src="<?=base_url('/assets/plugins/slimScroll/jquery.slimscroll.min.js')?>"></script>
<!-- iCheck 1.0.1 -->
<script src="<?=base_url('/assets/plugins/iCheck/icheck.min.js')?>"></script>
<!-- FastClick -->
<script src="<?=base_url('/assets/plugins/fastclick/fastclick.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('/assets/dist/js/app.min.js')?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url('/assets/dist/js/pages/dashboard.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('/assets/dist/js/demo.js')?>"></script>

<script>

    // DataTable Selected
    $("#table-data").DataTable();
    $("#table-report").DataTable({
      "pageLength": 50,
      "lengthChange": false,
      "searching": false,
    }); 

    //Initialize Select2 Elements
    $(".select2").select2();

    // Date picker
    $('#date_picker').datepicker({
      autoclose: true
    });   

    // Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });
</script>

</body>
</html>
