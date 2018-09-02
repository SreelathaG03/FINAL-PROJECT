<?php
require_once 'ecommerce.php';
$resp=array();
$response["success"]=false;
$pname=$_POST['productname'];
$image=$_POST['image'];
$price=$_POST['price'];
$dim=$_POST['dimension'];
$desc=$_POST['description'];

$sql2="INSERT INTO tbl_product(product_id,productname,category_id,image,price,dimension,description)
VALUES('','$pname',last_insert_id(),'$image','$price','dim','$desc')";

if(!mysqli_query($con,$sql2))
				{
					$resp= mysqli_error($con);
					$response["message"]=$resp;	
				
					echo json_encode(array("result"=>$response));
					exit();
				}
				
				else
				{
								
					$response["message"]="product uploaded successfully";
					$response["success"]=true;
					echo json_encode(array("result"=>$response));
				}
				

?>


