<?php
include "../model/koneksi.php";
if(!isset($_SESSION["username"])){
	$idsms=$_GET['id_pesan'];
	$sql="delete from tb_pesan where id_pesan='$idsms'";
$select=mysql_query($sql) or die (mysql_error());

	echo "<script>alert('Pesan berhasil dihapus')</script>";
	
	 echo "<script language='javascript'>window.location='../homeAdm.php'</script>";

}





?>