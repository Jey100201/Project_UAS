<?php 
if ($_POST) {
    $id_pegawai = $_POST['id_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($nama_pegawai)) {
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='ubah_pegawai.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='ubah_pegawai.php';</script>";
    } else {
        include "koneksi.php";
        if (empty($alamat)) {
            $update=mysqli_query($conn,"update pegawai set nama_pegawai='".$nama_pegawai."', tanggal_lahir='".$tanggal_lahir."', jenis_kelamin='".$jenis_kelamin."', alamat='".$alamat."', username='".$username."', password='".$password."' where id_pegawai = '".$id_pegawai."' ")or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update data');location.href='sidebar-right.php';</script>";    
            } else {
                echo "<script>alert('Gagal update data');location.href='ubah_pegawai.php';</script>"; 
            }
        } else {
            $update=mysqli_query($conn,"update pegawai set nama_pegawai='".$nama_pegawai."', tanggal_lahir='".$tanggal_lahir."', jenis_kelamin='".$jenis_kelamin."', alamat='".$alamat."', username='".$username."', password='".password."' where id_pegawai = '".$id_pegawai."' ")or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update data');location.href='sidebar-right.php';</script>";       
            }   else {
                echo "<script>alert('Gagal update data');location.href='ubah_pegawai.php';</script>";    
            }
        }
    }
    }
?>