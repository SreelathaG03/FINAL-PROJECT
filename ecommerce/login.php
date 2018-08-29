<?php
    require "e-commerce.php";
	//session_start();
	$response = array(); 
	$response["success"]=false;
	$array = array();
	$username=$_POST['username'];
    	$password =$_POST['password'];
		
	$sql_query1 = "SELECT username,password,user_id,privilage_id FROM tbl_user 
	WHERE privilage_id='1' AND username='$username' AND password='$password'";
	$result1=mysqli_query($con,$sql_query1);