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
	</ul></li>
</ul>
</div>
  
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
	$con = mysql_connect("localhost","root","mysql");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("election", $con);
	$searchword=$_POST['searchtext'];
	
	if($searchword=="searchtext"){
		$result=mysql_query("SELECT studnum,fname,lname,course,yearlevel,username from vbussc WHERE studnum LIKE '%".$searchword."%' or lname LIKE '%".$searchword."%' ") or die(mysql_error());
echo "<p align = 'center'><font size = '20'>Search Results</font></p>";
		echo "<table align='center' border='0'>
		<tr>
<th>Student Number</th>
<th>Lastname</th>
<th>Firstname</th>
<th>Course</th>
<th>Year</th>
<th>Username</th>

</tr>";
		
		if(mysql_num_rows($result) == 0) {
			echo "<script> alert('No Student Record Found');</script>";
		}
		
		else {
			while($row = mysql_fetch_array($result)){
			echo "<tr>";
				echo "<td>".$row['studnum']."<br />"."</td>";
				echo "<td>".$row['lname']."<br />"."</td>";
				echo "<td>".$row['fname']."<br />"."</td>";
				echo "<td>".$row['course']."<br /><br />"."</td>";
				echo "<td>".$row['yearlevel']."<br /><br />"."</td>";
				echo "<td>".$row['username']."<br /><br />"."</td>";
				
				
				
			echo "</tr>";
			}
			
		}
		
	}
	else {
		echo "<script> alert('Please input VoterName in search field.');
		window.location = 'TSDlimited.php';</script>";
	}
?>

	 </div>
  </div>
  <div id="FO__OTer" align="center"> 
  <p>&copy; All rights reserved, e-voting Bharat sarkar</p>
        <p>Designed by<a href="http://www.facebook.com/mrbharti34" target="_blank"> <b>Nirmala & Group</b></a>.</p> </div>

  </div>
 </div>

</body>
</html>
