<?php
include 'koneksi.php';

if (!$koneksi) {
	die("Connection failed : ".mysqli_connect_error());
}

$sql = "INSERT INTO tb_penjualan (id_penjualan, id_barang, jumlah, tgl_penjualan) VALUES
(1,1,5, '2022-01-11'),
(2,3,3, '2022-01-04'),
(3,2,4, '2022-02-09'),
(4,2,3, '2022-03-10'),
(5,3,4, '2022-04-11'),
(6,4,1, '2022-05-05'),
(7,1,2, '2022-05-07'),
(8,4,7, '2022-06-11'),
(9,3,2, '2022-06-09'),
(10,2,5, '2022-07-11'),
(11,1,2, '2022-07-12')
";

if (mysqli_query($koneksi, $sql)) {
	echo "Insert Data Behasil";
}
else {
	echo "Error: ". $sql. "<br>" . mysqli_error($koneksi); 
}
mysqli_close($koneksi); 
?>