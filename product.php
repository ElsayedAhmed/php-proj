<?php 
class product
{
	var $id;
	var $sub_cat_id;
	var $name;
	var $image;
	var $price;
	var $color;
	var $size;
	var $quantity;
	var $add_date;

	private static $conn = Null;

	function __construct($id=-1) {
		if(self::$conn == Null) {
			self::$conn = mysqli_connect('localhost','root','iti','store');
		}
	}
	function getProductBy_subCat($sub_cat_id) {
		$query = "select * from product where sub_cat_id='$sub_cat_id' ";
		$result = mysqli_query(self::$conn,$query);
		//$prod = mysqli_fetch_assoc($result);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
		
	}
	function getProductBy_prices($price1,$price2){
		$query="select * from product where price between $price1 and $price2";
		$result=mysqli_query(self::$conn,$query);
		//mysqli_fetch_assoc($result);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;

	}
	function getProductBy_price($price){
		$query="select * from product where price =$price";
		$result=mysqli_query(self::$conn,$query);
		//mysqli_fetch_assoc($result);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;

	}
	function get_catName($val)
	{
		$query="select name from category where name like'$val%'";
		$result=mysqli_query(self::$conn,$query);
		return mysqli_fetch_assoc($result);
		
	}

	function getsubCatBy_catname($val)
	{	
		$query="select name,id from sub_category where cat_id in ( select id from category where name like '$val%')";
		$result=mysqli_query(self::$conn,$query);
		
		$data = [];
		
		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}
}




 ?>