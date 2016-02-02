<?php
	session_start();
	$conn =mysqli_connect("localhost", "root", "iti", "store");
	echo "connected";
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

	function getSubCats(){
		global $conn; 
		$query = "select * from sub_category";
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
		$query = "SELECT * FROM product, sub_category WHERE product.sub_cat_id = `sub_category`.id AND sub_cat_id =$subCatId" ;
		$product = mysqli_query($conn, $query);
		while ($row = mysqli_fetch_array($product)) {
			$data []= $row;
		}
		return $data;

	}

	

 	//function insert() {
	// 	$query = "insert into users(firstname,lastname,email) values('$this->firstname','$this->lastname','$this->email')";
	// 	$result  = mysqli_query(self::$conn,$query);
	// 	return mysqli_insert_id(self::$conn);
	// }
?>