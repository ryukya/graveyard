<?php
include "../model/koneksi.php";
if(isset($_POST['login'])){
	$username=$_POST['user'];
	$password=$_POST['pass'];







$sql="select * from tb_keluarga where id_keluarga='$username' and password='$password'";
$select=mysql_query($sql) or die (mysql_error());

if(mysql_num_rows($select)>0){
	//jika validasi benar menampilkan login sukses dan direct ke dashboard
	echo "<script>alert('Berhasil Login-keluarga ')</script>";
	 echo "<script language='javascript'>window.location='../fhome.php'</script>";


		//mulai session
		session_start();
		//mendefinisikan variabel session username
		$_SESSION["username"]=$_POST["user"];
	


}else {
$sql="select * from tb_admin where id_admin='$username' and password='$password'";
$select=mysql_query($sql) or die (mysql_error());
if(mysql_num_rows($select)>0){
	//jika validasi benar menampilkan login sukses dan direct ke dashboard
	echo "<script>alert('Berhasil Login-admin')</script>";
		echo "<script language='javascript'>window.location='../homeAdm.php'</script>";

//mulai session
		session_start();
		//mendefinisikan variabel session username
		$_SESSION["username"]=$_POST["user"];
	

}
else{

	if ($username =""and $password =""){
	echo "<script>alert('Username atau password anda masih kosong.')</script>";
echo "<script language='javascript'>window.location='../index.php'</script>";

	}
	//jika gagal akan mengeluarkan  alert user atau password salah
else{
	echo "<script>alert('Username atau password anda salah')</script>";
echo "<script language='javascript'>window.location='../index.php'</script>";

}
}


}


}

?>





