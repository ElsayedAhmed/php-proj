<?php
	
	
	//session_start();
	$conn =mysqli_connect("localhost", "root", "iti", "store");
	//echo "connected";
	function getProds(){
		global $conn; 
		$query = "select * from product";
		$products = mysqli_query($conn, $query);
		while ($row = mysqli_fetch_array($products)) {
			$data []= $row;
		}
		return $data;
	}

	function oneProd($id){
		global $conn; 
		$query = "select * from product where id='$id'";
		$products = mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($products);
		return $row;
	}
	function cart(){
		echo $_SEESION['prod_id'];
	}

	function addToCart($id){
		global $conn;
		$userId = 1;
		$query = "insert into cart (prod_id,user_id)values('$id','$user_id')";
		$result = mysqli_query($conn, $query);
		return mysqli_insert_id($conn);

	}

	function getCats(){
		global $conn; 
		$query = "select * from category";
		$category = mysqli_query($conn, $query);
		while ($row = mysqli_fetch_array($category)) {
			$data []= $row;
		}
		return $data;
	}
	function oneCat($id){
		global $conn; 
		$query = "select * from category where id='$id'";
		$category = mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($category);
		return $row;
	}

	function getSubCats($id){
		global $conn; 
		 // "select * from category, sub_category where category.id = sub_category.cat_id AND category_id = '$id'";
		$query =  "SELECT * FROM category, sub_category WHERE category.id = sub_category.cat_id AND cat_id=$id";
		$sub_category = mysqli_query($conn, $query);
		while ($row = mysqli_fetch_array($sub_category)) {
			$data []= $row;
		}
		return $data;
	}

	function oneSubCat($id){
		global $conn; 
		$query = "select * from sub_category where id='$id'";
		$sub_category = mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($sub_category);
		return $row;
	}

	function imgId($id){
		global $conn; 
		$query = "select `image` from product where id='$id'";
		$category = mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($category);
		return $row;
	}

	function subCatProds($subCatId){
		global $conn; 
		$query = "SELECT P.* FROM product P, sub_category WHERE P.sub_cat_id = `sub_category`.id AND sub_cat_id =$subCatId" ;
			$product = mysqli_query($conn, $query);
			if(sizeof($product)> 0)
			while ($row = mysqli_fetch_array($product))
			{
				$data []= $row;
			}
			return $data;

	}

	function oneSubCatProd($id){
		global $conn; 
		$query = "select * from sub_category where id='$id'";
		$sub_category = mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($sub_category);
		return $row;
	}
	//user_id 	product_id  order_date 	status 	price 	image 
 	function insertProd($user_id,$product_id,$name,$order_date,$status,$price,$image) {
 		global $conn;
		$query = "INSERT INTO orders(id,user_id, product_id,name,order_date, status,price,image) 
								VALUES (null,'$user_id','$product_id','$name','$order_date','$status','$price','$image')";
														
		$result  = mysqli_query($conn,$query);
		return mysqli_insert_id($conn);
	}

	function getUserMail(){
		
		$query = "SELECT email FROM orders , user WHERE orders.user_id` = `user`.`id`"; 
		//SELECT `email` FROM orders , `user`WHERE orders.`user_id` = `user`.`id` AND `user`.`id` =1
		$email = mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($category);
		return $row;
	}

	// function getUserProds($email){
	// 	global $conn;
	// 	$query = "SELECT U.*,P.image AS Pimage,P.name,P.quantity,P.price, FROM user U,orders O , product P WHERE U.email = '$email' AND ";
	// 	$products = mysqli_query($conn, $query);
	// 	while($row = mysqli_fetch_array($products)){
	// 		$data []= $row;
	// 	}
	// 	return $data;
	// }

	function getUsersOrder($id) 
	{	
		global $conn;
		$query = "select U.* ,P.name AS Pname,P.image AS Pimage,P.quantity,P.price,O.*  from user U,product P,orders O where U.id = '$id' AND O.user_id=U.id AND P.id = O.product_id  ORDER BY U.c_limit";
		$result = mysqli_query($conn,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)) 
		{
			$data[] = $row;
		}
		return $data;
	}

	function getCatSubCats($id){
		global $conn;
		$query = "SELECT * from sub_category where cat_id=$id";
		$result = mysqli_query($conn,$query);
		mysqli_fetch_assoc($result);
		return $result;
	}

	function catsId(){
		global $conn;
		$query = "SELECT id FROM category";
		$result = mysqli_query($conn,$query);
		$data = [];
		while($row = mysqli_fetch_array($result)) 
		{
			$data[] = $row;
		}
		return $data;
	}

?>