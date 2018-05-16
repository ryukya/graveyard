<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="bootstrap-3.3.5/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-3.3.5/dist/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="style2.css">
	
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
                           <li><a href="admP.php">Admin Profile</a></li><li><a href="controller/clogout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>
<div class="page-header"><br />
<div id="page-wrap">

   <?php 
//membuka koneksi
include "model/koneksi.php";
session_start();
$id=$_SESSION["username"];
//mengambil data dari atbel siswa
//SELECT * FROM tb_matakuliah tbmk 
  //    join tb_pengajuanmatakuliahreguler tbpmkr on tbmk.id_matkul=tbpmkr.id_matkul where id_tahunakademik ='.$id
$data=mysql_query("select * from tb_admin where id_admin='$id'");
//menampilkan data hasil query menjadi data array
while($rdata=mysql_fetch_array($data)){
?>


  <div class="form-group">
      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Grave Yard- Admin Profil</div>
       
        
        <form class="form-horizontal" role="form" method="post" action="controller/cpadmin.php">
          <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">ID_Admin = <?php echo $rdata["id_admin"];?> </label>
            
          </div>
          <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">Nama Admin</label>
            <div class="col-sm-10">
              <input  type="text" class="form-control" name="nm" value="<?php echo $rdata["nama_admin"];?>" />
            </div>
          </div>
          <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input  type="text" class="form-control" name="pass" value="<?php echo $rdata["password"];?>" />
            </div>
          </div>
          <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">No HP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nohp" value="<?php echo $rdata["no_hp"];?>" />
            </div>
          </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="alamat" value="<?php echo $rdata["alamat"];?>" />
            </div>
          </div>
           <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input  type="email" class="form-control" name="email" value="<?php echo $rdata["kontak"];?>" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default" id="edit" name="edit">Save</button>
            </div>
          </div>

 <?php } ?> 
        </form>
      </div>
      </div>
    </div> 

</div>

</div>
 <div class="panel-footer">
 <h5> @Universitas Jember 2015</h5></div>
</div>
</body>
</html>