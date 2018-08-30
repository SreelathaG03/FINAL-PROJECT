<?php
require_once 'ecommerce.php';
$resp=array();
$response["success"]=false;
$fname=$_POST['firstname'];
$sname=$_POST['secondname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobile_no=$_POST['mobile'];
$username=$_POST['username'];
$password=$_POST['password'];
	
$sql3="INSERT INTO tbl_registration(user_id,firstname,secondname,dob,gender,email,mobile,username,password)
VALUES('','$fname','$sname','$dob','$gender','email','$mobile_no','$username','$password')";
				

				if(!mysqli_query($con,$sql3))
				{
					$resp= mysqli_error($con);
					$response["message"]=$resp;	
				
					echo json_encode(array("result"=>$response));
					exit();
				}
				
				else
				{
								
					$response["message"]="user details registered  successfully";
					$response["success"]=true;
					echo json_encode(array("result"=>$response));
				}
				

?>
