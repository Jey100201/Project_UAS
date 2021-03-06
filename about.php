<?php 
session_start();
	if ($_SESSION['status_login']!=true) {
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title></title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> </button>
				<a class="navbar-brand" href="index.php">J Store</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.php">Home</a></li>
					<li class="active"><a href="about.php">About</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left.php">Left Sidebar</a></li>
							<li><a href="sidebar-right.php">Right Sidebar</a></li>
						</ul>
					</li>
					<li><a href="contact.php">Contact</a></li>
					<li><a class="btn" href="signup.php">SIGN IN / SIGN UP</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">About</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">About us</h1>
				</header>
				<h3>J Store</h3>
				<p>J Store Bergerak dibidang pangan khususnya sembako. Kami memiliki fasilitas yang memadai dan sekaligus menjual produk-produk kebutuhan pangan sehari-hari. Bukan hanya itu kami juga memiliki karyawan yang sangat cekatan dan juga ramah. Kami juga sering mengirim barang keseluruh Indonesia. Dengan begitu kebutuhan akan sembako akan terpenuhi hingga kepedalaman yang sulit untuk dijangkau kendaraan pada umumnya.</p>
				<p></p>
				<h3>Tempat yang nyaman</h3>
				<p>Bukan hanya pelayanan yang ramah tapi tempat juga kami berikan yang terbaik agar para pelanggan nyaman untuk berbelanja. Bukan hanya itu kami juga menyiapkan playground/tempat bermain untuk anak-anak agar merasa senang dan itu kami sediakan secara gratis.</p>
				<h3>Tempat yang strategis</h3>
				<p>Jangan khawatir mengunjungi toko kami. Selain nyaman, toko kami juga berada di tempat yang sangat mudah dijangkau dan jangan khawatir karena kami juga menyediakan tempat parkir sehingga pelanggan tidak perlu repot-repot untuk mencari tempat parkir</p>
				
			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">

				<div class="widget">
					<h4>Daftar produk</h4>
					<ul class="list-unstyled list-spaces">
						<li><a href="sidebar-left.php">Makanan cepat saji</a><br><span class="small text-muted">Makanan yang cepat penyajiannya berupa mie instan dll</span></li>
						<li><a href="sidebar-left.php">Bahan mentah</a><br><span class="small text-muted">Meliputi bahan pembuat kue dan juga makanan pokok sehari-hari.</span></li>
					</ul>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+62 859 6150 0023<br>
								<a href="mailto:#">muhammadjefry488@gmail.com</a><br>
								<br>
								Jl. Arjasa No. 27 Omben, Sampang, Madura
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons clearfix">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">J Store</h3>
						<div class="widget-body">
							<p>J Store adalah toko sekaligus agen yang menyediakan berbagai macam sembako mulai dari tepung, telor, gula, dll.</p>
							<p>Kami juga memberikan pelayanan yang ramah dan juga cepat agar pelanggan merasa puas akan pelayanan yang kami berikan.</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="index.php">Home</a> | 
								<a href="about.php">About</a> |
								<a href="sidebar-right.php">Sidebar</a> |
								<a href="contact.php">Contact</a> |
								<b><a href="signup.php">Sign up</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2022, Muhammad Jefry Purnomo. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>