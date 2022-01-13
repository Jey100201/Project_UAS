<!DOCTYPE html>
<html>
    <head>
    <link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
        <title></title>
    </head>
<body>
<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
				<h1 class="page-title" style="margin-left:100px;">Registration</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Register a new account</h3>
							<p class="text-center text-muted">Silahkan isi form dibawah ini untuk membuat akun baru, jika memiliki akun silahkan <a href="login.php">Login.</a></p>
							<hr>

							<form action="proses_tambah_pegawai.php" method="post">
								<div class="top-margin">
									<label>Nama Pegawai <span class="text-danger">*</span></label>
									<input type="text" name="nama_pegawai" class="form-control">
								</div>
								<div class="top-margin">
									<label>Tanggal Lahir <span class="text-danger">*</span></label>
									<input type="date" name="tanggal_lahir" class="form-control">
								</div>
								<div class="top-margin">
								<label>Jenis Kelamin <span class="text-danger">*</span></label>
									<select name="jenis_kelamin" class="form-control">
										<option></option>
										<option value="L">Laki-laki</option>
										<option value="P">Perempuan</option>
									</select>
								</div>
								<div class="top-margin">
									<label>Alamat <span class="text-danger">*</span></label>
									<textarea name="alamat" rows="5" class="form-control"></textarea>
								</div>
								<div class="top-margin">
									<label>Username <span class="text-danger">*</span></label>
									<input type="text" name="username" class="form-control">
								</div>

								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Password <span class="text-danger">*</span></label>
										<input type="password" name="password" class="form-control">
									</div>
									<div class="col-sm-6">
										<label>Confirm Password <span class="text-danger">*</span></label>
										<input type="password" name="password" class="form-control">
									</div>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<b><a href="">Forgot password?</a></b>
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" name="login" type="submit">Log in</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>    