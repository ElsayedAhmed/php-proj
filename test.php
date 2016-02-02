<?php 
	session_start();
	include 'user.php';
	//$errors = [];
	
	if (isset($_POST['ok']))
	 {

		if ($_POST['ok']=='Register')
		 {
		 	
			if (!isset($_POST['name']) || empty(trim($_POST['name']))) 
			{	echo "string";
				$_SESSION['name'] = "Name is required";
				header('location:register.php'); 

			}else
			{

				if (!isset($_POST['email'])||empty(trim($_POST['email']))) 
				{
					$_SESSION['email'] = "Email is required";
					header('location:register.php'); 
				}
				else
				{
					if (!isset($_POST['password'])||empty(trim($_POST['password']))) 
					{
						$_SESSION['password'] = "password is required";
						header('location:register.php'); 
					}
					else
					{
						if ($_POST['password']!=$_POST['passconfirm'])
						{	
							$_SESSION['repassword'] = "two password must be same";
							header('location:register.php'); 
						}
						else
						{
							if (isset($_FILES['image'])) 
							{

						 		#$name,$size,$type ,$tmp_name
							 		$name=$_FILES['image']['name'];
							 		$size=$_FILES['image']['size'];
							 		$type=$_FILES['image']['type'];
							 		$tmp_name=$_FILES['image']['tmp_name'];
							 		$allow_imag = array('image/jpg','image/png');
							 		// if (!in_array($type, $allow_imag)) {
							 		// 	echo "PLZ upload correct image ";
							 		// 	if ($size>123456) 
							 		// 	{
							 		// 		echo"PLZ upload another photo";
							 		// 	}
						 			// }
						 		
							 		// else
							 		// {
							 			move_uploaded_file($tmp_name, "profileimages/".$name);
							 			#echo "<img src='images/$name'/>";
							 		//}
					 	}
					 	
							$user = new User;
							if($user->if_exist($_POST['email']))
							{
								$errors[]="unavailable name";
								$_SESSION['email']= "this email isnot available";
								header('location:register.php'); 
							}
							else
							{
								$user = new User;
								$user->name = $_POST['name'];
								echo $user->name ;
								$user->password= $_POST['password'];
								$user->email = $_POST['email'];
								$user->credit = $_POST['credit'];
								$user->birthdate= $_POST['birthdate'];
								$user->tel = $_POST['tel'];
								$user->address = $_POST['address'];
								$user->job= $_POST['job'];
								$user->interests = $_POST['interests'];
								$user->image = "profileimages/".$name;
								echo $user->insert();
								$user_id = $user->insert();
								echo $user_id;
								if($user_id)
								{
									$_SESSION['user_id']=$user_id;
									//echo "Thanks, You r gonna be redirect  within 5 seconds to the loign page, or u can click here <a href='login.php'>Login</a>";
									//echo "<meta http-equiv='Refresh' content='5;url=login.php' />"; 
									header('location:login.php');
								}
							}	

						}
					}	
				}
			}
			
		}
	}	

 ?>