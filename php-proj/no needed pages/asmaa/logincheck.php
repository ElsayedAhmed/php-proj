<?php
	session_start();
	include 'user.php';
	
	if(isset($_POST['ok'])) {

		if(!isset($_POST['mail']) || empty(trim($_POST['mail']))){

			$_SESSION['mail']="plz,enter your email";
			header('location:login.php');
		}
		else
		{	

			if(!isset($_POST['pass']) || empty(trim($_POST['pass'])))
			{
				$_SESSION['pass'] = "Please, Enter a valid password";
				header('location:login.php');
			}
			else
			{
				$user = new User;
				$is_exist = $user->checkBeforeLogin($_POST['mail'],$_POST['pass']);
				if(!$is_exist)
				{
					$_SESSION['mail']="email or password is invalid";
					
					header('location:login.php');
				}
				else
				{
					$user = new User();
					$user->getUser($_POST['mail']);
					
					$_SESSION['user_id'] = $user->id;
					
					
					//echo "<meta http-equiv='Refresh' content='0;url=index.php' />"; 
					//die();
				}
			
			}
		}

	} 
	else 
	{
		header("location:register.php");
	}
?>