<?php
	if($_POST){
		$nama = $_POST['nama_pegawai'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $username = $_POST['username'];
		$password = $_POST['password'];
		if(empty($nama)){
			echo "<script>alert('Nama pegawai wajib diisi');location.href='signup.php';</script>";
		} elseif(empty($username)){
			echo "<script>alert('Username wajib diisi');location.href='signup.php';</script>";
		} elseif (empty($password)) {
			echo "<script>alert('Password wajib diisi');location.href='signup.php';</script>";
		} else {
		include "koneksi.php";
		$insert = mysqli_query($conn, "insert into pegawai (nama_pegawai, tanggal_lahir, jenis_kelamin, alamat, username, password) value ('".$nama."','".$tanggal_lahir."','".$jenis_kelamin."',
		'".$alamat."','".$username."', '".$password."')")or die(mysqli_error($conn));
		if($insert){
			echo "<script>alert('Data berhasil ditambahkan');location.href='sidebar-right.php';</script>";
		} else {
			echo "<script>alert('gagal menambahkan data');location.href='signup.php';</script>";
		}
	}
}
?>