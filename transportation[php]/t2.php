<?php
$cc=mysqli_connect("localhost","root","","students");
if($cc->connect_error)
{
	echo "connection error".$cc->connect_error;

}
else
{
	$t="CREATE table transport(rollno int primary key,name varchar(20),mode varchar(20))";
	if($cc->query($t)==true)
	{
		echo "table creation successfull";
	}
	else
	{
		echo"error in creating table".$cc->connect_error;

	}
	$cc->close();
}
?>