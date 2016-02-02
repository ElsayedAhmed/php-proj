<?php 
	session_start();
	include 'product.php';
	//$errors = [];
	
	if (isset($_POST['ok']))
	 {

		if ($_POST['ok']=='Add Product')
		 {
		 	
			echo "data = ";
			var_dump($_POST);
			if (!isset($_POST['cat_id']) || empty(trim($_POST['cat_id']))) 
			{	
				$_SESSION['Pcat'] = "Please choose category ";
				header('location:../controle.php#tabs-4'); 

			}
			else
			{

				if (!isset($_POST['sub_id']) || empty(trim($_POST['sub_id']))) 
				{
					$_SESSION['Pcat'] = "Please choose sub-category ";
					header('location:../controle.php#tabs-4'); 
				}
				else
				{
					if (!isset($_POST['name']) || empty(trim($_POST['name']))) 
					{
						$_SESSION['Pname'] = "Name is required";
						header('location:../controle.php#tabs-4');
					}
					else
					{
						
						$product = new Product;
						$product->sub_cat_id = $_POST['sub_id'];
						$name = $_POST['name'];
						if($product->product($_POST['name'],$_POST['sub_id']))
						{
							$errors[]="unavailable name";
							$_SESSION['Pname']= "this name isnot available , aleady exsist";
							header('location:../controle.php#tabs-4'); 
						}
						elseif (preg_match("/[a-zA-Z]{2,18}$/", $name))
						{
						    //$product = new product;
							$product->name = $_POST['name'];
							echo $product->name ;
							echo "<br> image = ".var_dump($_FILES);
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
						 		$product->image = 'null';
						 	}
						 	if(isset($_POST['price']))
						 	{
						 		$product->price = $_POST['price'];
						 	}
						 	else
						 	{
						 		$product->price = '0';
						 	}
							if(isset($_POST['size']))
						 	{
						 		$size_arr=$_POST['size'];
	  							$product->size = implode(",", $size_arr);
	  							/*$arr = preg_split("/[,]+/", size);*/
						 	}
						 	else
						 	{
						 		$product->size = '0';
						 	}
						 	if(isset($_POST['color']))
						 	{
						 		$color_arr=$_POST['color'];
	  							$product->color = implode(",", $color_arr);
	  							/*$arr = preg_split("/[,]+/", color);*/
						 	}
						 	else
						 	{
						 		$product->color = 'not-avilable';
						 	}
						 	if(isset($_POST['quantity']))
						 	{
						 		$product->quantity = $_POST['quantity'];
						 	}
						 	else
						 	{
						 		$product->quantity = '0';
						 	}
						 	$d=mktime(11, 14, 54, 8, 12, 2014);
						 	$product->add_date=date("Y-m-d h:i:sa", $d);
						 	$product->status='1';
							echo $product->insert();
							$product_id = $product->insert();
							echo $product_id;
							if($product_id)
							{
								$_SESSION['Psuccess'] = "Product add has success";
								header('location:../controle.php#tabs-4');
							}
						}
						

						else
						{
							$_SESSION['Pname'] = "Please enter valid name ";
							header('location:../controle.php#tabs-4');
						}	


					 	
						

					}
					echo "error";
				}
				echo "error";	
			}
			echo "error 1";
		}
		echo "error 2";
		
	}

 ?>