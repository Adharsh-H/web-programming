<?php
$cc = new mysqli("localhost","root","","purchase1");
if($cc->connect_error)
{
	die("connection failed".$cc->connect_error);

}
$b="CREATE TABLE bill1(itemcode int(2) primary key,itemname varchar(20), type varchar(20),price decimal(10,2),quantity int,total decimal(10,2))";
if($cc->query($b))
{
	echo "TABLE CREATED SUCCESSFULLY";
}
else
{
	echo "ERROR FOUND".$cc->error;
}
$cc->close();
?>