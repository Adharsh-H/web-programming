<?php
$cc=mysqli_connect("localhost","root","");
if($cc->connect_error)
{
	echo "connection failed".$cc->connect_error;
}
else
{
	echo"connection successfull";
}
$q="create database students";
if($cc->query($q)==true)
{
	echo"<br>database created ";
}
else
{
	echo"error in creating database".$cc->connect_error;
	$cc->close();}
?>

