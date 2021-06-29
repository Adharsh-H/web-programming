<?php
$cc = new mysqli("localhost","root","","purchase1");
if($cc->connect_error)
{
    die("connection failed".$cc->connect_error);

}
$c="INSERT INTO bill1 VALUES(1,'apple','fruit',25,5,125),(2,'tea','food',10,1,10)";
if($cc->query($c))
{
    echo "VALUES INSERTED";
}
$cc->close();
?>