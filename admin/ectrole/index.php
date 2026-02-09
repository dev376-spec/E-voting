<?php
$con=mysqli_connect("localhost","root","","election") or die("error");
mysqli_select_db($con,"election") or die("error in selecting database");

session_start();
//If your session isn't valid, it returns you to the login screen for protection

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::e-voting::</title>
<link rel="stylesheet" type="text/css" href="__styles/main__$tyle.css" />
<link rel="stylesheet" href="__styles/menu/style.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="__styles/functions.js"></script>
</head>
<body>
 <div id="whole">
  <div id="hEa__d">
     <div id="lo__go">
	    <img src="__styles/logo.png" style="position: relative; top:-20px; left:-30px;" />
	 </div>
	 <div id="ba__nner">
	    <img style=" position:relative; top:20px; left:20px;" src="__styles/banner.png"/>
		
	 </div>

  </div>
 
  <div id="me__nu">
  <div id="menu">
<ul id="css3menu1" class="topmenu">
	<li class="topfirst"><a href="../../index.php" style="width:135px;height:21px;line-height:21px;"  id="active"><img src="__styles/menu/house.png" alt=""/>Home</a></li>
	<li class="topmenu"><a href="../../voting.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/tick.png" alt=""/>Voting</a></li>
	<li class="topmenu"><a href="../../register.php" style="width:135px;height:21px;line-height:21px;"><img src="__styles/menu/disk.png" alt=""/>Register</a></li>
	<li class="topmenu"><a href="../../login.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt=""/>Admin Login</a></li>
	<li class="toplast"><a href="#" style="width:135px;height:21px;line-height:21px;"><span><img src="__styles/menu/help.png" alt=""/>Electoral council</span></a>
	<ul>
		<li class="subfirst"><a href="../../electHelp.php">Help</a></li>
		<li><a href="../../electGalery.php">Gallery</a></li>
		<li><a href="../../electContact.php"\>Contact</a></li>
		<li><a href="../../faq.php">FAQs</a></li>
	</ul></li>
</ul>
</div>
  
  </div>
  <div id="page">
<div id="header">
<h2 align="center">Admin Control Panel</h2>
  <div align="center">
  <a href="manage-admins.php">Manage Administrator</a> |<a href="position.php">Manage Positions</a> | <a href="candidates.php">Manage Candidates</a> | <a href="logout.php">Logout</a>
  </div>
  <br />
  <div id="container">
    <p align="center"> Click a link above to do some stuff.</p>
    <p align="center"><img src="3.jpg" height="217" /></p>
  </div>
  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><div id="FO__OTer" align="center">   
<p>&copy; All rights reserved, e-voting Bharat sarkar</p>
        <p>Designed by<a href="http://www.facebook.com/mrbharti34" target="_blank"> <b>Shubham & Group</b></a>.</p>
	  
</body>
</html>
