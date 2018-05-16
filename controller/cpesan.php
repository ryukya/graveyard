<?php
include "../model/koneksi.php";
if(isset($_POST['pesan'])){
	$nm=$_POST['nama'];
	$eml=$_POST['email'];

	$psn=$_POST['sms'];

	$sql="INSERT INTO `dbgy`.`tb_pesan` (`id_pesan`, `nama`, `email`, `pesan`) VALUES (NULL, '$nm', '$eml', '$psn');";
$select=mysql_query($sql) or die (mysql_error());

	echo "<script>alert('Pesan anda berhasil dikirimkan')</script>";
	
	 echo "<script language='javascript'>window.location='../index.php'</script>";

}
?>