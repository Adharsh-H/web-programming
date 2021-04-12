<?php
$cc=mysqli_connect("localhost","root","","students");
if($cc->connect_error)
 die("connection failed".$cc->connect_error);
else
{
	$d="insert into transport values(1,'Adharsh','walk'),(2,'joyson','car')";
	if($cc->query($d)==true){
		echo "values inserted";
	}
	else
	{
		echo "error in value insertion".$cc->error;
	}
	$cc->close();
}
?>