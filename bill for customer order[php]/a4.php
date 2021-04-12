<?php
$cc = new mysqli("localhost","root","","qwerty");
if($cc->connect_error)
{
	die("connection failed".$cc->connect_error);

}
$sum=0;
$d="SELECT * FROM food";
$res=$cc->query($d);
if($res->num_rows>0)
{
	echo "<table border=2  ><tr><th>code</th><th>name</th><th>cost</th></tr>";
	
	while($row=$res->fetch_assoc())
	{
		echo "<tr><td>".$row['code']."</td><td>".$row['name']."</td><td>".$row['cost']."</td></tr>";
		$sum+=$row['cost'];
	}
echo "<tr><th colspan=2>TOTAl</th><th>".$sum."</th></tr>";
	echo "</table>";
}

else
{
	echo " no res";

}
$cc->close();
?>
