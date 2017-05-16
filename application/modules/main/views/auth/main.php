<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Planetica.tk | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/bootstrap/css/bootstrap.min.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/AdminLTE.min.css') ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/skins/_all-skins.min.css') ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/iCheck/flat/blue.css') ?>">

    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/iCheck/square/blue.css') ?>">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/morris/morris.css') ?>">
    <!-- jvectormap -->
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/datepicker/datepicker3.css') ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/daterangepicker/daterangepicker-bs3.css') ?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

	<header class="main-header">
	<!-- Logo -->
	<a href="<?= base_url() ?>" class="logo">
	  <!-- mini logo for sidebar mini 50x50 pixels -->
	  <span class="logo-mini"><b>SD</b></span>
	  <!-- logo for regular state and mobile devices -->
	  <span class="logo-lg"><b>Save-Dent</b></span>
	</a>
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top" role="navigation">
	  <!-- Sidebar toggle button-->
	  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
		<span class="sr-only">Toggle navigation</span>
	  </a>
	  <div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
		  <!-- Messages: style can be found in dropdown.less-->
		  
		  <!-- Notifications: style can be found in dropdown.less -->
		  
		  <!-- Tasks: style can be found in dropdown.less -->
		  
		  <!-- User Account: style can be found in dropdown.less -->
		  <?php $user = $this->ion_auth->user()->row(); ?>
		  <li class="dropdown user user-menu">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			  <img src="<?= base_url('assets/adminlte/dist/img/user2-160x160.jpg') ?>" class="user-image" alt="User Image">
			  <span class="hidden-xs"><?= @$user->first_name.' '.@$user->last_name; ?></span>
			</a>
			<ul class="dropdown-menu">
			  <!-- User image -->
			  
			  <!-- Menu Body -->
			  
			  <!-- Menu Footer-->
			  <li class="user-footer">
				<div class="pull-left">
				  <a href="#" class="btn btn-default btn-flat">Profile</a>
				</div>
				<div class="pull-right">
				<?php if (!$this->ion_auth->logged_in()){ ?>
				  <a href="<?= site_url('main/auth/login') ?>" class="btn btn-default btn-flat">Sign In</a>
				<?php } elseif($this->ion_auth->logged_in()) { ?>
				  <a href="<?= site_url('main/auth/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
				<?php } ?>
				</div>
			  </li>
			</ul>
		  </li>
		  <!-- Control Sidebar Toggle Button -->
		  <li>
			<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
              <img src="<?= base_url('assets/adminlte/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?= @$user->first_name.' '.@$user->last_name; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <?php $this->load->view('main_menu', '', FALSE); ?>
            <?php if($this->ion_auth->logged_in()) { ?>
            <?php $this->load->view('admin_menu', '', FALSE); ?>
            <?php } ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?= $judul_besar ?>
            <small><?= $judul_kecil ?></small>
          </h1>
          <ol class="breadcrumb">
            <?php $user = $this->ion_auth->user()->row(); ?>
              <p>Login : <?= @$user->first_name.' '.@$user->last_name; ?></p>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div>
            <?php $this->load->view($view_file, $output); ?>
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
			<b>Thank</b> You
          </div>
          <strong>Copyright &copy; 2017 <a href="http://planetica.tk">AA Planetica</a>,</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      
    </div><!-- ./wrapper -->

    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- jQuery 2.1.4 -->
    <script src="<?= base_url('assets/adminlte/plugins/jQuery/jQuery-2.1.4.min.js') ?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?= base_url('assets/adminlte/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/adminlte/plugins/iCheck/icheck.min.js') ?>"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?= base_url('assets/adminlte/plugins/morris/morris.min.js') ?>"></script>
    <!-- Sparkline -->
    <script src="<?= base_url('assets/adminlte/plugins/sparkline/jquery.sparkline.min.js') ?>"></script>
    <!-- jvectormap -->
    <script src="<?= base_url('assets/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>"></script>
    <script src="<?= base_url('assets/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url('assets/adminlte/plugins/knob/jquery.knob.js') ?>"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?= base_url('assets/adminlte/plugins/daterangepicker/daterangepicker.js') ?>"></script>
    <!-- datepicker -->
    <script src="<?= base_url('assets/adminlte/plugins/datepicker/bootstrap-datepicker.js') ?>"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?= base_url('assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>
    <!-- Slimscroll -->
    <script src="<?= base_url('assets/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') ?>"></script>
    <!-- FastClick -->
    <script src="<?= base_url('assets/adminlte/plugins/fastclick/fastclick.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/adminlte/dist/js/app.min.js') ?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url('assets/adminlte/dist/js/pages/dashboard.js') ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('assets/adminlte/dist/js/demo.js') ?>"></script>
  </body>
</html>
