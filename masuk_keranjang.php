<?php 
session_start();
    if ($_POST) {
        include "koneksi.php";

        $qry_get_barang=mysqli_query($conn, "select * from barang where id_barang ='".$_GET['id_barang']."'");
        $data_barang=mysqli_fetch_array($qry_get_barang);
        $_SESSION['cart']=array('id_barang'=>$data_barang['id_barang'], 'nama_barang'=>$data_barang['nama_barang'], 'qty'=>$_POST['penjualan']);
    }
    header('location: keranjang.php');
?>