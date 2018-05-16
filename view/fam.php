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
                            <li><a href="admP.php">Admin Profile</a></li><li><a href="index.html">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>
  <div id="page-wrap">
    <h1>Family Member List</h1>
	<div class="form-group"> 
	<div class="col-sm-offset-2 col-sm-10"> <button type="submit" class="btn btn-default">New</button> 
	<button type="submit" class="btn btn-default">Edit</button>
	<button type="submit" class="btn btn-default">Print</button> 
	<div class="form-group">
      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Grave Yard Profil</div>
        <div class="panel-body">
          <p>Grave Yard.Co adalah perusahaan jasa pelayanan makam yang membantu masyarakat untuk menyelenggarakan dan memilih lokasi pemakaman. </p>
        </div>
		
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">Nama Keluarga</label>
            <div class="col-sm-10">
              <input name="text" type="text" class="form-control" id="firstname" placeholder="Enter First Name" />
            </div>
          </div>
          <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">Alamat Email</label>
            <div class="col-sm-10">
              <input name="text2" type="text" class="form-control" id="lastname" placeholder="Enter Last Name" />
            </div>
          </div>
          <div class="form-group">
            <select name="select" class="form-control input-lg">
              <option value=""></option>
            </select>
          </div>
          <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input name="text2" type="text" class="form-control" id="firstname" placeholder="Enter First Name" />
            </div>
          </div>
          <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">Nama Keluarga</label>
            <div class="col-sm-10">
              <input name="text2" type="text" class="form-control" id="firstname" placeholder="Enter First Name" />
            </div>
          </div>
          <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">Grave Type</label>
            <select name="select" class="form-control input-lg">
              <option value="">Type Rose</option>
            </select>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Save</button>
              <button type="submit" class="btn btn-default">Print</button>
            </div>
          </div>
        </form>
      </div>
	  </div>
	</div> </div>
	<div id="page-wrap">
    <table>
      <thead>
        <tr>
          <th width="81">Family Name </th>
          <th width="199">Email</th>
          <th width="122">Password</th>
          <th width="232">Date</th>
          <th width="395">Type</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>James</td>
          <td>Matman</td>
          <td>Chief Sandwich Eater</td>
          <td>20-01-2010</td>
          <td>Trek</td>
        </tr>
        <tr>
          <td>The</td>
          <td>Tick</td>
          <td>Crimefighter Sorta</td>
          <td>20-01-2010</td>
          <td>Rose</td>
        </tr>
        <tr>
          <td>Jokey</td>
          <td>Smurf</td>
          <td>Giving Exploding Presents</td>
          <td>20-01-2010</td>
          <td>Smurf</td>
        </tr>
        <tr>
          <td>Cindy</td>
          <td>Beyler</td>
          <td>Sales Representative</td>
          <td>20-01-2010</td>
          <td>Rose</td>
        </tr>
        <tr>
          <td>Captain</td>
          <td>Cool</td>
          <td>Tree Crusher</td>
          <td>20-01-2010</td>
          <td>Rose</td>
        </tr>
      </tbody>
    </table>
  </div></div>
  <div class="panel-footer">
 <h5> @Universitas Jember 2015</h5></div>
</div>
</body>
</html>