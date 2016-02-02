<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	session_start();
	include 'module/cat.php';
	$cat = new Category ;
?>
<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstrap Responsive Website Template | Login :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<!-- tabes -->
  <link rel="stylesheet" href="css/jquery-ui.css">
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
 
  <style type="text/css" media="screen">
  .visible {
    visibility: hidden;
    height:500px;
	}
	#tabs
	{
		min-height:200px;
		overflow:hidden;
		padding:10px 5px;
	}
	.hide {
    display:none;
	}
	.show{
    display: block;
	}
	.form-horizontal  
	{margin-top:10px;}
	.get_all_category
	{
		border:1px solid blue ;
		border-radius:5px;
		margin: 10px 0px 15px 0px;
		padding:5px;
		height:500px;
		background-color:#999;
		overflow:scroll;

	}
	.get_all_category table tr td 
	{
		text-align:center;
	}
	.get_all_category table tr th
	{
		text-align:center;
		color:#fff;
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
  <script>
  $(function() {
  	
    $( "#tabs" ).tabs();
    $("#hidden").addClass('hide');
    $("#show_add").on('click', function(event) {
    	event.preventDefault();
    	$("#show_add").addClass('hide');
    	$("#hidden").removeClass('hide');
    	$("#hidden").addClass('show');
    });
	$(".show_edit").on('click', function(event) 
	{
    	event.preventDefault();
    	$(".name").addClass('hide');
    	$(".edit").removeClass('hide');
    	$(".edit").addClass('show');
    	$(".show_edit").addClass('hide');
	});


    /*$("#add").on('click', function(event) {
    	event.preventDefault();
    	$("#show_add").removeClass('hide');
    	$("#hidden").addClass('hide');
    	$("#hidden").removeClass('show');
    });*/
    
  });
  

  </script>
</head>
<body>
<!--header-->
<?php
include "menu.php";
?>

	
<!--content-->
<div class="container">
	<div class="account">
		<h3>Controle Panale</h3>
		<div id="tabs" >
		  <ul>
		    <li><a href="#tabs-1" >Users</a></li>
		    <li><a href="#tabs-2">Categories</a></li>
		    <li><a href="#tabs-3">Sub-Categories</a></li>
		    <li><a href="#tabs-4">Products</a></li>
		    <li><a href="#tabs-5">Carts</a></li>
		  </ul>
		 	<div id="tabs-1">
				<form role='form' class='form-horizontal col-md-12' action='check.php' method='post'>
						<div class='form-group has-warning'>
							<label class='col-md-2'>Username</label>
							<div class='col-md-10 input-group'>
								<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
								<input placeholder='Username' class='form-control col-md-2' name='username' />
							</div>
						</div>	
						<div class='form-group has-warning'>
							<label class='col-md-2'>Password</label>
							<div class='col-md-10 input-group'>
								<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
								<input placeholder='Password' class='form-control' name='password' type='password' />
							</div>
						</div>		
						<span class='col-md-2'></span>
						<input type='submit' class='col-md-1 btn btn-primary btn-lg' name='ok' value='Login' />
				</form>	
			</div><!-- end of tab-->
			<div id="tabs-2">
<!------------------------------------------------------------------------------------------------------------------------>
				<form role='form' class='form-horizontal col-md-12' action='module/server.php' method='post'>
				<a class='col-md-2 btn btn-primary btn-lg ' value='Add new Category' id="show_add">Add new Category</a><br/>
				<div id="hidden">	
					<div class='form-group has-warning'>
						<label class='col-md-3'>insert new Category :</label>
						<div class='col-md-5 input-group'>
							<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
							<input placeholder='Add Category' class='form-control col-md-2' name='add_cat' />
							<span>
							<?php if (isset($_SESSION['error'])){echo $_SESSION['error'];}?>	
							</span>
						</div>
					</div>	
					<span class='col-md-3'></span>
					<input  name="method" value="insert" type="hidden" >
					<input type='submit' class='col-md-2 btn btn-primary btn-lg' name='ok' value='Add Category' id="add"/>
				</div>
			</form>	
				<div class='get_all_category col-md-12 table-responsive'>
					<table class="table table-hover">
			    		<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Number of products</th>
							<th>Action</th>
						</tr>
						<tr><th colspan="4">Categories With Products</th></tr>
						</thead>
						<tbody>
							<?php	 
								$cats= $cat->category();
								foreach ($cats as $key => $category)
								{
									$id=$category['id'];
									echo "<tr><td> ".$id;
									echo "</td><td class='name'>".$category['name'] ."</td>";
									echo "<td class='edit' class='hide'>";
									
									echo "<form  role='form' class='form-horizontal col-md-5' action='module/server.php' method='post'>";
									echo "<input placeholder='".$category['name']."' class='form-control' id='add_cat' style='width:120px;height:35px; margin:-10px 0px'/><input type='submit' class=' btn btn-primary btn-lg' name='ok' value='submit edit' style='width:120px;height:40px;position:absoulte;margin:0px 130px; margin-top:-35px'/>";
									echo "<input  name='method' class='col-md-1 btn btn-primary btn-lg' value='edit' type='hidden' ></form>";
										
									
									echo "</td>";
									echo "</td><td>".$category['Products'] ."</td>";
									echo "<td><div class='btn-group btn-group-sm'><a class='btn btn-warning' class='show_edit' value='Add new Category' >edit name</a>";
									echo "<a  class='btn btn-danger' href='module/server.php?method=delete&id=".$id;
									echo "'>Delete</a></div></td></tr>";
								}
							?>
						</tbody>
							<thead>
							<tr><th colspan="4">Empty Categories</th></tr>
							</thead>
						<tbody>
							<?php	 
								$cats= $cat->emptyCategory();
								foreach ($cats as $key => $category)
								{
									$id=$category['id'];
									echo "<tr><td> ".$id;
									echo "</td><td class='name'>".$category['name'] ."</td>";
									echo "<td class='edit' class='hide' style='width:120px'>";
									
									echo "<form  role='form' class='form-horizontal col-md-5' action='module/server.php?id=' method='post'>";
									echo "<input placeholder='".$category['name']."' name='edit_cat' class='form-control' id='add_cat' style='width:120px;height:35px; margin:-10px 0px'/>";
									echo "<input type='submit' class=' btn btn-primary btn-lg' name='ok' value='submit edit' style='width:120px;height:40px;position:absoulte;margin:0px 130px; margin-top:-35px'/>";
									echo "<input  name='method' value='edit' type='hidden' ></form>";
										
									
									echo "</td>";
									echo "</td><td>------------</td>";
									echo "<td><div class='btn-group btn-group-sm'><a class='btn btn-warning' class='show_edit' value='Add new Category' >edit name</a>";

									echo "<a  class='btn btn-danger' href='module/server.php?method=delete&id=".$id;
									echo "'>Delete</a></div></td></tr>";								}
							?>
						</tbody>
					</table>
				</div>
				<form role='form' class='form-horizontal col-md-12' action='module/server.php' method='post'>
				<div id="edit" class="hide">	
					<div class='form-group has-warning'>
						<label class='col-md-3'>Edit Category Name:</label>
						<div class='col-md-5 input-group'>
							<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
							<input placeholder='<?php echo $edit_name ?>' class='form-control col-md-2' name='add_cat' />
							<span>
							<?php if (isset($_SESSION['error'])){echo $_SESSION['error'];}?>	
							</span>
						</div>
					</div>	
					<span class='col-md-3'></span>
					<input  name="method" value="edit" type="hidden" >
					<input type='submit' class='col-md-2 btn btn-primary btn-lg' name='ok' value='Update Name' id="add"/>
				</div>
			</form>	
			
			</div><!-- end of tab-->
<!------------------------------------------------------------------------------------------------------------------------>

			<div id="tabs-3">
				<form role='form' class='form-horizontal col-md-12' action='check.php' method='post'>
						<div class='form-group has-warning'>
							<label class='col-md-2'>Username</label>
							<div class='col-md-10 input-group'>
								<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
								<input placeholder='Username' class='form-control col-md-2' name='username' />
							</div>
						</div>	
						<div class='form-group has-warning'>
							<label class='col-md-2'>Password</label>
							<div class='col-md-10 input-group'>
								<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
								<input placeholder='Password' class='form-control' name='password' type='password' />
							</div>
						</div>		
						<span class='col-md-2'></span>
						<input type='submit' class='col-md-1 btn btn-primary btn-lg' name='ok' value='Login' />
				</form>	
			</div><!-- end of tab-->
			<div id="tabs-4">
				<form role='form' class='form-horizontal col-md-12' action='check.php' method='post'>
						<div class='form-group has-warning'>
							<label class='col-md-2'>Username</label>
							<div class='col-md-10 input-group'>
								<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
								<input placeholder='Username' class='form-control col-md-2' name='username' />
							</div>
						</div>	
						<div class='form-group has-warning'>
							<label class='col-md-2'>Password</label>
							<div class='col-md-10 input-group'>
								<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
								<input placeholder='Password' class='form-control' name='password' type='password' />
							</div>
						</div>		
						<span class='col-md-2'></span>
						<input type='submit' class='col-md-1 btn btn-primary btn-lg' name='ok' value='Login' />
				</form>	
			</div><!-- end of tab-->
			<div id="tabs-5">
				<form role='form' class='form-horizontal col-md-12' action='check.php' method='post'>
						<div class='form-group has-warning'>
							<label class='col-md-2'>Username</label>
							<div class='col-md-10 input-group'>
								<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
								<input placeholder='Username' class='form-control col-md-2' name='username' />
							</div>
						</div>	
						<div class='form-group has-warning'>
							<label class='col-md-2'>Password</label>
							<div class='col-md-10 input-group'>
								<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
								<input placeholder='Password' class='form-control' name='password' type='password' />
							</div>
						</div>		
						<span class='col-md-2'></span>
						<input type='submit' class='col-md-1 btn btn-primary btn-lg' name='ok' value='Login' />
				</form>	
			</div><!-- end of tab-->
		</div>
</div>
</div>

<!--//content-->
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
			