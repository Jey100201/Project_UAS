<?php 
    session_start();
    include "koneksi.php";
    $cart=@$_SESSION['cart'];
    if (count($cart)>0) {
        $tgl_beli=date('Y-m-d', mktime(0,0,0,date('m')),(date('d')),(date('Y')));
        mysqli_query($conn, "insert into penjualan(id_barang, id_pegawai, nama_barang, tgl_jual)value('".$_SESSION['id_barang']."', '".$_SESSION['id_pegawai']."', '".$_SESSION['nama_barang']."', '".$tgl_beli."')");
        $id=mysqli_insert_id($conn);
        foreach ($cart as $key_barang => $val_barang) {
            mysqli_quey($conn, "insert into penjualan(nama_barang, tgl_jual, id_pegawai, id_barang, qty)value('".$val_barang['nama_barang']."', '".$val_barang['tgl_jual']."', '".$val_barang['id_pegawai']."', '".$val_barang['id_barang']."', '".$val_barang['qty']."')");
        }
        unset($_SESSION['cart']);   
        echo '<script>alert("Barang telah dibeli");location.href="sidebar-left.php"</script>';
    }
?>