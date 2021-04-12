<?php
$cc = new mysqli("localhost","root","","qwerty");
if($cc->connect_error)
{
	die("connection failed".$cc->connect_error);

}
$b="CREATE TABLE food(code int(2) primary key,name varchar(20),cost decimal(10,2))";
if($cc->query($b))
{
	echo "table created";
}
else
{
	echo "error found".$cc->error;
}
$cc->close();
?>