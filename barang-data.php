<h3>Hore !!!! Data Barangmu Sudah Tersimpan :)</h3>
<style>
body {
  background-color: #ffccd9;
}
</style>
<table border="1">
    <tr bgcolor="#ff9999">
        <th >No</th>
        <th >Kode Barang</th>
        <th >Nama Barang</th>
        <th >Harga</th>
        <th colspan="3">Aksi</th>
    </tr>

    <?php

    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from barang");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr bgcolor=\"#ffcccc\">
        <td>$no</td>
        <td>$tampil[kode_barang]</td>
        <td>$tampil[nama_barang]</td>
        <td>$tampil[harga_barang]</td>
        <td><a href='?kode=$tampil[kode_barang]'>Hapus</a></td>
        <td><a href='barang-ubah.php?kode=$tampil[kode_barang]'>Ubah</a></td>
        <td><a href='barang-tambah.php?kode=$tampil[kode_barang]'>Tambah</a></td>
        </tr>";

        $no++;
    }
    ?>
</table>

<?php
if(isset($_GET['kode'])){
    mysqli_query($koneksi,"delete from barang where kode_barang='$_GET[kode]'");

    echo "Data Telah Terhapus";
    echo "<meta http-equiv=refresh content =2;URL='barang-data.php'>";
}
?>