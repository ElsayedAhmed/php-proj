<?php
include 'function.php';
if(isset($_GET['method']))
	{
		$method=$_GET['method'];
		switch ($method) 
		{
		case 'addToCart':
			$product_id = $_POST['id'];
			$user_id =  $_POST['user_id'];
			$name = $_POST['name'];
			$order_date = $_POST['order_date'];
			$status = $_POST['status'];
			$price = $_POST['price'];
			$image = $_POST['image'];
			$replay = insertProd($user_id,$product_id,$name,$order_date,$status,$price,$image);
			echo $replay;
			break;
		
		default:
			# code...
			break;
		}
	}


?>