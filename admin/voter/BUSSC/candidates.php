<?php
$con=mysqli_connect('localhost', 'root', '') or die(mysqli_error());
mysqli_select_db($con,'election') or die(mysqli_error());

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
  <marquee>New polls are up and running. But they will not be up forever! Just Login and then go to Current Polls to vote for your favourate candidates. </marquee>
  <div id="me__nu">
  <div id="menu">
<ul id="css3menu1" class="topmenu">
	<li class="topfirst"><a href="../../../index.php" style="width:135px;height:21px;line-height:21px;"  id="active"><img src="__styles/menu/house.png" alt=""/>Home</a></li>
	<li class="topmenu"><a href="../../../voting.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/tick.png" alt=""/>Voting</a></li>
	<li class="topmenu"><a href="../../../register.php"register.php" style="width:135px;height:21px;line-height:21px;"><img src="__styles/menu/disk.png" alt=""/>Register</a></li>
	<li class="topmenu"><a href="../../../login.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt=""/>Admin Login</a></li>
	<li class="toplast"><a href="#" style="width:135px;height:21px;line-height:21px;"><span><img src="__styles/menu/help.png" alt=""/>Electoral council</span></a>
	<ul>
		<li class="subfirst"><a href="../../../electHelp.php">Help</a></li>
		<li><a href="../../../electGalery.php">Gallery</a></li>
		<li><a href="../../../electContact.php">Contact</a></li>
		<li><a href="../../../faq.php">FAQs</a></li>
	</ul></li>
</ul>
</div>
  
  </div>
  <div id="page">
<div id="header">
<h2 align="center">USER HOME </h2>
  <div align="center">
  <a href="manage-profile.php">Manage My Profile</a> |<a href="vote.php">Current Polls</a> | <a href="logout.php">Logout</a>
  </div>
  <div id="container">
<p align="center"> Click a link above to do some stuff.</p>
<p align="center"><img src="../../../files/new5.jpg" width="741" height="229" /></p>
</div>  
<br /><div id="FO__OTer" align="center">   
<p>&copy; All rights reserved, e-voting Bharat sarkar</p>
        <p>Designed by<a href="http://www.facebook.com/mrbharti34" target="_blank"> <b>Shubham & Group</b></a>.</p>
	  
</body>
</html>
