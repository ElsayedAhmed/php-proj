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
				$is_blocked = $user->if_blocked($_POST['mail']);
				if(!$is_exist)
				{
					$_SESSION['mail']="email or password is invalid";
					
					header('location:login.php');
				}
				elseif(!$is_blocked)
				{
					$_SESSION['mail']="we are very sorry , this acount is blocked by admin";
					
					header('location:login.php');
				}
				else
				{
					$user = new User();
					$user->getUser($_POST['mail']);
					$_SESSION['user_id'] = $user->id;
					$id=$user->id;
					$is_admin = $user->is_admin($id);
					if(!$is_admin)
					{
						echo "Welcome user id = ".$_SESSION['user_id'];
						echo "<meta http-equiv='Refresh' content='0;url=index.php' />"; 
					}
					else
					{
						echo "Welcome ADMIN id = ".$_SESSION['user_id'];
						$_SESSION['admin']=$id;
						echo "<meta http-equiv='Refresh' content='0;url=controle.php' />"; 
					}
					
					
					
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