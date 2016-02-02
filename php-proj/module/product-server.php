<?php 

	include 'sub-cat.php';
	$sub= new SubCategory;

	include 'product.php';
	$pro= new Product;
	switch($_GET['action'])
	{
		case 'selectsub' :
			{
				$id=$_GET['id'];
				$subs=$sub->sub_by_category($id);
				echo json_encode($subs);
				//var_dump($subs);
			}
			break;
		case 'selectProduct' :
			{
				$name = $_GET['name'];
				$id=$_GET['id'];
				$proObj=$pro->product($name,$id);
				if($proObj){
					$result = array("result"=>"false");
					
				}else{
					$result = array("result"=>"true");
				}
				echo json_encode($result);
				//var_dump($proObj);
			}
			break;
		case 'editstatus' :
			{
				$id=$_GET['id'];
				$status = $_GET['status'];
				//echo "id = ".$id."status = ".$status;
				$pro->status = $status;
				$product_id = $pro->updateStatus($id);
				echo $product_id;
				$_SESSION['Psuccess'] = "Product add has updated  success";
				header('location:../controle.php#tabs-5');
				//echo " error on update";
				
			}
			break;
		case 'delete' :
		{
			$id=$_GET['id'];
			echo $pro->delete($id);
			header('location:../controle.php#tabs-5');
		}
		break;
	}
 ?>