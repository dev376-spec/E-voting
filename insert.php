<?php
$IDNumber=$_POST['IDcard'];	
$firstName=$_POST['fname'];
$lastName=$_POST['lname'];
$sex=$_POST['sex'];
$DOB=$_POST['age'];
$votercardnumber=$_POST['votercardnumber'];
$District=$_POST['address'];
$sector=$_POST['fathername'];
$cell=$_POST['mathername'];
$pintovote=$_POST['password'];
$con=mysql_connect("localhost","root","mysql");
if(!$con)
{
die('Could not connect to the database:'.mysql_error());
}
 if($con && $age>=18)
{
$select=mysql_select_db('election',$con);
}

$insert=mysql_query("INSERT INTO voter VALUES('$IDcard','$fname','$lname','$sex','$age','$votercardnumber','$address','$fathername','$mathername','$password')");
 
if($insert)
{
$insert=mysql_query("INSERT INTO yuovote VALUES('$username','$password')");
echo"<center><img src='succ.gif' width='600'></center><br>";
echo"<a href='display.php'><font size=10><center><img src='dis2.gif'></center></font></a>";
}
else
{
echo"<center><img src='allow.gif'></center>".mysql_error();
}
mysql_close($con);
?>
