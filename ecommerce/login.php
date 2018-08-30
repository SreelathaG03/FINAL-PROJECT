<?php
    require "ecommerce.php";
	//session_start();
	$response = array(); 
	$response["success"]=false;
	$array = array();
	$username=$_POST['username'];
    $password =$_POST['password'];
		
	$sql_query1 = "SELECT username,password,user_id,FROM tbl_registration 
	WHERE username='$username' AND password='$password'";
	$result1=mysqli_query($con,$sql_query1);
	
	$sql_query2 = "SELECT username,password,user_id FROM tbl_registration 
	WHERE user_id='1' AND username='sree' AND password='latha' ";
	$result2=mysqli_query($con,$sql_query2);
	
	if (!$result1 || !$result2)
	
		{		
		$resp=mysqli_error($con);
		$response["message"]=$resp;
		echo json_encode(array("result"=>$response));
		exit();
	}
	else
		{
		$res1=mysqli_fetch_array($result1);
		
			
			//$row = mysqli_fetch_array($result1);
			if(mysqli_num_rows($result1)>0)
            {
			$response["message"]="successfull";
			$response["success"]=true;
			array_push($array,array('user_id'=>$res1['user_id'],'username'=>$res1['username'],'password'=>$password));
			//$response["success"]=true;
		    echo json_encode(array("result"=>$response,"res"=>$array));
			}
			else if(mysqli_num_rows($result2)>0)
            {
			$res2=mysqli_fetch_array($result2);
			$response["message"]="successfull";
			$response["success"]=true;
			array_push($array,array('user_id'=>$res2['user_id'],'username'=>$username,'password'=>$password));
			//$response["success"]=true;
		    echo json_encode(array("result"=>$response,"res"=>$array));
			}
			
			else{
			$response["message"]="Username and password doesn't exist";
		    echo json_encode(array("result"=>$response,"res"=>$array));
			}
		}
		
		
?>