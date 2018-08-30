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
//$sql3="INSERT INTO user(user_id,privilage_id,firstname,secondname,DoB,age,country,state,district,locality,pincode,mobile_no,username,password)
//VALUES('','$1','$sinona','jose','$01/05/1994','23','$india','keral','kannur','paisakkari','670633','9400838632','sinona','sinonajose')";
				

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
