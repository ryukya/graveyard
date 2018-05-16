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
                            <li><a href="fam.php">Family Request</a></li>
                            <li><a href="admP.php">Admin Profile</a></li><li><a href="controller/clogout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>
<div id="page-wrap">
	<h1>Order List </h1>
  
	<p>&nbsp;</p>
    
	<table>
		<thead>
		<tr>
        <th width="19">No.</th>
        <th width="140">Email</th>
        <th width="98">Order Date</th>
        <th width="109">RIP on</th>
        <th width="144">Stones Name</th>
        <th width="43">Type</th>
        <th width="82">Maintenance</th>
        <th width="82">Location</th>
        <th width="82">Pembayaran</th>
        <th width="144">Option</th>
		</tr>
		</thead>
		<tbody>
		<?php 
//membuka koneksi
include "model/koneksi.php";

//mengambil data dari atbel siswa
//SELECT * FROM tb_matakuliah tbmk 
  //    join tb_pengajuanmatakuliahreguler tbpmkr on tbmk.id_matkul=tbpmkr.id_matkul where id_tahunakademik ='.$id
$data=mysql_query("select * from tb_order od join tb_lokasi ss on ss.id_lokasi=od.id_lokasi");
//menampilkan data hasil query menjadi data array
while($rdata=mysql_fetch_array($data)){
?>

  <tr>
        <td><?php echo $rdata["id_order"];?></td>
        <td><?php echo $rdata["email_pengorder"];?></td>
        <td><?php echo $rdata["order_date"];?></td>
        <td><?php echo $rdata["rip_date"];?></td>
        <td><?php echo $rdata["stone_name"];?></td>
        <td><?php echo $rdata["tipe"];?></td>
        <td><?php echo $rdata["status"];?></td>
        <td><?php echo $rdata["nama_kompleks"];?></td>
        <td><?php echo $rdata["pembayaran"];?></td>
        <td>[<a href="controller/cmakam.php?id=<?php echo $rdata["id_order"];?>">Done</a> ] - [ <a href="controller/chapusorder.php?id=<?php echo $rdata["id_order"];?>">Delete</a> ] </td>
  
      </tr>                 
 <?php } ?> 
		
		</tbody>
	</table>
	
	</div></div>



<div class="col-sm-offset-2 col-sm-10">
  <button type="submit" class="btn btn-default">Save</button>
  <button type="submit" class="btn btn-default">Print</button>
</div>
<div class="page-header">
<h2>"Every begining have its own end"</h2>
</div>
 <div class="panel-footer">
 <h5> @Universitas Jember 2015</h5></div>
</div>
</body>
</html>