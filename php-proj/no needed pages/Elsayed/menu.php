<!DOCTYPE html>
<?php  
	include "function.php";
?>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="search">
					<form>
						<input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
						<input type="submit" value="Go">
					</form>
			</div>
			<div class="header-left">		
					<ul>
						<li >
							<img width="25px" height="30px" src="images/c2.png" alt="controle page">
							<a href="controle.php"  >Admin Page</a>
						</li>
						<li ><a href="login.php"  >Login</a></li>
						<li><a  href="register.php"  >Register</a></li>

					</ul>
					<div class="cart box_1">
						<a href="checkout.php">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt=""></a>	
				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					  <li class="active grid"><a class="color8" href="index.php">Home</a></li>	
					 <!-- ******************************added************************************* -->
					  <?php 
						  $cats = getCats();
						  foreach ($cats as $key => $value) {
					 	?>
					 	<li><a class="color1" href="#"><?php echo $value["name"]; ?></a>
				      	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<!-- *****************************added******************************** -->
									 <?php 
									  $sub_cats = getSubCats();
									  foreach ($sub_cats as $key => $value) {
								 	 ?>
										<li><a href="products.php?id=<?php echo $value['id'];?>"><?php echo $value['name']; ?></a></li>
									<?php
										}
									?>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										 <?php 
										  $sub_cats = getSubCats();
										  foreach ($sub_cats as $key => $value) {
									 	 ?>
											<li><a href="products.php?id=<?php echo $value['id'];?>"><?php echo $value['name']; ?></a></li>
										 <?php
											}
										?>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="products.php">Levis</a></li>
										<li><a href="products.php">Persol</a></li>
										<li><a href="products.php">Nike</a></li>
										<li><a href="products.php">Edwin</a></li>
										<li><a href="products.php">New Balance</a></li>
										<li><a href="products.php">Jack & Jones</a></li>
										<li><a href="products.php">Paul Smith</a></li>
										<li><a href="products.php">Ray-Ban</a></li>
										<li><a href="products.php">Wood Wood</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
					</li>
					 	
					 <?php
						}
					  ?>	
				<li><a class="color3" href="blog.php">Blog</a></li>				
				<li><a class="color6" href="contact.php">Contact</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>
