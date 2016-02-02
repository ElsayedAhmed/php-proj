<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	include 'module/cat.php';
	$cat = new Category ;
	include 'module/sub-cat.php';
	$subObj = new SubCategory;
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
.img-responsive {
    margin: 0 auto;
}
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
	
	.edit
	{
		width:200px;
	}
	.edit_cat
	{
		width:120px;height:35px; margin:-10px 0px;
	}
	.edit_cat_id
	{
		width:120px;height:40px; margin:-15px 0px;padding-top:-5px;
	}
	.do_edit
	{
		width:120px;height:40px;position:absoulte;margin-left:130px; margin-top:-35px;
	}
	.do_edit_id
	{
		width:120px;height:40px;position:absoulte;margin-left:160px; margin-top:-45px;
	}
	.close
	{
		display:block;
	}
	.get_all_category
	{
		border:1px solid blue ;
		border-radius:5px;
		margin: 10px 0px 15px 0px;
		padding:5px;
		height:500px;
		background-color:#ccc;
		overflow:scroll;

	}
	.get_all_category table tr td 
	{
		text-align:center;
		color:#000039;

	}
	.get_all_category table tr th
	{
		text-align:center;
		color:#000;
	}
	#sub_cat_lable
	{
		margin: 10px;
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
  
</head>
<body>
<!--header-->
<!------------------------------------>
<?php include "menu.php";?>	
<!------------------------------------>
<!--content-->
<div class="container">
	<div class="account">
		<h3>Controle Panale</h3>
		<div id="tabs" >
		  <ul>
		    <li><a href="#tabs-1" >Users</a></li>
		    <li><a href="#tabs-2">Categories</a></li>
		    <li><a href="#tabs-3">Sub-Categories</a></li>
		    <li><a href="#tabs-4">Add Products</a></li>
		    <li><a href="#tabs-5">View Products</a></li>
		    <li><a href="#tabs-6">View Order History</a></li>
		  </ul>
		 	<!------------------------------------------------------------------------------------------------------------------------>
			<?php include('tab1.php');?>
			<!------------------------------------------------------------------------------------------------------------------------>
			<?php include('tab2.php');?>
			<!------------------------------------------------------------------------------------------------------------------------>
			<?php include('tab3.php');?>			
			<!------------------------------------------------------------------------------------------------------------------------>
			<?php include('tab4.php');?>			
			<!------------------------------------------------------------------------------------------------------------------------>
			<?php include('tab5.php');?>			
			<!------------------------------------------------------------------------------------------------------------------------>
			<?php include('tab6.php');?>			
			<!------------------------------------------------------------------------------------------------------------------------>
			
			

		</div><!-- end of tabs div -->
	</div><!-- end of account div -->
</div><!-- end of container div -->

<!--//content-->
<!------------------------------------>
<?php include('footer.php');?>
<!------------------------------------>	
</body>
</html>
			