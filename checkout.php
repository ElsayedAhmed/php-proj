<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstrap Responsive Website Template | Checkout :: w3layouts</title>
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
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
</head>
<body>
<!--header-->
<?php
session_start();
include "menu.php";
//var_dump($_SESSION);
$id = $_SESSION['user_id'];
$userProducts = getUsersOrder($id);
// var_dump($userProducts);
// var_dump($_SESSION);

?>
 <script>$(document).ready(function(c) {
		$('.close2').on('click', function(c){
				$('.cart-header2').fadeOut('slow', function(c){
			$('.cart-header2').remove();
		});
		});	  
		});

 // $("body").on('click', function(event) {
 // 	event.preventDefault();
 // 	alert("ay haga");
 // });
 </script>

 <script>$(document).ready(function(c) {
	$('.close1').on('click', function(c){
		$('.cart-header').fadeOut('slow', function(c){
			$('.cart-header').remove();
		});
		});	  
	});

 </script>
<div class="container">
	<div class="check">	 
		 <h1>Shopping Bag </h1>
		 <div class="col-md-9 cart-items">
			
			<?php
		    foreach ($userProducts as $key => $value) {
			?>

			 <div class="cart-header">
				 <div class="close1"> </div>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
					    <img src="<?php echo $value['Pimage']; ?>" class="img-responsive" alt=""/>

						</div>
					   <div class="cart-item-info">
						<h1><span><?php echo $value['Pname'];?></span></h1>
						
						<!-- <h3><a href="#">Mountain Hopper(XS R034)</a><span>Model No: 3578</span></h3> -->
						<ul class="Order Date">
							<li><p>Order Date : <?php echo $value['order_date'];?></p></li>
							<li><p>Qty : <?php echo $value['quantity'];?></p></li>
							<li><p>Price: <?php echo $value['price'];?></p></li>
<!-- 							<li><p>Price: <?php echo $value['price'];?></p></li>
 -->						</ul>
						
							<!--  <div class="delivery">
							 <p>Service Charges : Rs.100.00</p>
							 <span>Delivered in 2-3 bussiness days</span>
							 <div class="clearfix"></div>
				        </div> -->	
					   </div>
					   <div class="clearfix"></div>				
				  </div>
			 </div>
			 <?php
			  }
			 ?>			
		 </div>

		  <div class="col-md-3 cart-total">
			 <a class="continue" href="#">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span class="total1">
				 		<?php
				 		$total = 0;
				 		foreach ($userProducts as $key => $value) {
 						
 						// $total1 = $value['price'] * $value['quantity']; 
 						$total += $value['price'] * $value['quantity']; 
						}
						?>			
				 </span>				 
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4>Total Cost</h4></li>	
			   <li class="last_price"><span><?php echo $total;	?></span></li>
			   <div class="clearfix"> </div>
			 </ul>
			
			 
			 <div class="clearfix"></div>
			 <a class="order" href="#">Place Order</a>
			 <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
			 </div>
			</div>
		
			<div class="clearfix"> </div>
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
			