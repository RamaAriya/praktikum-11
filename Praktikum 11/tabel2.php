<?php
$host		="localhost";
$username	="root";
$password	="";
$database	="db_penjualan2";

include 'koneksi.php';


$sql= "CREATE TABLE tb_penjualan(
id_penjualan INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
id_barang INT(11) NOT NULL,
jumlah INT(11) NOT NULL,
tgl_penjualan DATE NOT NULL
)";

if(mysqli_query($koneksi, $sql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($koneksi);
}

mysqli_close($koneksi); 
?>