<?php
// connection details
$link = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
mysqli_select_db($link,'election') or die(mysqli_error());

session_start();
//If your session isn't valid, it returns you to the login screen for protection

$result=mysqli_query($link,"SELECT * FROM voter")
or die("There are no records to display ... \n" . mysqli_error()); 

$row = mysqli_fetch_array($result);
if($row)
 {
 // get data from db
 $stdId = $row['ID'];
 $Name = $row['Names'];
 $DoB = $row['DoB'];
 $Dist=$row['District'];
 $votercard = $row['VoterCard'];
 }
?>
<?php
// updating sql query
if (isset($_POST['update'])){
$myId = addslashes( $_GET[ID]);
$myFirstName = addslashes( $_POST['Names'] ); //prevents types of SQL injection
$Dist = addslashes( $_POST['District'] ); //prevents types of SQL injection
$votercard = $_POST['VotingCenter'];
$myPassword = $_POST['password'];

//$newpass = md5($myPassword); //This will make your password encrypted into md5, a high security hash

$sql = mysql_query( "UPDATE voter SET Names='$myFirstName', District='$Dist', VotingCenter='$votercard', password='$myPassword' WHERE ID = '$stdId'" )
        or die( mysql_error() );

// redirect back to profile
 header("Location: manage-profile.php");
}
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

<body>
<div id="container">
<table>
<tr>
<td>
<table width="380" align="center">
<CAPTION><h3>MY PROFILE</h3></CAPTION>
<tr>
    <td>Voter Id:</td>
    <td><?php echo $stdId; ?></td>
</tr>
<tr>
    <td> Name:</td>
    <td><?php echo $Name; ?></td>
</tr>
<tr>
    <td>DoB:</td>
    <td><?php echo $DoB; ?></td>
</tr>
<tr>
    <td>Dist.:</td>
    <td><?php echo $Dist; ?></td>
</tr>
<tr>
    <td>Voter Reg.No.:</td>
    <td><?php echo $votercard; ?></td>
</tr>
<tr>
    <td>Password:</td>
    <td>Encrypted</td>
</tr>
</table>
</td>
<td>
<table border="0" width="620" align="center">
<CAPTION><h3>UPDATE PROFILE</h3></CAPTION>
<form action="manage-profile.php?id=<?php echo $_SESSION['member_id']; ?>" method="post" onsubmit="return updateProfile(this)">
<table align="center">
<tr><td> Name:</td><td><input type="text" style="background-color:#999999; font-weight:bold;" name="Names" maxlength="15" value=""></td></tr>
<tr><td>Dist:</td><td><input type="text" style="background-color:#999999; font-weight:bold;" name="District" maxlength="15" value=""></td></tr>
<tr><td>VotingCenter:</td><td><input type="text" style="background-color:#999999; font-weight:bold;" name="VotingCenter" maxlength="100" value=""></td></tr>
<tr><td>New Password:</td><td><input type="password" style="background-color:#999999; font-weight:bold;" name="password" maxlength="5" value=""></td></tr>
<tr><td>Confirm New Password:</td><td><input type="password" style="background-color:#999999; font-weight:bold;" name="ConfirmPassword" maxlength="15" value=""></td></tr>
<tr><td>&nbsp;</td></td><td><input type="submit" name="update" value="Update Profile"></td></tr>
</table>
</form>
</td>
</tr>
</table>
<br><br><br>
<a href="candidates.php">Back</a>
<div align="right">
<a href="logout.php">Logout</a> </div><br /><br /><br /><br /><br /><br /><br /><br />
<div id="FO__OTer" align="center">   
<p>&copy; All rights reserved, e-voting Bharat sarkar</p>
        <p>Designed by<a href="http://www.facebook.com/mrbharti34" target="_blank"> <b>Shubham & Group</b></a>.</p>
	  </div>
</body>
</html>
