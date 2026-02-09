
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::e-voting::</title>
<link rel="stylesheet" type="text/css" href="__styles/main__$tyle.css" />
<link rel="stylesheet" href="__styles/menu/style.css" type="text/css" />
<style type="text/css">
</style>
</head>

<body>
 <div id="whole"> 
  <div id="hEa__d">
     <div id="lo__go">
	    <img src="__styles/logo.png" style="position: relative; top:-20px; left:-30px;" />
	 </div>
	 <div id="ba__nner">
	    <img style=" position:relative; top:20px; left:20px;" src="__styles/banner.png" />
	 </div>
  </div>
   
     
     
  <div id="me__nu">
  <div id="menu">
<ul id="css3menu1" class="topmenu">
	<li class="topfirst"><a href="index.php" style="width:135px;height:21px;line-height:21px;"><img src="__styles/menu/house.png" alt=""/>Home</a></li>
	<li class="topmenu"><a href="voting.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/tick.png" alt=""/>Voting</a></li>
	<li class="topmenu"><a href="register.php" style="width:135px;height:21px;line-height:21px;"><img src="__styles/menu/disk.png" alt=""/>Register</a></li>
	<li class="topmenu"><a href="login.php" style="width:136px;height:21px;line-height:21px;" id="active"><img src="__styles/menu/door_in.png" alt=""/>Admin Login</a></li>
	<li class="toplast"><a href="#" style="width:135px;height:21px;line-height:21px;"><span><img src="__styles/menu/help.png" alt=""/>Electoral council</span></a>
	<ul>
		<li class="subfirst"><a href="electHelp.php">Help</a></li>
		<li><a href="electGalery.php">Gallery</a></li>
		<li><a href="electContact.php">Contact</a></li>
		<li><a href="faq.php">FAQs</a></li>
	</ul></li>
</ul>
</div>
  
  </div>
     
     
     <center>
         <marquee  style="border:double; background-color:#ADD8E6; width:830px; color:#000080;"><b><i>New polls are up and running. But they will not be up forever! Just Login and then go to Current Polls to vote for your favourate candidates.</i></b> </marquee></center>
     
     
     
  <div id="bo__dy">
     <div id="bo__dy_pub">
	 
	  <div id="recents">
	      <img src="files/2.jpg" />
		  <p>Get latest news on Bihar Election 2015<A href="http://www.prabhatkhabar.com/bihar"> Election2015</A> <br />Sponsored By: Prabhat khabar</p>
	   </div>
	   <div id="recents">
	      <img src="files/micro.ico" />
		  <p>Give your suggestions on Bihar election or candidates<A href="www.pmo.gov.in"> Suggestions </A>on bihar election</p>
	   </div>
	   <div id="sliding__imgs">
	     <a href="voting.php?tsd=voting2"><img  id="slider1" style="position:relative;" src="__styles/vote1.jpg" /></a>
	   </div>
	 </div>
	 <div id="bo__dy_conts">
	 	  <?php 
include"connection.php";
if (isset($_REQUEST['GOBtn']))
{
$tsd=mysqli_query($con,"SELECT * FROM admin WHERE username='$_REQUEST[username]' AND password='$_REQUEST[password]'",)or die("Problem with the query :".mysqli_error());
$of=mysqli_num_rows($tsd);
		if($of>0)
		{
		echo"<meta HTTP-EQUIV='Refresh' CONTENT='0; URL=http:admin/ectrole/index.php'>";
		}
		else
		{
		echo"<font color='red'>Incorrect username or password!</font>";
		}
		mysqli_close($con);
		}
?>
         
         <div>
	 <fieldset  style="width:400px; margin:auto; background-color:#ADD8E6; color:#151B54;">
         <legend> <h3 style="font-size:15px; border:double;  background-color:#FFA62F; height:22px;"><b>Fill out this form to Login:</b></h3></legend>
	   <form id="vote" method="post" enctype="multipart/form-data">
		  <span class="legend">Enter Username   :<span style="color:#FF0000;">*</span></span><input type="text" name="username" id="votercard" class="desing"  required placeholder="enter card number"><br /><br />
		  <span class="legend">Password:<span style="color:#FF0000;">*</span></span><input type="password" name="password" id="password" class="desing"  required placeholder="enter password"><br /><br />
		  <input type="submit" name="GOBtn" id="GOBtn" value="">
	   </form>
	 </fieldset>
	  </div>
	
  </div>
      
  <div id="FO__OTer" align="center"> 
 <p>&copy; All rights reserved, e-voting Bharat sarkar</p>
        <p>Designed by<a href="http://www.facebook.com/mrbharti34" target="_blank"> <b>Nirmala & Group</b></a>.</p>
      </div>
      
     </div>
    </div>
</body>
</html>
