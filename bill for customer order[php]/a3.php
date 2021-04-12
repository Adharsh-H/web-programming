<?php
$cc = new mysqli("localhost","root","","qwerty");
if($cc->connect_error)
{
	die("connection failed".$cc->connect_error);

}
$c="INSERT INTO food VALUES(1,'tea',10),(5,'coffe',15),(11,'ice',25)";
if($cc->query($c))
{
	echo "values inserted";
}
$cc->close();
?>