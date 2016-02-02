<!DOCTYPE html>
<?php  
	include "function.php";
	if(isset($_SESSION['user_id']))
	{
	$id=$_SESSION['user_id'];
	include('user.php');
	$userobj = new User;
	$user = $userobj->getUserId($id);
}
?>
<style type="text/css" media="screen">
.pic{
	margin-right:15px;
}	
</style>
<!--header-->
<script>
		$(function(){
	$('#chooseSearch').change(function(event) {
		value=$(this).val();
		if (value=='Price') {
			$('#form').removeClass('hidden');
			$('#cat').addClass('hidden');
		}else{
			$('#cat').removeClass('hidden');
			$('#form').addClass('hidden');
		}
	});
	
})
	</script>

<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="searchs header-right col-md-5" id="selectSub" >

				<div class="input-group" role="group" style='margin-left:-80px;' >
					<div class="btn-group btn-group-sm" >
						 <select role="group" class=' btn btn-warning col-md-6' extend = "false" name='cat_id' id="chooseSearch"/>
							<option disabled="true" selected>Search</option>
								<option value='Price'>Search By price</option>
								<option value='category_name'> Search By category_name</option>
						</select>
						<form action="check_search.php " method="post" id="form" class="btn-group btn-group-sm hidden col-md-7" style="margin-left:-15px">
							<input class='btn btn-default' type="text" name='price1' placeholder='from' size="6">
							<input  class='btn btn-default' type="text" name='price2' placeholder='to'  size="6">
							<input type="submit" class=' btn btn-warning'value="search" name="search"  >
						</form>
						<form action="check_search.php" method="post" class="btn-group btn-group-sm hidden col-md-7" id="cat" style="margin-left:-15px">
							<input type="text" class='btn btn-default' name='cat' placeholder='category-name'  size="16">
							<input type="submit" class=' btn btn-warning'value="search" name="search"  >
						</form> 
					</div>	
				</div>
				<input type='text' id="price" class="hidden" />
				<div class="form-group col-md-10 hidden" id='select_Sub' > 
			<!-- data from select using ajax-->
				</div>
			
		</div>
			<div class="header-left col-md-8" style="margin-right:-100px">		
					<ul class=' col-md-8'>
						<li >
							
						<?php
						if (isset($_SESSION['user_id']) && isset($_SESSION['admin']))
						{	
							echo "<img width='25px' height='30px' src='images/c2.png' alt='controle page'><a href='controle.php'>Admin Page</a>";
						}

						?>
						</li>
						<?php
						if (isset($_SESSION['user_id']))
						{
							echo "<li><img width='35px' height='35px' src='".$user['0']['image']."' alt='controle page'>";
							echo "<a href='profile.php?id= '>  ";
							echo $user['0']['name']."</a></li>";
							echo "<li ><a href='logout.php'  >LogOut</a></li>";

						}
						else
						{
							echo "<li><a href='login.php'  >Login</a></li>";
							echo "<li><a href='register.php'>Register</a></li>";
						}
						//echo "id= ".$_SESSION['user_id'];
						?>
					</ul>
					<div class="cart box_1 header-left col-md-4">
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
				      	<div class="mepanel" style="width:500px">
						<div class="row" >
							<div class="col1">
								<div class="h_nav" >
								<h4>Sub Category</h4>
									<ul style="margin-left:40px ;">
										<!-- *****************************added******************************** -->
									 <?php 
									  $id = $value["id"];
									  $sub_cats = getSubCats($value["id"]);
									  foreach ($sub_cats as $key => $value2) 
									  {
								 	 ?>
										<li><a href="products.php?id=<?php echo $value2['id'];?>"><?php echo $value2['name']; ?></a></li>
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
