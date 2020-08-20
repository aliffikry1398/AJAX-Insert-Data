<?php
//Include file koneksi ke database
include "koneksi.php";
//menerima nilai dari kiriman form input-barang
$nama_buku=$_POST["nama_buku"];
$kode_buku=$_POST["kode_buku"];
$jumlah=$_POST["jumlah"];
$tgl=$_POST["tgl"];

//Query input menginput data kedalam tabel barang
$sql="INSERT INTO `buku` (id,nama_buku,kode_buku,jumlah_buku,tanggal) values(NULL,'$nama_buku','$kode_buku','$jumlah','$tgl')";

//Mengeksekusi/menjalankan query diatas
$hasil=mysqli_query($kon,$sql);
?>
