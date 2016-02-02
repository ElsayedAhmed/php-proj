<?php
	session_start();
	unset($_SESSION['user_id']);
	unset($_SESSION['admin']);
//	echo "<meta http-equiv='Refresh' content='0;url=login.php' />"; 
	header('location:login.php')
?>
<a href="login.php">login</a>