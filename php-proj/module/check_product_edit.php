<?php 
	session_start();
	include 'product.php';
	$product = new Product;
	$product->id = $_SESSION['product']['id'];
	$id = $_SESSION['product']['id'];
	echo "old data = ";
	var_dump($_SESSION['product']);
	echo "<hr>New Data";
	var_dump($_POST);
	if (isset($_POST['ok']))
	{
		echo "request is done<br/>";
		if ($_POST['ok']=='Update Product')
		{
			echo "submite is done<br/>";
			if (!isset($_POST['cat_id']) || empty(trim($_POST['cat_id']))) 
			{	
				$product->sub_cat_id=$_SESSION['product']["sub_cat_id"];
				echo " cat default<br/>";
			}
			else
			{

				if (!isset($_POST['sub_id']) || empty(trim($_POST['sub_id']))) 
				{
					$product->sub_cat_id=$_SESSION['product']["sub_cat_id"]; 
					echo " sub default<br>";
				}
				else
				{
					$product->sub_cat_id = $_POST['sub_id'];
					$id=$_POST['sub_id'];
				}//end of check for sub -id
			}//end of check for cat - id
			if (!isset($_POST['name']) || empty(trim($_POST['name']))) 
			{
								
				$product->name=$_SESSION['product']["name"]; 
				echo " name default<br>";

			}
			else
			{
				if($product->product($_POST['name'],$id)) //check for duplicatedd name
				{
					$_SESSION['Pname']= "this name isnot available , aleady exsist";
					header('location:../controle-edit.php?action=edit&id='.$id.'#tabs-5');
				}
				else
				{
					if (preg_match("/[a-zA-Z]{2,18}$/", $_POST['name']))//check for REG-EXP
					{
						$product->name = $_POST['name'];
						echo $product->name ;
					}
					else //if the REG-EXP isn't correct
					{
						$_SESSION['Pname'] = "Please enter valid name ";
						header('location:../controle-edit.php?action=edit&id='.$id.'#tabs-5');
					}
				}	

			}//end of check for name
			if (file_get_contents($_FILES['image']['tmp_name'])!= '') 
			{
				echo "here in image<br>";
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
		 		echo "5 image is default<br>";
		 	}//end check for image
		 	
		 	if(isset($_POST['price']) && !empty($_POST['price']))
		 	{
		 		$product->price = $_POST['price'];
		 		echo "done price <br>";
		 	}
		 	else
		 	{
		 		$product->price = $_SESSION['product']["price"];
		 		echo "6 price default<br>";
		 	}//end check for price

			if(isset($_POST['size']))
		 	{
		 		$size_arr=$_POST['size'];
					$product->size = implode(",", $size_arr);
					/*$arr = preg_split("/[,]+/", size);*/
		 	}
		 	else
		 	{
		 		$product->size = $_SESSION['product']["size"];
		 		echo "7 size default<br>";
		 	}//end check for size

		 	if(isset($_POST['color']))
		 	{
		 		$color_arr=$_POST['color'];
					$product->color = implode(",", $color_arr);
					/*$arr = preg_split("/[,]+/", color);*/
		 	}
		 	else
		 	{
		 		$product->color = $_SESSION['product']['color'];
		 		echo "8 color default<br>";
		 	}//end check for color quantity

		 	if(isset($_POST['quantity']) && !empty($_POST['quantity']))
		 	{
		 		$product->quantity = $_POST['quantity'];
		 		echo "done quantity <br>";
		 	}
		 	else
		 	{
		 		$product->quantity = $_SESSION['product']["quantity"];
		 		echo "6 quantity default<br>";
		 	}//end check for quantity

		 	//date of my update
		 	$d=mktime(11, 14, 54, 8, 12, 2014);
		 	$product->add_date=date("Y-m-d h:i:sa", $d);
		 	
		 	if(isset($_POST['status']))
		 	{
		 		$product->status = $_POST['status'];
		 	}
		 	else
		 	{
		 		$product->status = $_SESSION['product']['status'];
		 		echo "10 status default<br>";
		 	}//end check for status
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
			}//end of check for update

		}//end of check for submit
		else
		{
			echo "error on submite , please use back and try again";
	 		echo "<meta http-equiv='Refresh' content='5;url=../controle.php#tabs-5.php' />";
		}
	}//end of check for request
	else
	{
	 	echo "error on request , please use back and try again";
	 	echo "<meta http-equiv='Refresh' content='5;url=../controle.php#tabs-5.php' />"; 

	}