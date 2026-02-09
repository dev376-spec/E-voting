<?php
// connection details
$link = mysql_connect('localhost', 'root', 'mysql') or die(mysql_error());
mysql_select_db('election') or die(mysql_error());

session_start();
//If your session isn't valid, it returns you to the login screen for protection

//retrive positions from the positios table
$result=mysql_query("SELECT * FROM positions")
or die("There are no records to display ... \n" . mysql_error()); 
if (mysql_num_rows($result)<1){
    $result = null;
}
?>
<?php
// inserting sql query
if (isset($_POST['Submit']))
{

//$newCandidateid = addslashes( $_POST['id'] ); //prevents types of SQL injection
$newCandidatePosition = addslashes( $_POST['position'] ); //prevents types of SQL injection

$sql = mysql_query( "INSERT INTO positions(position) VALUES ('$newCandidatePosition')" )
        or die("Could not insert candidate at the moment". mysql_error() );

// redirect back to candidates
 header("Location: position.php");
}
?>
<?php
// deleting sql query
// check if the 'id' variable is set in URL
 if (isset($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];
 
 // delete the entry
 $result = mysql_query("DELETE FROM positions WHERE stud_id='$id'")
 or die("The position does not exist ... \n"); 
 
 // redirect back to positions
 header("Location: position.php");
 }
 else
 // do nothing
    
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
<table width="380" align="center">
<CAPTION><h3>ADD NEW POSITION</h3></CAPTION>
<form name="fmPositions" id="fmPositions" action="position.php" method="post" onsubmit="return positionValidate(this)">
<tr>
    <td>Position Name</td>
    <td><input type="text" name="position" /></td>
    <td><input type="submit" name="Submit" value="Add" /></td>
</tr>
</table>
<hr>
<table border="0" width="420" align="center">
<CAPTION><h3>AVAILABLE POSITIONS</h3></CAPTION>
<tr>
<th>Position ID</th>
<th>Position Name</th>
</tr>

<?php
//loop through all table rows
while ($row=mysql_fetch_array($result)){
echo "<tr>";
echo "<td>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp" . $row['stud_id']."</td>";
echo "<td>" ."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".$row['position']."</td>";
echo '<td><a href="position.php?id=' . $row['stud_id'] . '">Delete Position</a></td>';
echo "</tr>";
}
mysql_free_result($result);
mysql_close($link);
?>

</table>
<hr>
<div align="right">
<a href="index.php">Back</a></div>

</div><br /><br /><br /><br /><br /><br /><br /><br /><br />
<div id="FO__OTer" align="center">   
<p>&copy; All rights reserved, e-voting Bharat sarkar</p>
        <p>Designed by<a href="http://www.facebook.com/mrbharti34" target="_blank"> <b>Shubham & Group</b></a>.</p>
	  </div>
</div>
</body>
</html>