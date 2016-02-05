<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
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
<script src="js/main.js"></script>
<script src="js/simpleCart.min.js"> </script>
</head>
<body>
<!--header-->
<?php
session_start();
include "menu.php";
// session_start();
// if(isset($_SESSION['name'])){
// 	echo $_SESSION['name'];
// }else{
// 	echo "no session set! ";
// }
$user_id = $_SESSION['user_id'];
//echo $user_id;
$id = $_GET['id'];
$product = oneProd($id);
$name = $product['name'];
$image = $product["image"];
$price = $product["price"];
$date = $product["add_date"];
$status = $product["status"];
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
			    var menu_ul = $('.menu > li > ul');
			    menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) 
			    {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) 
			        {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else 
			        {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
<!---->
	<div class="product-middle">
		
					<div class="fit-top">
						<h6 class="shop-top">Lorem Ipsum</h6>
<div class="clearfix"> </div>
	</div>
				</div>	 
						<div class="sellers">
							<div class="of-left-in">
								<!-- <h3 class="tag">Tags</h3> -->
							</div>
								<div class="tags">
									<!-- <ul>
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
									</ul>	 -->
								</div>
								
		</div>
				<!---->
				<div class="product-bottom">
<!-- 					<div class="of-left-in">
								<h3 class="best">Best Sellers</h3>
							</div>
					<div class="product-go">
						<div class=" fashion-grid">
									<a href="#"><img class="img-responsive " src="images/p1.jpg" alt=""></a>
									
								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="#" >Lorem ipsum dolor sit
amet consectetuer  </a></h6>
								
								<span class=" price-in1"> $40.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
									<a href="#"><img class="img-responsive " src="images/p2.jpg" alt=""></a>
									
								</div>
							<div class="fashion-grid1">
								<h6 class="best2"><a href="#" >Lorem ipsum dolor sit
amet consectetuer </a></h6>
								
								<span class=" price-in1"> $40.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div> -->
					
				</div>
<!-- <div class=" per1">
	<a href="#" ><img class="img-responsive" src=<?php echo $product['image'];?> alt="">
	<div class="six1">
		<h4>DISCOUNT</h4>
		<p>Up to</p>
		<span>60%</span>
	</div></a>
</div> -->
				</div>
				<div class="col-md-9 product-price1">
				<div class="col-md-5 single-top">	
<div class="flexslider">
  <ul class="slides">
    <li data-thumb="images/si2.jpg">
		<img src="<?php echo $product['image'];?>" />	
	</li>  
  </ul>

</div>
<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<script defer src="single-cart.js"></script>

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />


	</div>	
		<div class="col-md-7 single-top-in simpleCart_shelfItem">
			<div class="single-para ">
			<h4><?php
					
					echo $product['name'];
				?>
				</h4>
				<div class="star-on">
					<ul class="star-footer">
							<li><a href="#"><i> </i></a></li>
							<li><a href="#"><i> </i></a></li>
							<li><a href="#"><i> </i></a></li>
							<li><a href="#"><i> </i></a></li>
							<li><a href="#"><i> </i></a></li>
						</ul>
					<div class="review">
						<a href="#"> 1 customer review </a>		
					</div>
				<div class="clearfix"> </div>
				</div>
				<h5 class="item_price"><?php echo $product['price']."$";?></h5>
				<!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed 
						diam nonummy nibh euismod tincidunt ut laoreet dolore 
						magna aliquam erat </p> -->
						
						<?php
							$prodId = $product['id'];
							$colors = $product['color'];
							$color = split(",", $colors);
							$sizes = $product['size'];
							$size = split(",", $sizes);
						?>
							<div class="available">
								<ul>
									<li>Color
										<select>
										<?php foreach ($color as $key => $value) {
											?>
											<option><?php echo  $value;?></option>
										<?php
										}?>
										<!-- <option>Black</option>
										<option>Dark Black</option>
										<option>Red</option> -->
									</select></li>
								<li class="size-in">Size<select>
									
									<?php foreach ($size as $key => $value) {
									?>
									<option><?php echo  $value;?></option>
									<?php
									}?>
									<!-- <option>Large</option>
									<option>Medium</option>
									<option>small</option>
									<option>Large</option>
									<option>small</option> -->
								</select></li>
								<div class="clearfix"> </div>
							</ul>
						</div>
							<a href="#" class="add-cart item_add" id="addItem" value_id="<?php echo $prodId;?>" userid="<?php echo $user_id;?>" name="<?php echo $name;?>" date="<?php echo $date;?>"status="<?php echo $status;?>" price="<?php echo $price;?>" image="<?php echo $image;?>">ADD TO CART</a>
						</div>
					</div>
				<div class="clearfix"> </div>
			<!---->
					<div class="cd-tabs">
			<nav>
				<ul class="cd-tabs-navigation">
					<li><a data-content="fashion"  href="#0">Description </a></li>
					<li><a data-content="cinema" href="#0" >Addtional Informatioan</a></li>
					<li><a data-content="television" href="#0" class="selected ">Reviews (1)</a></li>
					
				</ul> 
			</nav>
	<ul class="cd-tabs-content">
		<li data-content="fashion" >
		<div class="facts">
		  <p > There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined </p>
			<ul>
				<li>Research</li>
				<li>Design and Development</li>
				<li>Porting and Optimization</li>
				<li>System integration</li>
				<li>Verification, Validation and Testing</li>
				<li>Maintenance and Support</li>
			</ul>         
        </div>

</li>
<li data-content="cinema" >
		<div class="facts1">
					
						<div class="color"><p>Color</p>
							<span >Blue, Black, Red</span>
							<div class="clearfix"></div>
						</div>
						<div class="color">
							<p>Size</p>
							<span >S, M, L, XL</span>
							<div class="clearfix"></div>
						</div>
					        
			 </div>

</li>
<li data-content="television" class="selected">
	<div class="comments-top-top">
				<div class="top-comment-left">
					<img class="img-responsive" src="images/co.png" alt="">
				</div>
				<div class="top-comment-right">
					<h6><a href="#">Hendri</a> - September 3, 2014</h6>
					<ul class="star-footer">
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
									</ul>
									<p>Wow nice!</p>
				</div>
				<div class="clearfix"> </div>
				<a class="add-re" href="#">ADD REVIEW</a>
			</div>

</li>
<div class="clearfix"></div>
	</ul> 
</div> 
		<!-- <div class=" bottom-product">
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="#"><img class="img-responsive" src="images/pi3.jpg" alt="">
							<div class="pro-grid">
										<span class="buy-in">Buy Now</span>
							</div>
						</a>	
						</div>
						<p class="tun">It is a long established fact that a reader</p>
						<a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>						
					</div>
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="#"><img class="img-responsive" src="images/pi1.jpg" alt="">
							<div class="pro-grid">
										<span class="buy-in">Buy Now</span>
							</div>
						</a>	
						</div>
						<p class="tun">It is a long established fact that a reader</p>
<a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>					</div>
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="#"><img class="img-responsive" src="images/pi4.jpg" alt="">
							<div class="pro-grid">
										<span class="buy-in">Buy Now</span>
							</div>
						</a>	
						</div>
						<p class="tun">It is a long established fact that a reader</p>
<a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>					</div>
					<div class="clearfix"> </div>
				</div> -->
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
				<p>Contrary to popular belief</p>
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
				<p>Sign Up to get all news update and promo</p>
				<form>
					<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"/>
					<input type="submit" value="Sign up"/>
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-class">
	<p>© 2015 New store . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	</div>
</div>
</body>
</html>
			