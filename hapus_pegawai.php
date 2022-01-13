<?php
    if($_GET['id_pegawai']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn, "delete from pegawai where id_pegawai='".$_GET['id_pegawai']."'");
        if($qry_hapus){
            echo "<script>alert('berhasil menghapus data pegawai');location.href='sidebar-right.php';</script>";
        }
        else {
            echo "<script>alert('gagal menghapus data pegawai');location.href='sidebar-right.php';</script>";
        }
    }
?>