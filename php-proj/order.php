<?php
	
	var $id;
	var $user_id;
	var $product_id;
	var $quantity;
	var $order_date;
	var $status;
	class order{
		private static $conn = Null;
		public function __construct(){
			if(self::$conn == Null) {
			self::$conn = mysqli_connect('localhost','root','iti','store');
		} 
		function insert() {																	
			$query = "insert into orders(id,user_id,product_id,quantity,order_date,status) values(null,'$this->user_id','$this->quantity','$this->order_date','$this->status')";
			$result  = mysqli_query(self::$conn,$query);
			
			return mysqli_insert_id(self::$conn);

		}
	}
?>