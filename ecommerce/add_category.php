<?php
require_once 'ecommerce.php';
$resp=array();
$response["success"]=false;
$category=$_POST['category'];

$sql1="INSERT INTO tbl_category(category_id,category)
VALUES('','$category')";


if(!mysqli_query($con,$sql1))
				{
					$resp= mysqli_error($con);
					$response["message"]=$resp;	
				
					echo json_encode(array("result"=>$response));
					exit();
				}
				
				else
				{
								
					$response["message"]="category added successfully";
					$response["success"]=true;
					echo json_encode(array("result"=>$response));
				}
				

?>