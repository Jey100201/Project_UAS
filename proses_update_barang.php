<?php 
if ($_POST) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $id_pegawai = $_POST['id_pegawai'];
    if (empty($nama_barang)) {
        echo "<script>alert('nama barang tidak boleh kosong');location.href='update_barang.php';</script>";
    } elseif (empty($stok)) {
        echo "<script>alert('isikan sisa stok');location.href='update_barang.php';</script>";
    } else {
        include "koneksi.php";
        if (empty($stok)) {
            $update=mysqli_query($conn,"update barang set nama_barang='".$nama_barang."', deskripsi='".$deskripsi."', harga='".$harga."', id_pegawai='".$id_pegawai."' where id_barang = '".$id_barang."' ")or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update data');location.href='sidebar-left.php';</script>";    
            } else {
                echo "<script>alert('Gagal update data');location.href='update_barang.php';</script>"; 
            }
        } else {
            $update=mysqli_query($conn,"update barang set nama_barang='".$nama_barang."', deskripsi='".$deskripsi."', stok='".$stok."', harga='".$harga."'  where id_barang = '".$id_barang."' ")or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update data');location.href='sidebar-left.php';</script>";       
            }   else {
                echo "<script>alert('Gagal update data');location.href='update_barang.php';</script>";    
            }
        }
    }
    }
?>