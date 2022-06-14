<?php
include 'koneksi.php';

if (!$koneksi) {
	die("Connection failed : ".mysqli_connect_error());
}

$sql = "INSERT INTO tb_barang (id_barang, barang) VALUES
(1, 'Redmi Note 7'),
(2, 'Samsung M20'),
(3, 'Realme 3'),
(4, 'Iphone X')";

if (mysqli_query($koneksi, $sql)) {
	echo "Insert Data Behasil";
}
else {
	echo "Error: ". $sql. "<br>" . mysqli_error($koneksi); 
}
mysqli_close($koneksi); 
?>