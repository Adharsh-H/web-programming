<?php
$cc=mysqli_connect("localhost","root","","students");
if($cc->connect_error)
	echo "connection error";
else
	$d="select * from transport";
	$result=$cc->query($d);
	while($row=$result->fetch_assoc())
	{
		echo "roll_no: ".$row['rollno']."<br>name: ".$row['name']."<br>mode: ".$row['mode']."<br><br>";
	}
	$cc->close();
?>