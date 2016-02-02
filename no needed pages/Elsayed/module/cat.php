<?php
class Category{
	var $id;
	var $name;
	private static $conn = Null;

	function __construct($id=-1) 
	{
		if(self::$conn == Null) {
			self::$conn = mysqli_connect('localhost','root','iti','store');
		}
	}

	function getcategory($id) 
	{
		$query = "select * from category where id=$id limit 1";
		$result = mysqli_query(self::$conn,$query);
		$category = mysqli_fetch_assoc($result);
		$this->id = $category['id'];
		$this->name = $category['name'];
	}

	function insert() {
		$query = "insert into category (name) values('$this->name')";
		$result  = mysqli_query(self::$conn,$query);
		//echo $this->name."effected rows = ".$result;
		return mysqli_insert_id(self::$conn);
	}
	function delete($id) {
		$query = "delete from category where id = $id";
		$result  = mysqli_query(self::$conn,$query);
		//echo $this->name."effected rows = ".$result;
		return mysqli_insert_id(self::$conn);
	}

	function category() {
		$query = "select C.id,C.name ,count(P.id) as Products from category C , sub_category S, product P WHERE C.id = S.cat_id and P.sub_cat_id = S.id";
		$result = mysqli_query(self::$conn,$query);
		$data = [];
 
		while($row = mysqli_fetch_assoc($result)) {
			$data []= $row;
		}
		return $data;
	}
	function emptyCategory() {
		$query = "select * from category C order by id";
		$result = mysqli_query(self::$conn,$query);
		$data = [];
 
		while($row = mysqli_fetch_assoc($result)) {
			$data []= $row;
		}
		return $data;
	}


}

?>
