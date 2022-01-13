<?php 
    session_start();
    unset($_SESSION['cart'][$_GET['id_barang']]);
    header('location: keranjang.php');
?>