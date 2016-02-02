<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	session_start();
	if (!isset($_SESSION['user_id']))
	{
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<!------------------------------------>
<?php include "head.php"; ?>	
<!------------------------------------>
 
  <style type="text/css" media="screen">
  /*.table-hover > tbody > tr:hover {
  background-color: orange;
}*/
label {
    text-align:left;
    color:#0b0027;
}
.edit 
{
	width:135px;
	height:32px;
	position:absolute;
	margin:-33px 0px 0px 150px;
}
.profile
{
	padding:20px;
}
.img-responsive {
    margin: 0 auto;
}
.imagepencile
{
	position:absolute;
	margin:170px 0px 0px 200px;
	/*visibility:hidden;*/
}
#Pimage:hover span
{
	visibility:visible;
}
table tr td a
{
	margin-left:2px;
	visibility:hidden;
}
table tr :hover a
{
	visibility:visible;
}
 
	::-webkit-scrollbar 
	{
    width: 12px;
	}
 
		::-webkit-scrollbar-track 
		{
		    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
		    border-radius: 10px;
		}
		 
		::-webkit-scrollbar-thumb 
		{
		    border-radius: 10px;
		    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
		}	
  </style>

  <script src="module/jsactions.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="edit-profile.js" type="text/javascript" charset="utf-8" async defer></script>

</head>
<body>
<!--header-->
<!------------------------------------>
<?php include "menu.php";?>	
<!------------------------------------>
<!--content-->
<div class="container">
	<div class='col-md-8 profile'>
		<table class="table table-hover  table-border">
	<?php 
	$user = new User ;
	$currunt_user= $user->getUserId($_SESSION['user_id']);
	foreach ($currunt_user as $key => $user)
	{
		$id=$user['id'];
		if ($id==null)
		{
			echo "<tr><td colspan='4'> No Data Found</td></tr> ";
		}
		else
		{
			/*<span id='edit-name-success' class='has-success has-feedback'>updated name success</span>*/
			echo "<tr><td><label >ID</label></td><td> ".$user['id']."</td></tr>";
			
			echo "<tr><td><label >Name</label></td><td id='name'> ".$user['name']."<a href='#' class='glyphicon glyphicon-pencil' id='click_name'/></td></tr>";
			echo "<td id='editname'>";
			echo "<div class='btn-group btn-group-sm'><input id='edit_name' placeholder='".$user['name']."' name='edit_user_name' class='form-control' />";
			echo "<input id='do_edit_name' class='edit btn btn-primary btn-lg' name='ok' value='edit name' />";
			echo "</div>";

			echo "<tr><td><label >Email</label></td><td id='email'> ".$user['email']."<a href='#' class='glyphicon glyphicon-pencil' id='click_email'/></td></tr>";
			echo "<td id='editemail'>";
			echo "<div class='btn-group btn-group-sm'><input id='edit_email' placeholder='".$user['email']."' email='edit_user_email' class='form-control' />";
			echo "<input id='do_edit_email' class='edit btn btn-primary btn-lg' name='ok' value='edit email' />";
			echo "</div>";

			echo "<tr><td><label >Password</label></td><td id='password'> ".$user['password']."<a href='#' class='glyphicon glyphicon-pencil' id='click_password'/></td></tr>";
			echo "<td id='editpassword'>";
			echo "<div class='btn-group btn-group-sm'><input id='edit_password' placeholder='".$user['password']."' password='edit_user_password' class='form-control' />";
			echo "<input id='do_edit_password' class='edit btn btn-primary btn-lg' name='ok' value='edit password' />";
			echo "</div>";

			echo "<tr><td><label >Birth-Date</label></td><td> ".$user['birthdate']."</td></tr>";
			echo "<tr><td><label >Job</label></td><td> ".$user['job']."</td></tr>";
			echo "<tr><td><label >Telephone No.</label></td><td> ".$user['tel']."</td></tr>";
			echo "<tr><td><label >Address</label></td><td> ".$user['address']."</td></tr>";
			
			echo "<tr><td><label >Credit Limit</label></td><td id='c_limit'> ".$user['c_limit']."<a href='#' class='glyphicon glyphicon-pencil' id='click_c_limit'/></td></tr>";
			echo "<td id='editc_limit'>";
			echo "<div class='btn-group btn-group-sm'><input type='number' id='edit_c_limit' placeholder='".$user['c_limit']."' c_limit='edit_user_c_limit' class='form-control' />";
			echo "<input id='do_edit_c_limit' class='edit btn btn-primary btn-lg' name='ok' value='edit c_limit' />";
			echo "</div>";

			if($user['admin']==1)
			{
				echo "<tr><td><a href='controle.php'><img src='images/admin.png' class='img-responsive img-rounded' width='25px' height='20px' align='center'/>admin page</a></td></tr>";
				
			}
								
	?>
	</table>
	</div>
	<div class='col-md-4 profile'>
		<?php 
		echo "<a href='#' >";
		echo "<img id ='Pimage' src='".$user['image']."' class='img-responsive img-rounded' width='150px' height='140px'/><span class='glyphicon glyphicon-pencil imagepencile' >edit</span></a>";
		}
	}
		?>
	</div>

</div><!-- end of container div -->

<!--//content-->
<!------------------------------------>
<?php include('footer.php');?>
<!------------------------------------>	
</body>
</html>
			