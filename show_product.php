<?php
	session_start();
	include 'product.php';
	include 'head.php';
	include 'menu.php';
	?>
	<div class="container">
	<div class="account">
<?php
	$prod=new product();
	$result=$prod->getProductBy_subCat($_GET['id']);
	foreach ($result as $key => $value) {
		//var_dump($value);	
		?>	
		<div class="col-md-4 bottom-cd simpleCart_shelfItem">
			<div class="product-at ">
			<a href="single.php?id=<?php echo $value['id']; ?>"><img class="img-responsive" src="<?php echo $value['image']; ?>" alt="">
				<div class="pro-grid">
					<span id="know_more">Know More</span>   <!-- added --> 
					<p class="tun" style='color:white'>Name :<?php echo $value['name']; ?></p> 
				</div>

			</a>	
			</div>
			<p class="tun">Price :<?php echo $value['price']; ?></p>
			<a href="single.php?id=<?php echo $value['id']; ?>" class="item_add"><p class="num"><i> </i><?php echo $value['price']?></p></a>						
		</div>
	</div>
</div>	
		<?php

		}
		//echo $name;

	include'footer.php';

  ?>