<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="bootstrap-3.3.5/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-3.3.5/dist/css/bootstrap-theme.min.css"><link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="css/datepicker.css">

      <script src="js/bootstrap-datepicker.js"></script>
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
                    <li><a href="Iindex.php">Home</a></li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>
  <div id="page-wrap">
    <h1>Register Form</h1>
  <div class="form-group"> 
  <div class="col-sm-offset-2 col-sm-10">
  <div class="form-group">
      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Grave Yard Profil</div>
        <div class="panel-body">
          <p>Grave Yard.Co adalah perusahaan jasa pelayanan makam yang membantu masyarakat untuk menyelenggarakan dan memilih lokasi pemakaman. </p>
        </div>
    
        <form class="form-horizontal" role="form" method="post" action="controller/corder.php">
      <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">Alamat Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="email" placeholder="Enter " >
            </div>
          </div> <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">Nama </label>
            <div class="col-sm-10">
              <input  type="text" class="form-control" name="nama" placeholder="Enter " >
            </div>
          </div>
          <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">RIP date</label>
            <div class="col-sm-10">
       <input type="date"  class="form-control" name="tanggal"  >
       </div>
          </div>
        
          <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">Stone Name</label>
            <div class="col-sm-10">
               <input  type="text" class="form-control" name="nmbatu" placeholder="Enter " >
             </div>
          </div>
          <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">Tipe</label>
            <div class="col-sm-10">
               <select name="tipe" class="form-control">
             <option value="L">Large</option>
             <option value="M">Medium</option>
             <option value="S">Small</option>
             </select></div>
          </div>
          <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">Lokasi</label>
              <div class="col-sm-10">
                      <select name="lokasi" class="form-control">
                        <?php 
//membuka koneksi
include "model/koneksi.php";
//mengambil data dari atbel siswa
//SELECT * FROM tb_matakuliah tbmk 
  //    join tb_pengajuanmatakuliahreguler tbpmkr on tbmk.id_matkul=tbpmkr.id_matkul where id_tahunakademik ='.$id
$data=mysql_query("select * from tb_lokasi");
//menampilkan data hasil query menjadi data array
while($rdata=mysql_fetch_array($data)){
?>
    <option value="<?php echo $rdata["id_lokasi"];?>"><?php echo $rdata["nama_kompleks"];?>&nbsp;</option>
                        
 <?php } ?> 
                      </select>
                    </div></div>
              <button type="submit" class="btn btn-default" name="order">Send</button>
            
                    </form></div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div> </div>
  </div>
  
  <div class="panel-footer">
 <h5> @Universitas Jember 2015</h5></div>
</div>
<script type="text/javascript">$('.datepicker').datepicker()</script>
</body>
</html>
