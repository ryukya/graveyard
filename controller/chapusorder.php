<?php
include "../model/koneksi.php";
if(!isset($_SESSION["username"])){
	$idodr=$_GET['id'];
	$sql="delete from tb_order where id_order='$idodr'";
$select=mysql_query($sql) or die (mysql_error());

	echo "<script>alert('Order berhasil dihapus')</script>";
	
	 echo "<script language='javascript'>window.location='../order.php'</script>";

}





?>