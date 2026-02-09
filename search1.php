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
	<li class="topfirst"><a href="index.php" style="width:135px;height:21px;line-height:21px;"  id="active"><img src="__styles/menu/house.png" alt=""/>Home</a></li>
	<li class="topmenu"><a href="voting.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/tick.png" alt=""/>Voting</a></li>
	<li class="topmenu"><a href="register.php" style="width:135px;height:21px;line-height:21px;"><img src="__styles/menu/disk.png" alt=""/>Register</a></li>
	<li class="topmenu"><a href="login.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt=""/>Login</a></li>
	<li class="toplast"><a href="#" style="width:135px;height:21px;line-height:21px;"><span><img src="__styles/menu/help.png" alt=""/>Electoral council</span></a>
	<ul>
		<li class="subfirst"><a href="electHelp.php">Help</a></li>
		<li><a href="electGalery.php">Gallery</a></li>
		<li><a href="electContact.php">Contact</a></li>
		<li><a href="faq.php">FAQs</a></li>
	</ul></li>
</ul>
</div>
  <marquee>New polls are up and running. But they will not be up forever! Just Login and then go to Current Polls to vote for your favourate candidates. </marquee>
  </div>
  <div id="bo__dy">
     <div id="bo__dy_pub">
	 <form method="post" enctype="multipart/form-data">
				<input type="text" name="Number_of_ID" id="search" class="desing" value=""/>
				<input type="submit" name="searchBtn" id="searchBtn"  value=""/>
	 </form>
	   <div id="recents">
	      <img src="files/NEC.jpg" />
		  <p>Have you ever voted ? <A href="voting.php"> Vote Here </A> - ECI</p>
	   </div>
	   <div id="sliding__imgs">
	     <a href="voting.php?tsd=voting2"><img  id="slider1" style="position:relative;" src="__styles/vote1.jpg" /></a>
	   </div>
	 </div>
	<div id="bo__dy_conts">
	

<?php
$db_hostname ='localhost';
$db_username ='root';
$db_password ='mysql';
$db_database ='election';// Database Connection String
$con = mysql_connect($db_hostname,$db_username,$db_password);if(!$con){die('Could not connect: '. mysql_error());}

mysql_select_db($db_database, $con);?>

<?php 
$term = mysql_real_escape_string($_REQUEST['term']);    
$sql ="SELECT * FROM vbussc WHERE fname LIKE '%".$term."%'";

$r_query = mysql_query($sql);while($row = mysql_fetch_array($r_query)){ 


echo "<tr>";
echo "<table align='center' border='1' width='350px'>";
echo '<td>First Name: '.$row['fname']; 
echo '<br /><td> Last name: '.$row['lname']; 
echo '<br /><td> stud_id: '.$row['stud_id']; 
echo '<br /><td> Date '.$row['datee']; 
echo '<br /><td> Dept '.$row['dept'];
	echo "</tr>";
	echo "</table>";}
?>

<div id="FO__OTer" align="center"> 
  <p>&copy; All rights reserved, e-voting Bharat sarkar</p>
        <p>Designed by<a href="http://www.facebook.com/mrbharti34" target="_blank"> <b>Nirmala & Group</b></a>.</p> </div>
</body>
</html>

