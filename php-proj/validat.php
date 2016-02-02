<?php
	include 'user.php';
	$user=new User();
	$result=$user->if_exist($_GET['email']);
	if ($result=='true') {
		echo"match";
	}else{
		echo "notmatch";
	}

  ?>