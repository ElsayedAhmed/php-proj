<?php
session_start();
include 'cat.php';
$cat = new Category ; 
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
		if (isset($_POST['add_cat']) && !empty($_POST['add_cat']))
		{
			$cat->name = $_POST['add_cat'];
			$cat->insert();
			header("location:../controle.php");
		}
		else
		{
			$_SESSTION['error'] = "please enter a valid name";
			header("location:../controle.php");
		}

		# code...
		break;
	case 'edit':
		if (isset($_POST['edit_cat']) && !empty($_POST['edit_cat']))
		{
			$cat->name = $_POST['edit_cat'];
			$cat->update($id);
			echo "id=". $id." , name = ".$_POST['edit_cat'];
			header("location:../controle.php");
		}
		else
		{
			$_SESSTION['error'] = "please enter a valid name";
			echo "error";
			header("location:../controle.php");
		}

		# code...
		break;
	case 'delete':
		$cat->delete($id);
			header("location:../controle.php");
		# code...
		break;
	default:
		# code...
		break;
}


?>
