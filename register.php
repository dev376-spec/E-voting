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
	<li class="topmenu"><a href="voting.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/tick.png" alt=""/>Voting</a></li>
	<li class="topmenu"><a href="register.php" style="width:135px;height:21px;line-height:21px;" id="active"><img src="__styles/menu/disk.png" alt=""/>Register</a></li>
	<li class="topmenu"><a href="login.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt=""/>Admin Login</a></li>
	<li class="toplast"><a href="#" style="width:135px;height:21px;line-height:21px;"><span><img src="__styles/menu/help.png" alt=""/>Electrol council</span></a>
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
	  
	      <img src="files/NEC.jpg" />
		  <p>Now Register yourself for any conference/meeting in your city<A href="http://www.bookmyshow.com"> Book events</A> <br />Adv.(eVoting.com will not be responsible for any Inliabilities</p>
	   </div>
	   <div id="recents">
	      <img src="files/os.ico" />
		  <p>Indian Government is going to launch his own operating system Bharat Operating System<A href="http://www.pmo.gov.in"> BOS</A> via India News </p>
	   </div>
	  <div id="sliding__imgs">
	     <a href="voting.php?tsd=voting2"><img  id="slider1" style="position:relative;" src="__styles/vote1.jpg" /></a>
	   </div>
	 </div>
      
      
      
 <div id="bo__dy_conts">
	  <?php 
if(isset($_POST['Register']))
{
include"connection.php";
$one=mysqli_query( $con,"
INSERT INTO `election`.`voter` (`ID`, `VoterCard`, `Number_of_ID`, `Names`, `FatherNames`, `MotherNames`, `DoB`, `District`, `sec_name`, `cell_name`, `VotingCenter`, `pob`, `password`) VALUES (NULL, '$_REQUEST[VoterCard]', '$_REQUEST[Number_of_ID]', '$_REQUEST[Names]', '$_REQUEST[FatherNames]', '$_REQUEST[MotherNames]', '$_REQUEST[DoB]', '$_REQUEST[District]', '$_REQUEST[sec_name]', '$_REQUEST[cell_name]', '$_REQUEST[VotingCenter]', '$_REQUEST[pob]', '$_REQUEST[password]');")or die(mysqli_error());
if($one)
{
echo"<center><u><h4><font color='#003300'><H3>Congratulation,</h3></font></h4></u></center>";
echo"<center><u><h4><font color='#003300'><H3>Your Account Has Been Successfully Created to Vote!,</h3></font></h4></u></center>";
echo"<p><font color='#003300'><p>Now you are an Active Member Of E-VOTING SYSTEM; which give you a power to Vote online and view
your Candidate Status on this website.</p></font></p>";

}
mysqli_close($con);
}
?>
      <fieldset><legend><h3 style="font-size:18px; border:double;  background-color:#FFA62F; height:30px;">Register here</h3></legend>
<form method="post" enctype="multipart/form-data">
<table width="500" height="100" background bgcolor="#C0C0C0"align="center">
<tr style="background-color:#ADD8E6;">
    <td><span class="legend">VoterCard <span style="color:#FF0000;">*</span></span></td>
    <td><input type="text" name="VoterCard" class="desing" required /></td>
</tr>
<tr>
    <td><span class="legend">IDNumber <span style="color:#FF0000;">*</span></span></td>
    <td><input type="text" name="Number_of_ID" class="desing" required/></td>
</tr>
<tr style="background-color:#ADD8E6;">
    <td><span class="legend">Name <span style="color:#FF0000;">*</span></span></td>
    <td><input type="text" name="Names" class="desing" required/></td>
</tr>
<tr>
    <td><span class="legend">Father's Name<span style="color:#FF0000;">*</span></span></td>
    <td><input type="text" name="FatherNames"  class="desing" required /></td>
</tr>
<tr style="background-color:#ADD8E6;">
    <td><span class="legend">Mother's Names<span style="color:#FF0000;">*</span></span></td>
    <td><input type="text" name="MotherNames" class="desing" irequired/></td>
</tr>
<tr>
    <td><span class="legend">DoB<span style="color:#FF0000;">*</span></span></td>
    <td><input type="text" name="DoB" class="desing" required/></td>
</tr>
<tr style="background-color:#ADD8E6;">
    <td><span class="legend">State<span style="color:#FF0000;">*</span></span></td>
    <td><select name="District" class="desing" required>
                    <option value="0101">Andhra Pradesh</option>
					<option value="0102">Assam</option>
					<option value="0103">Bihar</option>
					<option value="0201">Jharkhand</option>
					<option value="0202">Delhi</option>
					<option value="0203">Maharashtra</option>
					<option value="0204">Odisha</option>
					<option value="0205">Tamil Nadu</option>
					<option value="0206">Telangana</option>

    <option value="0207">J & K</option>
					<option value="0208">West Bengal</option>
					<option value="0301">Gujarat</option>
					<option value="0302">Rajasthan</option>
					<option value="0303">Haryana</option>
					<option value="0304">Himachal Pradesh</option>
					<option value="0305">Goa</option>
					<option value="0306">Chattisgarh</option>
					<option value="0307">Kerala</option>
					<option value="0401">Karnataka</option>
					<option value="0402">Sikkim</option>
					<option value="0403">Mizoram</option>
					<option value="0404">Manipal</option>
					<option value="0405">Uttaranchal</option>
					<option value="0501">Uttar Pradesh</option>
					<option value="0502">Nagaland</option>
					<option value="0503">Madhya Pradesh</option>
					<option value="0504">Uttarakhand</option>
					<option value="0505">Punjab</option>
					<option selected="selected" value=""></option></select></td>
</tr>
<tr>
    <td><span class="legend">Sector
        <span style="color:#FF0000;">
        </span>
        </span>
    <td> <select name="sec_name" required>
    <option>Select your sector here</option>

        
<?php 
$con=mysqli_connect("localhost","root","");
if(!$con)
{
die('Could not connect to the database:'.mysqli_error());
}
 if($con)
{
$select=mysqli_select_db($con,'election');
}
			$q=mysqli_query($con,"SELECT sec_name FROM sector ORDER BY sec_id DESC");
			while($row=mysqli_fetch_array($q))
			{
				echo"<option value=".$row['sec_name'].">".$row['sec_name']."</option>";
			}
			mysqli_close($con);
		?></select>
     </td>
    </tr>
    
    
 <tr style="background-color:#ADD8E6;">     
<td><span class="legend">Cell<span style="color:#FF0000;">*</span></span></td>
<td> <select name="cell_name" required>
				<option>Select your area here</option>
		<?php 
$con=mysqli_connect("localhost","root","");
if(!$con)
{
die('Could not connect to the database:'.mysqli_error());
}
 if($con)
{
$select=mysqli_select_db($con,'election');
}
			$q=mysqli_query($con,"SELECT cell_name FROM cell ORDER BY cell_id DESC");
			while($row=mysqli_fetch_array($q))
			{
				echo"<option value=".$row['cell_name'].">".$row['cell_name']."</option>";
			}
			mysqli_close($con);
		?></select>
</td>
</tr>
         
         
<td><span class="legend">VotingCenter <span style="color:#FF0000;">*</span></span></td>
<td><input type="text" name="VotingCenter"  class="desing" required /></td>
<tr style="background-color:#ADD8E6;">
    <td><span class="legend">PoB<span style="color:#FF0000;"></span></span></td>
    <td><input type="text" name="pob"  class="desing" required /></td>
</tr>
<tr>
    <td><span class="legend">Voting Pin<span style="color:#FF0000;">*</span></span></td>
    <td><input type="password" name="password"  class="desing" required /></td>
</tr>
<tr>
    <td height="26"><input type="submit" value="" name="Register" id="SaveBTN"/></td>
    <td><input type="reset" value="" name="" id="canselBTN"/></td>
</tr>

    </table>
    </form>
         </fieldset>
     
         </div>
      </div>
	
  
  <div id="FO__OTer" align="center"> 
      <p>&copy; All rights reserved, e-voting Bharat sarkar</p>
      <p>Designed by<a href="http://www.facebook.com/mrbharti34" target="_blank">
      <b>Nirmala & Group</b></a>.</p>
  </div>
</div>
</body>
</html>