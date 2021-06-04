<h3>Silahkan Tambah Barangmu Disini !!!!</h3>
<form action="" method="post">
<style>
body {
  background-color: #ffe6e6;
}
</style>
    <table bgcolor="#ff9999">
        <tr>
            <td width="130">Kode Barang</td>
            <td><input type="text" name="kode_barang"></td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama_barang"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga_barang"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
</form>

<?php
include "koneksi.php";
if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into barang set
    kode_barang = '$_POST[kode_barang]',
    nama_barang = '$_POST[nama_barang]',
    harga_barang = '$_POST[harga_barang]'");

    echo "Data barang baru telah tersimpan <a href='barang-data.php?kode=$tampil[kode_barang]'>Lihat barang disini</a>";
}
?>