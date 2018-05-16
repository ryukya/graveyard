<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="bootstrap-3.3.5/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-3.3.5/dist/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="container-fluid">
  <div class="page-header">
<h1>GraveYard.Co</h1>
<nav id="myNavbar" class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
        
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="omap.php">Maps</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="homeAdm.php">Home</a></li>
                    <li><a href="profil.php">Grave Land Profile</a></li>
                    <li class="dropdown">
                        <a href="Gravelist.php" data-toggle="dropdown" class="dropdown-toggle">Grave <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="Gravelist.php">Grave List</a></li>
                            <li><a href="order.php">Order List</a></li>
                            <li><a href="omap.php">Map-Placement</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Admin <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="fam.php">Family Request</a></li>
                            <li><a href="admP.php">Admin Profile</a></li><li><a href="controller/clogout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>
  <div class="form-group">
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Grave Yard Profil</div>
  <div class="panel-body">
    <p>Grave Yard.Co adalah perusahaan jasa pelayanan makam yang membantu masyarakat untuk menyelenggarakan dan memilih lokasi pemakaman. </p>
  </div>

  <form class="form-horizontal" role="form"> 
  <div class="form-group"> <label for="firstname" class="col-sm-2 control-label">Nama Perusahaan</label> 
  <div class="col-sm-10"><p> Grave Yard.co</p>
  </div>
   </div>
   <div class="form-group"> <label for="lastname" class="col-sm-2 control-label">Tanggal Berdiri </label> 
   <div class="col-sm-10"><p> 18 April 2015</p> </div> </div>
	
	<div class="form-group"> <label for="firstname" class="col-sm-2 control-label">Luas Lahan</label> 
  <div class="col-sm-10"> <p> 5230 hektare</p>
  </div>
   </div>
	<div class="form-group"> <label for="firstname" class="col-sm-2 control-label">Pemilik</label> 
  <div class="col-sm-10"><p> Wollbern Nest</p> 
  </div>
   </div>
  <div class="form-group">
   <label for="firstname" class="col-sm-2 control-label">Ijin Usaha</label>  <div class="col-sm-10"><p> ISP/320151418/DGO/SC</p> 
  </div> </div>
 <?php 
//membuka koneksi
include "model/koneksi.php";
//mengambil data dari atbel siswa
//SELECT * FROM tb_matakuliah tbmk 
  //    join tb_pengajuanmatakuliahreguler tbpmkr on tbmk.id_matkul=tbpmkr.id_matkul where id_tahunakademik ='.$id
$data=mysql_query("select count (*) from tb_makam as jumlah");
//menampilkan data hasil query menjadi data array


$data2=mysql_query("select count (*) from tb_lokasi  as jumlah");
//menampilkan data hasil query menjadi data array
?>
  <div class="form-group">
   <label for="firstname" class="col-sm-2 control-label">Jumlah makam Terisi</label>  <div class="col-sm-10"> <p> 3   </p> 
  </div> </div>  <div class="form-group">
   <label for="firstname" class="col-sm-2 control-label">Jumlah Kompleks</label>  <div class="col-sm-10"> <p> 5 </p> 
  </div> </div> 
   <div class="form-group">

   <label for="firstname" class="col-sm-2 control-label">Jumlah Makam Kosong</label>  <div class="col-sm-10"> <p> 5 </p> 
  </div> </div> </form>
</div>
</div>
 <div class="panel-footer">
 <h5> @Universitas Jember 2015</h5></div>
</div>
</body>
</html>