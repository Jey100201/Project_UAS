<h2>Daftar Barang Di Keranjang</h2>
<table class="table table-hover table striped">
    <thead>
        <tr>
            <th>NO</th><th>NAMA BARANG</th><th>JUMLAH</th><th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach (@$_SESSION['cart'] as $key_produk => $val_produk) : ?>
            <tr>
                <td><?=$key_produk+1?></td><td><?=$val_produk['nama_barang']?></td><td><?=$val_produk['qty']?></td><td><a href="hapus_cart.php=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>
        <?php endforeach ?>
        ?>
    </tbody>
</table>
<a href="checkout.php" class="btn btn-success">Check Out</a>