<?php
$cc = new mysqli("localhost","root","");
if($cc->connect_error)
{
	die("connection failed".$cc->connect_error);

}
$a="CREATE DATABASE qwerty";
if($cc->query($a))
{
	echo "database created ";

}
$cc->close();
?>