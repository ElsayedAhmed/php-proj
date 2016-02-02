<?php 
	session_start();
	include 'product.php';
	$product = new Product;
	var_dump($_POST);
	if (isset($_POST['ok']))
	 {

		if ($_POST['ok']=='Update Product')
		 {
		 	
			echo "data = ";
			var_dump($_POST);
			$product->id = $_SESSION['product']['id'];
			$id= $_SESSION['product']['id'];
			if (!isset($_POST['cat_id']) || empty(trim($_POST['cat_id']))) 
			{	
				$product->sub_cat_id=$_SESSION['product']["sub_cat_id"];
				echo " cat default,";
			}
			else
			{

				if (!isset($_POST['sub_id']) || empty(trim($_POST['sub_id']))) 
				{
					$product->sub_cat_id=$_SESSION['product']["sub_cat_id"]; 
					echo " sub default,";
				}
				else
				{
					$product->sub_cat_id = $_POST['sub_id'];
				}
			}
			if (!isset($_POST['name']) || empty(trim($_POST['name']))) 
			{
								
				$product->sub_cat_id = $_POST['sub_id'];
				$name = $_POST['name'];
				if($product->product($_POST['name'],$_POST['sub_id']))
				{
					$errors[]="unavailable name";
					$_SESSION['Pname']= "this name isnot available , aleady exsist";
					header('location:../controle-edit.php?action=edit&id='.$id.'#tabs-5');
				}
				elseif (preg_match("/[a-zA-Z]{2,18}$/", $name))
				{
				    //$product = new product;
					$product->name = $_POST['name'];
					echo $product->name ;
				}
				else
				{
					$_SESSION['Pname'] = "Please enter valid name ";
					header('location:../controle-edit.php?action=edit&id='.$id.'#tabs-5');
				}	
			}
			else
			{
				$product->name = $_SESSION['product']["name"];
				echo " name default,";
			}
		    if (isset($_FILES["image"])) 
			{
				echo "here in image";
				
	 			#$name,$size,$type ,$tmp_name
		 		$name=$_FILES["image"]['name'];
		 		$size=$_FILES["image"]['size'];
		 		$type=$_FILES["image"]['type'];
		 		$tmp_name=$_FILES["image"]['tmp_name'];
		 		$allow_imag = array('image/jpg','image/png','image/gif','image/jpeg');
		 		move_uploaded_file($tmp_name, "../productimages/".$name);
		 		$product->image = "productimages/".$name;//.$_FILES["image"]['name'];
		 	}
		 	else
		 	{
		 		$product->image = $_SESSION['product']["image"];
		 		echo " imh default,";
		 	}
		 	if(isset($_POST['price']))
		 	{
		 		$product->price = $_POST['price'];
		 	}
		 	else
		 	{
		 		$product->price = $_SESSION['product']["price"];
		 		echo " price default,";
		 	}
			if(isset($_POST['size']))
		 	{
		 		$size_arr=$_POST['size'];
					$product->size = implode(",", $size_arr);
					/*$arr = preg_split("/[,]+/", size);*/
		 	}
		 	else
		 	{
		 		$product->size = $_SESSION['product']["size"];
		 		echo " size default,";
		 	}
		 	if(isset($_POST['color']))
		 	{
		 		$color_arr=$_POST['color'];
					$product->color = implode(",", $color_arr);
					/*$arr = preg_split("/[,]+/", color);*/
		 	}
		 	else
		 	{
		 		$product->color = $_SESSION['product']['color'];
		 		echo " color default,";
		 	}
		 	if(isset($_POST['quantity']))
		 	{
		 		$product->quantity = $_POST['quantity'];
		 	}
		 	else
		 	{
		 		$product->quantity = $_SESSION['product']['quantity'];
		 		echo " quantity default,";
		 	}
		 	$d=mktime(11, 14, 54, 8, 12, 2014);
		 	$product->add_date=date("Y-m-d h:i:sa", $d);
		 	if(isset($_POST['status']))
		 	{
		 		$product->status = $_POST['status'];
		 	}
		 	else
		 	{
		 		$product->status = $_SESSION['product']['status'];
		 		echo " status default,";
		 	}
			//echo $product->insert();
			$product_id = $product->update($id);
			echo $product_id;
			if($product_id)
			{
				$_SESSION['Psuccess'] = "Product add has updated  success";
				header('location:../controle.php#tabs-5');
			}
			else
			{
				echo " error on update";
			}

		echo "error3,";
		}
		
	echo "error4";
	}

 ?>