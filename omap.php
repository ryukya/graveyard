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
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Grave <b class="caret"></b></a>
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
<div class="page-header">
<div id="page-wrap">
<table width="980" border="1" cellpadding="10">
  <tr>
    <td width="124">Grave ID </td>
    <td width="804"><form id="form1" name="form1" method="post" action="">
      <label>
        <select name="select">
          <option>01</option>
          <option>02</option>
          <option>03</option>
        </select>
        </label>
    </form>
    </td>
  </tr>
  <tr>
    <td>Name</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>RIP Date </td>
    <td>October 14, 2015</td>
  </tr>
  <tr>
    <td>Location</td>
    <td><form id="form2" name="form2" method="post" action="">
      <label>
        <select name="select2">
          <option>A1</option>
          <option>A2</option>
          <option>B1</option>
        </select>
        </label>
    </form>
    </td>
  </tr>
</table>
<div class="btn-group">
<button>Search</button>
<button>Update</button>
<button>Delete</button>

</div>
</div>
<div class="media-body">
<img src="images/team-member1.jpg" />
</div>
</div>
 <div class="panel-footer">
 <h5> @Universitas Jember 2015</h5></div>
</div>
</body>
</html>