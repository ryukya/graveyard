<?php
include "../model/koneksi.php";
if(isset($_POST['keluarga'])){
	$eml=$_POST['email'];

$password=$_POST['pass'];
	$usr=$_POST['user'];
$nam=$_POST['nama'];
$idm=$_POST['id_makam'];
$sql="insert into tb_keluarga  VALUES
('$usr','$nam','pass','$nam','$eml')";
$select=mysql_query($sql) or die (mysql_error());

$sql="insert into tb_pemakaman  VALUES
(NULL,'$usr','$idm')";
$select=mysql_query($sql) or die (mysql_error());



	echo "<script>alert('Pesanan anda berhasil dikirimkan ')</script>";
	
	 echo "<script language='javascript'>window.location='../homeAdm.php'</script>";

}
?>