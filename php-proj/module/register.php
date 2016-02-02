<?php
	session_start();

  ?>

<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstrap Responsive Website Template | Register :: w3layouts</title>
<!------------------------------------>
<?php include "head.php";?>	
<!------------------------------------>
<style type="text/css">
	#namerr,#repasserr,#passerr,#emailerr
	{
		position:absolute;
		margin-left:10px;
		width:200px;
		overflow:hidden;
		color:red;

		}
</style>
</head>
<body>
<script type="text/javascript" src="validate.js"></script>
<!--header-->
<?php
include "menu.php";
//session_start();
?>
<div class=" container">
<div class=" register">
	<h1 align="center">Register</h1>
		  	 
					 <form role='form' class='form-horizontal col-md-12' action='test.php' method='post' enctype="multipart/form-data">
		<div class='form-group has-warning'>
			<label class='col-md-2'>Name</label>
			<div class='col-md-5 input-group'>
				<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
				<input placeholder='Username' class='form-control' name='name' type="text" id="name" />
				<span id="namerr"><font color="red">*</font></span>
				<?php 
						if (isset($_SESSION['name']))
						{
							echo $_SESSION['name'];
							unset($_SESSION['name']);
						}
				 ?>
							
				
			</div>
		</div>
		<div class='form-group has-warning'>
			<label class='col-md-2'>Email</label>
			<div class='col-md-5 input-group'>
				<span class='input-group-addon'>@</span>
				<input placeholder='Email' class='form-control' name='email' type='email' id="email" />
				<span id="emailerr"><font color="red">*</font>
						<?php 
						if (isset($_SESSION['email']))
						{
							echo $_SESSION['email'];
							unset($_SESSION['email']);
						}
						 ?>
						</span>
			</div>
		</div>			
		<div class='form-group has-warning'>
			<label class='col-md-2'>Create-Password</label>
			<div class='col-md-5 input-group'>
				<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
				<input placeholder='Create-Password' class='form-control' name='password' type='password' id="password"/>
				<span id="passerr"><font color="red">*</font>
							<?php 
						if (isset($_SESSION['Password']))
						{
							echo $_SESSION['Password'];
							unset($_SESSION['Password']);
						}
						 ?>
						</span>			
			</div>
		</div>	
		<div class='form-group has-warning'>
			<label class='col-md-2'>Confirm-Password</label>
			<div class='col-md-5 input-group'>
				<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
				<input placeholder='Confirm-Password' class='form-control' name='passconfirm' id="repassword" type='password'  id="repassword"/>
				<span id="repasserr"><font color="red">*</font>

							<?php 
						if (isset($_SESSION['passconfirm']))
						{
							echo $_SESSION['passconfirm'];
							unset($_SESSION['passconfirm']);
						}
						 ?>
						</span> 	
			</div>
		</div>	
		
		<div class='form-group has-warning'>
			<label class='col-md-2'>TEL</label>
			<div class='col-md-5 input-group'>
				<span class='input-group-addon'></span>
				<input placeholder='TEL' class='form-control' name='tel' type='number' id="tel"/>
			</div>
		</div>	
		<div class='form-group has-warning'>
			<label class='col-md-2'>Birthdate</label>
			<div class='col-md-5 input-group'>
				<span class='input-group-addon'></span>
				<input placeholder='Birthdate' class='form-control' name='birthdate' type='date' />
			</div>
		</div>	
		<div class='form-group has-warning'>
			<label class='col-md-2'>job</label>
			<div class='col-md-5 input-group'>
				<span class='input-group-addon'></span>
				<input placeholder='job' class='form-control' name='job' type='text' />
			</div>
		</div>			
		<div class='form-group has-warning'>
			<label class='col-md-2'>address</label>
			<div class='col-md-5 input-group'>
				<span class='input-group-addon'></span>
				<input placeholder='address' class='form-control' name='address' type='text' />
			</div>
		</div>		
		<div class='form-group has-warning'>
			<label class='col-md-2'>credit</label>
			<div class='col-md-5 input-group'>
				<span class='input-group-addon'></span>
				<input placeholder='credit' class='form-control' name='credit' type='number' />
			</div>
		</div>	
		<div class='form-group has-warning'>
			<label class='col-md-2'>interests</label>
			<div class='col-md-5 input-group'>
				<span class='input-group-addon'></span>
				<input placeholder='interests' class='form-control' name='interests' type='text' />
			</div>
		</div>
		
		<div class='form-group has-warning'>
			<label class='col-md-2'> Uplaod Your image</label>
			<div class='col-md-1 input-group'>
				<span class='input-group-addon'></span>
				<input placeholder='image' name='image' type='file' />
			</div>
		</div>

		<span class='col-md-2'></span>
		<input type='submit' class='col-md-2 btn btn-primary btn-lg' name='ok' value='Register' />
	</form>	

	 <div class="clearfix"> </div>
</div>

<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
						<li><a href="#">How to order</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="contact.html">Location</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">Membership</a></li>	
					</ul>	
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>CONTACT US</h4>
				
					<p>
Contrary to popular belief</p>
					<p>The standard chunk</p>
					<p>Office:  +12 34 995 0792</p>
					<ul class="social">
						<li><a href="#"><i> </i></a></li>						
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="rss"> </i></a></li>
						<li><a href="#"><i class="gmail"> </i></a></li>
						
					</ul>
				</div>
				<div class="col-md-4 amet-sed">
					<h4>Newsletter</h4>
					<p>Sign Up to get all news update
and promo</p>
					<form>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="Sign up">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p >© 2015 New store . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
		</div>
</body>
</html>
			
