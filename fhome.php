<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="bootstrap-3.3.5/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-3.3.5/dist/css/bootstrap-theme.min.css"><link rel="stylesheet" href="style2.css">
	
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

                <a class="navbar-brand" href="order.php">New Order</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Family <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                       <li><a href="controller/clogout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>
<div class="page-header">

  <div class="form-group">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Member Family Profil</div>
      <div class="panel-body">
        <p>&nbsp;</p>
      </div>

   <?php 
//membuka koneksi
include "model/koneksi.php";
session_start();
$id=$_SESSION["username"];
//mengambil data dari atbel siswa
//SELECT * FROM tb_matakuliah tbmk 
  //    join tb_pengajuanmatakuliahreguler tbpmkr on tbmk.id_matkul=tbpmkr.id_matkul where id_tahunakademik ='.$id
$data=mysql_query("select * from tb_keluarga where id_keluarga='$id'");
//menampilkan data hasil query menjadi data array
while($rdata=mysql_fetch_array($data)){
?>

      <form class="form-horizontal" role="form" action="controller/cupdate.php">
      

        <div class="form-group">
          <label for="firstname" class="col-sm-2 control-label">ID_Keluarga</label>
          <div class="col-sm-10">
            <p><?php echo $rdata["id_keluarga"];?></p>
          </div>
        </div>
        <div class="form-group">
          <label for="firstname" class="col-sm-2 control-label">Nama Keluarga </label>
          <div class="col-sm-10">
            <p> <?php echo $rdata["nama_keluarga"];?> </p>
          </div>
        </div>
        <div class="form-group">
          <label for="lastname" class="col-sm-2 control-label">Alamat Email </label>
          <div class="col-sm-10">
            <p> <?php echo $rdata["email_keluarga"];?> </p>
          </div>
        </div>
        <div class="form-group">
          <label for="firstname" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <p> <?php echo $rdata["password"];?></p>
          </div>
        </div>
  <?php } ?>    
      </form>
    </div>
  </div>
  
<div id="page-wrap">
<h2> Daftar Makam Keluarga</h2>
    <table width="681" border="1">
      <tr>
        <td width="19">No.</td>
        <td width="140">Email</td>
        <td width="98">Order Date</td>
        <td width="109">RIP on</td>
        <td width="144">Stones Name</td>
        <td width="43">Type</td>
        <td width="82">Location</td>
      </tr>
     
   <?php 
//membuka koneksi
include "model/koneksi.php";

//mengambil data dari atbel siswa
//SELECT * FROM tb_matakuliah tbmk 
  //    join tb_pengajuanmatakuliahreguler tbpmkr on tbmk.id_matkul=tbpmkr.id_matkul where id_tahunakademik ='.$id
$data=mysql_query("select * from tb_makam mkm join tb_lokasi ss on ss.id_lokasi=mkm.id_lokasi join tb_pemakaman pk
  on pk.id_makam=mkm.id_makam where pk.id_keluarga= $id ");
//menampilkan data hasil query menjadi data array

if($data!=null){
while($rdata=mysql_fetch_array($data)){
?>

      <tr>
        <td><?php echo $rdata["id_makam"];?></td>
        <td><?php echo $rdata["nama_almarhum"];?></td>
        <td><?php echo $rdata["tanggal_kelahiran"];?></td>
        <td><?php echo $rdata["tanggal_wafat"];?></td>
        <td><?php echo $rdata["nama_kompleks"];?></td>
       
      </tr>
      <?php } 
      }
      else {?> <h3>Maaf Daftar Makam Anda masih kosong</h3> <?php  }?>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">View</button>
      <button type="submit" class="btn btn-default">Print</button>
    </div>
  </div>
  <div id="page-wrap"></div>
<div class="media-body">
<img src="images/team-member1.jpg" />
</div>
</div>
 <div class="panel-footer">
 <h5> @Universitas Jember 2015</h5></div>
</div>
</body>
</html>