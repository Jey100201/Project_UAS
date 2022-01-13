<?php 
	include "koneksi.php";
?>
<!doctype html>
<html lang="en">
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
    <h3 style="margin-left:100px;">Tambah Data Barang</h3>
    <hr>
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
		<div class="panel panel-default">
			<div class="panel-body">
            <form action="proses_tambah_barang.php" method="post">
                <div class="top-margin">
					<label>Nama Barang</label>
					<input type="text" name="nama_barang" class="form-control">
				</div>
				<div class="top-margin">
					<label>Deskripsi</label>
					<textarea name="deskripsi" rows="5" class="form-control"></textarea>
				</div>
                <div class="top-margin">
					<label>Stok</label>
					<input type="text" name="stok" class="form-control">
				</div>
                <div class="top-margin">
					<label>Harga</label>
					<input type="text" name="harga" class="form-control">
				</div>
                
				<hr>

				<div class="row">
					<div class="col-lg-4 text-left">
					<button class="btn btn-action" name="tambah" type="submit">Tambah</button>
					</div>
				</div>
            </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>