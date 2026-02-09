<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::e-voting::</title>
<link rel="stylesheet" type="text/css" href="__styles/main__$tyle.css" />
<link rel="stylesheet" href="__styles/menu/style.css" type="text/css" />
<style type="text/css">
div#bo__dy div#bo__dy_conts {overflow: scroll;}
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
	<li class="topmenu"><a href="voting.php" style="width:136px;height:21px;line-height:21px;" id="active"><img src="__styles/menu/tick.png" alt=""/>Voting</a></li>
	<li class="topmenu"><a href="register.php" style="width:135px;height:21px;line-height:21px;"><img src="__styles/menu/disk.png" alt=""/>Register</a></li>
	<li class="topmenu"><a href="login.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt=""/>Admin Login</a></li>
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
	      <img src="files/makka.jpg" />
		  <p>Around 800 people died in Makka huj<A href="http://www.google.com/news"><br /> Read full story</A> <br/>News by Source</p>
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
$tsd=mysqli_query($con,"SELECT * FROM voter WHERE VoterCard='$_REQUEST[VoterCard]' AND password ='$_REQUEST[password]'")or die("Problem with the query :".mysqli_error());
$of=mysqli_num_rows($tsd);
		if($of>0)
		{
		echo"<meta HTTP-EQUIV='Refresh' CONTENT='0; URL=http:admin/voter/BUSSC/candidates.php'>";
		}
		else
		{
		echo"Incorrect username or password!";
		}
		mysqli_close($con);
		}
?>
	 <fieldset style="width:400px; margin:auto; background-color:#ADD8E6; color:#151B54;">
         <legend> <h3 style="font-size:15px; border:double;  background-color:#FFA62F; height:22px;">
             <center><strong>Fill out this form to vote:</strong></center></h3></legend>
	   <form id="vote">
		  <span class="legend">Voter card Number:
          <span style="color:#FF0000;">*</span>
          </span>
          <input type="text" name="VoterCard" id="votercard" class="desing"  required placeholder="enter card number">
          <br />
          <br />
           
		  <span class="legend">Password:
          <span style="color:#FF0000;">*</span>
          </span>
          <input type="password" name="password" id="password" class="desing"  required placeholder="enter password">
          <br />
          <br />
		  <input type="submit" name="GOBtn" id="GOBtn" value="">
	   </form>
	 </fieldset>
         <br>
         <center><marquee style="border:double; background-color:#000000; width:300px; color:#FFA500;">!!!!!!<B>E-voting</B> !!!!!!</marquee></center>
	 <p class="page2" style="font-size:7px;">
	 <center><b>
         Traditional voting systems have been developed to ensure<br> that the principles required for democratic elections and referendums are met,<br> namely the guarantee of the freedom to vote, the secrecy of the vote,<br> the non modification of the expressed intention of the vote and lack of <br>intimidation during the vote operation.<br> It is essential that these principles are not undermined by the introduction of<br> new voting methods and, accordingly, e-voting systems must be so designed<br> and operated as to ensure the reliability and security of the voting process.<br> In sum: E-voting has to be as free, secret, reliable and secure as voting systems that do not involve the use of electronic means.An e-voting system therefore should consider the following minimum requirements:</b></center>
<ol>
   <li>To ensure that only persons with the right to vote are able to cast a vote.</li>
   <li>To ensure that every vote cast is counted and that each vote is counted only once.</li>
   <li>To maintain the voter’s right to form and to express his or her opinion in a free manner, without any coercion or undue influence.</li>
   <li>To protect the secrecy of the vote at all stages of the voting process.</li>
   <li>To guarantee accessibility to as many voters as possible, especially with regard to persons with disabilities.</li>
   <li>To increase voter confidence by maximizing the transparency of information on the functioning of each system.</li>
</ol>  
	 </p>
	 </div>
	
  </div>
  <div id="FO__OTer" align="center"> 
 <p>&copy; All rights reserved, e-voting Bharat sarkar</p>
        <p>Designed by<a href="http://www.facebook.com/mrbharti34" target="_blank"> <b>Nirmala & Group</b></a>.</p>
  </div>
</div>
</body>
</html>
