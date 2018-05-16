<?php
include "../model/koneksi.php";
session_start();
if(isset($_SESSION['username'])){
	$id=$_GET['id'];


$data=mysql_query("select * from tb_order od join tb_lokasi ss on ss.id_lokasi=od.id_lokasi where od.id_order='$id'");
//menampilkan data hasil query menjadi data array
while($rdata=mysql_fetch_array($data)){

        $nama= $rdata["stone_name"];
        $tglw= $rdata["rip_date"];
        $lok=$rdata["id_lokasi"];
        $ido=$id;
}
	$sql="INSERT INTO tb_makam VALUES (NULL, '$nama', '$tglw', '$tglw','$lok','$ido')";
$select=mysql_query($sql) or die (mysql_error());

	$sql="delete from tb_order where id_order='$id'";
$select=mysql_query($sql) or die (mysql_error());
	echo "<script>alert('Makam done ')</script>";
	
	 echo "<script language='javascript'>window.location='../order.php'</script>";

}
?>