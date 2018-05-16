<?php
include "../model/koneksi.php";
if(isset($_POST['order'])){
	$tgl=$_POST['tanggal'];
	$eml=$_POST['email'];
$nam=$_POST['nama'];
	$lokasi=$_POST['lokasi'];
	$nmbat=$_POST['nmbatu'];
$tipe=$_POST['tipe'];
$now=date("Y-m-d");
$sql="insert into tb_order  VALUES
(NULL,'$nam','$eml','$now','$tgl','$nmbat','$tipe','not yet','$lokasi','0')";
$select=mysql_query($sql) or die (mysql_error());

	echo "<script>alert('Pesanan anda berhasil dikirimkan ')</script>";
	
	 echo "<script language='javascript'>window.location='../index.php'</script>";

}
?>