<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstrap Responsive Website Template | Products :: w3layouts</title>
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
?>

	
<!--content-->
<!---->
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">
					  
				<div class=" rsidebar span_1_of_left">
					<div class="of-left">
						<h3 class="cate">Categories</h3>
					</div>
		 <ul class="menu">
		 	 <?php 
				  $cats = getCats();
				  foreach ($cats as $key => $value) {
			 ?>
			 	<li><a class="color1" href="#"><?php echo $value["name"]; ?></a>
			<?php
			}
			?> 
		</ul>
					</div>
				<!--initiate accordion-->

		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });			
			});
			$("body").on('click', '.item_add', function(event) {
				event.preventDefault();
				//alert("Clicked");
				var price = $(this).text();
				$(".simpleCart_total").text(price);

				//var total = getElementId()
				//alert(price);

			});
		</script>
<!---->
	<div class="product-middle">
		
					<div class="fit-top">
						<h6 class="shop-top">Lorem Ipsum</h6>
						<a href="single.php" class="shop-now">SHOP NOW</a>
<div class="clearfix"> </div>
	</div>
				</div>	 
						<div class="sellers">
							<div class="of-left-in">
								<h3 class="tag">Tags</h3>
							</div>
								<div class="tags">
									<ul>
										<li><a href="#">design</a></li>
										<li><a href="#">fashion</a></li>
										<li><a href="#">lorem</a></li>
										<li><a href="#">dress</a></li>
										<li><a href="#">fashion</a></li>
										<li><a href="#">dress</a></li>
										<li><a href="#">design</a></li>
										<li><a href="#">dress</a></li>
										<li><a href="#">design</a></li>
										<li><a href="#">fashion</a></li>
										<li><a href="#">lorem</a></li>
										<li><a href="#">dress</a></li>
										
										<div class="clearfix"> </div>
									</ul>
								
								</div>
								
		</div>
				<!---->
				<div class="product-bottom">
					<div class="of-left-in">
								<h3 class="best">Best Sellers</h3>
							</div>
					<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.php"><img class="img-responsive " src="images/p1.jpg" alt=""></a>
									
								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="single.php" >Lorem ipsum dolor sit
amet consectetuer  </a></h6>
								
								<span class=" price-in1"> $40.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.php"><img class="img-responsive " src="images/p2.jpg" alt=""></a>
									
								</div>
							<div class="fashion-grid1">
								<h6 class="best2"><a href="single.php" >Lorem ipsum dolor sit
amet consectetuer </a></h6>
								
								<span class=" price-in1"> $40.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
					
				</div>
<div class=" per1">
				<a href="single.php" ><img class="img-responsive" src="images/pro.jpg" alt="">
				<div class="six1">
					<h4>DISCOUNT</h4>
					<p>Up to</p>
					<span>60%</span>
				</div></a>
			</div>
				</div>
				<div class="col-md-9 product1">
					<!-- ******************************************************************** -->
						<?php
						$products = subCatProds($_GET['id']);  //return products of sub category
						if($products)
						{	
							foreach ($products as $key => $value) {
							?>
								<div class="col-md-4 bottom-cd simpleCart_shelfItem">
							<div class="product-at ">
								<a href="single.php?id=<?php echo $value['id']; ?>"><img class="img-responsive" src="<?php echo $value['image']; ?>" alt="">
								<div class="pro-grid">
											<span id="know_more"><?php echo $value['price']?></span>   <!-- added -->  
								</div>
							</a>	
							</div>
							<p class="tun">It is a long established fact that a reader</p>
							
							<a href="single.php?id=<?php echo $value['id']; ?>" class="item_add"><p class="num"><i> </i><?php echo $value['price']?></p></a>						
						</div>
						<?php
							}
						}
						else
						{
							echo "<p class='tun'>Sorry no products here yet </p>";
						}

					?>
					<!-- ******************************************************************* -->
					
					<div class="clearfix"> </div>
				</div>
				
				</div>
		<div class="clearfix"> </div>
		<nav class="in">
				  <ul class="pagination">
					<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2 <span class="sr-only"></span></a></li>
					<li><a href="#">3 <span class="sr-only"></span></a></li>
					<li><a href="#">4 <span class="sr-only"></span></a></li>
					<li><a href="#">5 <span class="sr-only"></span></a></li>
					 <li> <a href="#" aria-label="Next"><span aria-hidden="true">»</span> </a> </li>
				  </ul>
				</nav>
		</div>
		
		</div>
			<div class="footer">

				<!---->

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
			