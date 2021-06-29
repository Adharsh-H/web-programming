
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="pink"><CENTER>
	<h1><u>LIST OF ITEMS</h1></u></CENTER>

</body>
</html>

<?php
$cc = new mysqli("localhost","root","","purchase1");
if($cc->connect_error)
{
	die("connection failed".$cc->connect_error);

}
$sum=0;
$d="SELECT * FROM bill1";
$res=$cc->query($d);
if($res->num_rows>0)
{
	echo"<center>";
	echo "<table border=5 bordercolor='black'  height='50%' width='50%'><tr><th>itemcode</th><th>itemname</th><th>type</th><th>price</th><th>quantity</th><th>total</th></tr>";
	
	while($row=$res->fetch_assoc())
	{
		echo "<tr><td>".$row['itemcode']."</td><td>".$row['itemname']."</td><td>".$row['type']."</td><td>".$row['price']."</td><td>".$row['quantity']."</td><td>".$row['total']."</td></tr>";
		$sum+=$row['total'];
	}
echo "<tr><th colspan=5>GRAND TOTAL</th><th>".$sum."</th></tr>";
	echo "</table>";
	echo"</center>";
}

else
{
	echo " no result";

}
$cc->close();
?>
