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
if (isset($_POST['search'])) 
{
	
	if ($_POST['search']=='search') 
	{
		if (isset($_POST['price1']))
		 {
			if (!empty(trim($_POST['price1'])))
			 {
				if (isset($_POST['price2'])) 
				{
					if (!empty(trim($_POST['price2']))) 
					{
						$result=$prod->getProductBy_prices($_POST['price1'],$_POST['price2']);
						foreach ($result as $key => $value)
						 {
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
								<?php
							if (is_null($value['image'])) {
								echo "sorry,no product found has this price";
							}
						}
					}
					else
					{
						$result=$prod->getProductBy_price($_POST['price1']);
						foreach ($result as $key => $value) {
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
								<?php
							if (is_null($value['image'])) {
								echo "sorry,no product found has this price";
							}
						}
					}
				}


			}
			else
				{
					if (isset($_POST['price2']))
					 {
						if (!empty(trim($_POST['price2']))) 
						{
							$result=$prod->getProductBy_price($_POST['price2']);
							foreach ($result as $key => $value) 
							{
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
								<?php
								if (is_null($value['image'])) {
								echo "sorry,no product found has this price";
							}	
						}
						}else
						{
							echo"<div> </div>";
							echo "<div><b><font color='red'>PLZ,Enter price of product you want to search for it</font></b></div>";
							//header('location:index.php');
						}


					}
				}
		}

	}
}
//else{
// 	header('location:index.php');
// }
	if (isset($_POST['search'])) {

		if ($_POST['search']=='search') {
			
			if (isset($_POST['cat'])) {
				if (!empty(trim($_POST['cat']))) {
					
					$cat_name=$prod->get_catName($_POST['cat']);
					foreach ($cat_name as $key => $value) {
						echo "<div class='row col-md-12'><h3>sub Category for ".$value." is :-</h3></div>";
					}
					//echo "<select role='group' class=' btn btn-warning col-md-5' extend = 'false' name='cat_id' id='chooseSearch'/>";
					//echo "<option disabled='true' selected>Select Sub-cat</option>";
					echo "<div class='btn-group btn-group-xl'>";
					$result=$prod->getsubCatBy_catname($_POST['cat']);
					foreach ($result as $key => $value) {
						// foreach ($value as $key1 => $value1) {
						$id=$value['id'];
							echo " <a href='show_product.php?id=$id'><button class='btn btn-warning'>".$value['name']."</button></a>";
						// }
					}
					echo "</div>";
					//echo"</select></br>";
				}
			}
		}
	}
	?>
	</div>
</div>


	<?php
//}
	include'footer.php';

	?>