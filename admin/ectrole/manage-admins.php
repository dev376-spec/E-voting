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
	<li class="topmenu"><a href="../../register.php"register.php" style="width:135px;height:21px;line-height:21px;"><img src="__styles/menu/disk.png" alt=""/>Register</a></li>
	<li class="topmenu"><a href="../../login.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt=""/>Admin Login</a></li>
	<li class="toplast"><a href="#" style="width:135px;height:21px;line-height:21px;"><span><img src="__styles/menu/help.png" alt=""/>Electoral council</span></a>
	<ul>
		<li class="subfirst"><a href="../../electHelp.php">Help</a></li>
		<li><a href="../../electGalery.php">Gallery</a></li>
		<li><a href="../../electContact.php">Contact</a></li>
		<li><a href="../../faq.php">FAQs</a></li>
	</ul></li>
</ul>
</div>

<body>
<div id="container">
<table>
<tr>
<td>
<table width="380" align="center">

<?php
mysql_connect('localhost', 'root', 'mysql') or die(mysql_error());
mysql_select_db('election') or die(mysql_error());

session_start();


//Process
if (isset($_POST['submit']))
{

$myFirstName = addslashes( $_POST['username'] ); //prevents types of SQL injection

$myPassword = $_POST['password'];
$myorg = $_POST['org'];

//$newpass = md5($myPassword); //This will make your password encrypted into md5, a high security hash

$sql = mysql_query( "INSERT INTO admin(username, password, org) VALUES ('$myFirstName','$myPassword','$myorg')" )
        or die( mysql_error() );

die( "A new administrator account has been created." );
}
//Process
if (isset($_GET['id']) && isset($_POST['update']))
{
$myId = addslashes( $_GET['id']);

$myPassword = $_POST['password'];

//$newpass = md5($myPassword); //This will make your password encrypted into md5, a high security hash

$sql = mysql_query( "UPDATE admin SET password='$myPassword' WHERE id = '$myId'" )
        or die( mysql_error() );

die( "An administrator account has been updated." );
}
?>
<table align="center">
<tr>
<td>
<form action="manage-admins.php?id=<?php echo $_SESSION['admin_id']; ?>" method="post" onSubmit="return updateProfile(this)">
<table align="center">
<CAPTION><h4>UPDATE ACCOUNT</h4></CAPTION>
<tr><td>New Password:</td><td><input type="password" style="background-color:#999999; font-weight:bold;" name="password" maxlength="15" value=""></td></tr>
<tr><td>Confirm New Password:</td><td><input type="password" style="background-color:#999999; font-weight:bold;" name="ConfirmPassword" maxlength="15" value=""></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="update" value="Update Account"></td></tr>
</table>
</form>
</td>
<td>
<form action="manage-admins.php" method="post" onSubmit="return registerValidate(this)">
<table align="center">
<CAPTION><h4>CREATE ACCOUNT</h4></CAPTION>
<tr><td>UserName:</td><td><input type="text" style="background-color:#999999; font-weight:bold;" name="username" maxlength="15" value=""></td></tr>
<tr><td>Org:</td><td><input type="text" style="background-color:#999999; font-weight:bold;" name="org" maxlength="15" value=""></td></tr>

<tr><td>Password:</td><td><input type="text" style="background-color:#999999; font-weight:bold;" name="password" maxlength="15" value=""></td></tr>
<tr><td>Confirm Password:</td><td><input type="password" style="background-color:#999999; font-weight:bold;" name="ConfirmPassword" maxlength="15" value=""></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Create Account"></td></tr>
</table>
</form>
</td>
</tr>
</table>
</div><div align="right"><a href="index.php">Back</a></div> <br /><br /><br /><br /><br /><br /><br /><br /><br /> 

<div id="FO__OTer" align="center"> 
<p>&copy; All rights reserved, e-voting Bharat sarkar</p>
        <p>Designed by<a href="http://www.facebook.com/mrbharti34" target="_blank"> <b>Shubham & Group</b></a>.</p>
	  </div>
</div>
</body></html>