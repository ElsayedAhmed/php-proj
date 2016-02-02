<?php
class Product{
	var $id;
	var $name;
	var $sub_cat_id;
	var $image;
	var $price;
	var $color;
	var $size;
	var $quantity;
	var $add_date;
	var $status;

	private static $conn = Null;

	function __construct($id=-1) {
		if(self::$conn == Null) {
			self::$conn = mysqli_connect('localhost','root','iti','store');
		}

		if($id!=-1) {
			$query = "select * from products where id=$id limit 1";
			$result = mysqli_query(self::$conn,$query);
			$product = mysqli_fetch_assoc($result);
			$this->id = $product['id'];
			$this->name = $product['name'];
			/*$this->$sub_cat_id = $product['$sub_cat_id'];
			$this->image = $product['image'];
			$this->price = $product['price'];
			$this->color = $product['color'];
			$this->size = $product['size'];
			$this->quantity=$product['quantity'];
			$this->add_date=$product['add_date'];
			$this->status=$product['status'];*/
		}
	}
	function product($name,$id) {
		$query = "select * from product where name='$name' and sub_cat_id='$id' limit 1";
		$result = mysqli_query(self::$conn,$query);
		return (mysqli_num_rows($result)>0)?True:False ;
		/*$this->id = $product['id'];
		$this->name = $product['name'];
		/*$this->$sub_cat_id = $product['$sub_cat_id'];
		$this->image = $product['image'];
		$this->price = $product['price'];
		$this->color = $product['color'];
		$this->size = $product['size'];
		$this->quantity=$product['quantity'];
		$this->add_date=$product['add_date'];
		$this->status=$product['status'];*/
	}

	function insert() {
		$query = "insert into product (id,sub_cat_id, name, image, price, color, size, quantity,add_date,status) values(null,'$this->sub_cat_id','$this->name','$this->image','$this->price','$this->color','$this->size','$this->quantity','$this->add_date','$this->status')";
		$result  = mysqli_query(self::$conn,$query);
		
		return mysqli_insert_id(self::$conn);
		//echo $query;
	}
	function delete($id) {
		echo "id = ".$id;
		$query = "delete from product where id=$id";
		$result  = mysqli_query(self::$conn,$query);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
		
	}
	function update($id) {
		echo "id = ".$id;
		$query = "update product set sub_cat_id='$this->sub_cat_id',name='$this->name', image='$this->image', price='$this->price',color ='$this->color', size='$this->size', quantity='$this->quantity',add_date='$this->add_date',status='$this->status' where id=$id";
		$result  = mysqli_query(self::$conn,$query);
		echo $query;
		return mysqli_insert_id(self::$conn);
		
	}
	function updateStatus($id) {
		echo "id = ".$id;
		$query = "update product set status='$this->status' where id=$id";
		$result  = mysqli_query(self::$conn,$query);
		echo $query;
		return mysqli_insert_id(self::$conn);
		
	}
	function products() {
		$query = "select P.*,S.name AS sub ,C.name AS cat  from product P , sub_category S , category C WHERE P.sub_cat_id = S.id AND S.cat_id=C.id";
		$result = mysqli_query(self::$conn,$query);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}
	function get_product($id) {
		$query = "select P.*,S.name AS sub ,C.name AS cat  from product P , sub_category S , category C WHERE P.id=$id AND P.sub_cat_id = S.id AND S.cat_id=C.id";
		$result = mysqli_query(self::$conn,$query);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}
	function product_by_id($id) {
		$query = "select * from product where id=$id";
		$result = mysqli_query(self::$conn,$query);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}

	
	/*function if_exist($image) {
		$query = "select id from product where image='$image'";
		$result = mysqli_query(self::$conn,$query);
		return (mysqli_num_rows($result)>0)?True:False;
	}
	function is_admin($id) {
		$query = "select * from product where id='$id' and admin=1";
		$result = mysqli_query(self::$conn,$query);
		return (mysqli_num_rows($result)>0)?True:False;
	}*/

	

	
}




?>