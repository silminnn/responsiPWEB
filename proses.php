<?php 
$tanggal = date('Y-m-d');
$nama_lengkap = $_POST['nama_lengkap'];
$Provinsi = $_POST['Provinsi'];
$Alamat = $_POST['Alamat'];
$telp = $_POST['telp'];
$jk = $_POST['jkelamin'];
$Pesanan = $_POST['Pesanan'];
$beli = $_POST['beli'];

$fp = fopen("pesanan.txt", "a+");
fputs($fp, "$tanggal|$nama_lengkap|$Provinsi|$Alamat|$telp|$jk|$Pesanan|$beli\n");
fclose($fp);

header("Location: exproses.php")
?>