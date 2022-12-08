<?php
$serverName="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="finalprojectpweb";

$conn=mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

?>
