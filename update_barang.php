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
    <?php
    include "koneksi.php";
    $qry_get_barang = mysqli_query($conn, "select * from barang where id_barang = '".$_GET['id_barang']."'");
    $data_barang = mysqli_fetch_array($qry_get_barang);
    ?>
    <h3 style="margin-left:100px;">Ubah Data Barang</h3>
    <hr>
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
		<div class="panel panel-default">
			<div class="panel-body">
            <form action="proses_update_barang.php" method="post">
                <input type="hidden" name="id_barang" value="<?=$data_barang['id_barang']?>">
                <div class="top-margin">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" value="<?=$data_barang['nama_barang']?>" class="form-control">
                </div>
                <div class="top-margin">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" value="<?=$data_barang['deskripsi']?>" rows="5" class="form-control"></textarea>
                </div>
                <div class="top-margin">
                    <label>Stok</label>
                    <input type="text" name="stok" value="<?=$data_barang['stok']?>" class="form-control">
                </div>
                <div class="top-margin">
                    <label>Harga</label>
                    <input type="text" name="harga" value="<?=$data_barang['harga']?>" class="form-control">
		        </div>
                <hr>
                <div class="row">
					<div class="col-lg-4 text-left">
					<button class="btn btn-action" name="update" type="submit">Update</button>
					</div>
				</div>
            </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
