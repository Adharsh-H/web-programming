<?php
$cc = new mysqli("localhost","root","");
if($cc->connect_error)
{
	die("connection failed".$cc->connect_error);

}
$a="CREATE DATABASE purchase1";
if($cc->query($a))
{
	echo "DATABASE CREATED SUCCESSFULLY ";

}
$cc->close();
?>