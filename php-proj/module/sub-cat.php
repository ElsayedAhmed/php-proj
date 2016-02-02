<?php
class SubCategory{
	var $id;
	var $cat_id;
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
		$query = "select * from sub_category where id=$id limit 1";
		$result = mysqli_query(self::$conn,$query);
		$sub_category = mysqli_fetch_assoc($result);
		$this->id = $sub_category['id'];
		$this->cat_id = $sub_category['cat_id'];
		$this->name = $sub_category['name'];
	}

	function insert() {
		$query = "insert into sub_category (name,cat_id) values('$this->name','$this->cat_id')";
		$result  = mysqli_query(self::$conn,$query);
		echo "<br/> cat_id= ".$this->cat_id."   , effected rows = ".$result;
		return mysqli_insert_id(self::$conn);
	}

	function delete($id) {
		$query = "delete from sub_category where id = $id";
		$result  = mysqli_query(self::$conn,$query);
		//echo $this->name."effected rows = ".$result;
		return mysqli_insert_id(self::$conn);
	}
	function updateSubCat($id) {
		$query = "update sub_category set name = '$this->name' where id = $id";
		$result  = mysqli_query(self::$conn,$query);
		//echo $this->name."effected rows = ".$result;
		return mysqli_insert_id(self::$conn);
	}
	function updateCatId($id) {
		$query = "update sub_category set cat_id = '$this->cat_id' where id = $id";
		$result  = mysqli_query(self::$conn,$query);
		//echo $this->name."effected rows = ".$result;
		return mysqli_insert_id(self::$conn);
	}
	function sub_category() {
		$query = "select S.id,S.name,C.name as category ,count(P.id)  as Products from category C , sub_category S, product P WHERE C.id = S.cat_id and P.sub_cat_id = S.id group by S.id,S.name,C.name ;";
		$result = mysqli_query(self::$conn,$query);
		$data = [];
 
		while($row = mysqli_fetch_assoc($result)) {
			$data []= $row;
		}
		return $data;
	}
	function sub_by_category($id) {
		$query = "select * from sub_category WHERE cat_id =$id;";
		$result = mysqli_query(self::$conn,$query);
		$data = [];
 
		while($row = mysqli_fetch_assoc($result)) {
			$data []= $row;
		}
		return $data;
	}
	function emptysub_category() {
		$query = "select S.*,C.name as category from category C , sub_category S where C.id = S.cat_id  and S.id not in (select sub_cat_id from product) order by id";
		$result = mysqli_query(self::$conn,$query);
		$data = [];
 
		while($row = mysqli_fetch_assoc($result)) {
			$data []= $row;
		}
		return $data;
	}
	function all_sub_category() {
		$query = "select S.*,C.name as category from category C , sub_category S where C.id = S.cat_id";
		$result = mysqli_query(self::$conn,$query);
		$data = [];
 
		while($row = mysqli_fetch_assoc($result)) {
			$data []= $row;
		}
		return $data;
	}


}

?>
