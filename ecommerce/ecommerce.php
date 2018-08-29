<?php

$host="localhost";
$user="root";
$pass="";
$db="e-commerce";
$con=mysqli_connect($host,$user,$pass,$db);
// Check connection
if (mysqli_connect_errno($con))
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_REQUEST))
{
	foreach ($_REQUEST as $key => $value) 
	{
        if(is_string($_REQUEST[$key]))
        {
	       $_REQUEST[$key] = mysqli_real_escape_string($con,$_REQUEST[$key]);
        }
	}
}


?>
