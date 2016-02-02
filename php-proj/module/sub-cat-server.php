<?php
session_start();
include 'sub-cat.php';
$sub_cat = new SubCategory ; 
if (isset($_GET['method']))
{
	$method = $_GET['method'];
	echo "method = $method";
	$id = $_GET['id'];
}
else
{
	$method = $_POST['method'];
	echo "method = $method";
}
if (isset($_GET['id']))
	{$id = $_GET['id'];}
switch ($method) {
	case 'insert':
		if (isset($_POST['add_sub_cat']) && !empty($_POST['add_sub_cat']))
		{
			$sub_cat->name = $_POST['add_sub_cat'];
			$sub_cat->cat_id=$_POST['cat_id'];
			$sub_cat_id=$sub_cat->insert();
			echo "cat_id = ".$_POST['category'];
			echo "sub_cat = ".$_POST['add_sub_cat'];
			echo "<br/>inserted id = ".$sub_cat_id;
			header("location:../controle.php");
		}
		else
		{
			$_SESSTION['error'] = "please enter a valid name";
			echo "error";
			header("location:../controle.php");
		}
		break;
	case 'editname':
		if (isset($_POST['edit_sub_cat']) && !empty($_POST['edit_sub_cat']))
		{
			$sub_cat->name = $_POST['edit_sub_cat'];
			$sub_cat->updateSubName($id);
			echo "id=". $id." , name = ".$_POST['edit_sub_cat'];
			header("location:../controle.php");
		}
		else
		{
			$_SESSTION['error'] = "please enter a valid name";
			echo "error";
			header("location:../controle.php");
		}
		break;
	case 'editcatid':
		if (isset($_POST['sub_cat_id']) && !empty($_POST['sub_cat_id']))
		{
			$sub_cat->cat_id = $_POST['sub_cat_id'];
			$sub_cat->updateCatId($id);
			echo "id=". $id." , updated with id = ".$_POST['sub_cat_id'];
			header("location:../controle.php");
		}
		else
		{
			$_SESSTION['error'] = "please enter a valid name";
			echo "error";
			header("location:../controle.php");
		}
		break;
	case 'delete':
		$sub_cat_id=$sub_cat->delete($id);
		echo "<br/>deleted id = ".$sub_cat_id;
		header("location:../controle.php");
		break;
	default:
		# code...
		break;
}


?>
