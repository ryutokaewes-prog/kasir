<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no = $_POST['no'];

$query = mysqli_query($koneksi, "INSERT INTO pelanggan (nama_pelanggan, alamat, nomor_tlpn) VALUES ('$nama', '$alamat', '$no')");

if ($query) {
    header("Location: tampilan1p.php");
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}
?>