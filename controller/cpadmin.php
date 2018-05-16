<?php
include "../model/koneksi.php";
session_start();
if(isset($_POST['edit'])){
	$nm=$_POST['nm'];
	$eml=$_POST['email'];
$nohp=$_POST['nohp'];
$almt=$_POST['alamat'];
	$pss=$_POST['pass'];
	$ID=$_SESSION['username'];

	$sql="UPDATE `tb_admin` SET alamat = '$almt', no_hp = '$nohp',password='$pss' ,nama_admin='$nm',kontak='$eml' WHERE id_admin = '$ID'";
$select=mysql_query($sql) or die (mysql_error());

	echo "<script>alert('Data berhasil diubah')</script>";
	
	 echo "<script language='javascript'>window.location='../admP.php'</script>";

}
?>