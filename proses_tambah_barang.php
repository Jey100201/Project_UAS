<?php
	if($_POST){
		$nama_barang = $_POST['nama_barang'];
		$deskripsi = $_POST['deskripsi'];
		$stok = $_POST['stok'];
		$harga = $_POST['harga'];
		if(empty($nama_barang)){
			echo "<script>alert('Nama barang Tidak Boleh Kosong');location.href='tambah_barang.php';</script>";
		}
		elseif (empty($deskripsi)){
		echo "<script>alert('Deskripsi Tidak Boleh Kosong');location.href='tambah_barang.php';</script>";		
		}
		elseif (empty($stok)) {
			echo "<script>alert('Stok harap diisi');location.href='tambah_barang.php';</script>";
		}
		else {
		include "koneksi.php";
		$insert = mysqli_query($conn, "insert into barang (nama_barang, deskripsi, stok, harga) value ('".$nama_barang."','".$deskripsi."','".$stok."','".$harga."')")or die(mysqli_error($conn));
		if($insert){
			echo "<script>alert('sukses menambahkan data barang');location.href='sidebar-left.php';</script>";
		}
		else {
			echo "<script>alert('gagal menambahkan data barang');location.href='tambah_barang.php';</script>";
		}
	}
	}
?>