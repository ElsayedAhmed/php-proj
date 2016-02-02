<?php
class User{
	var $name;
	var $id;
	var $password;
	var $email;
	var $type;
	var $block;
	var $tel;
	var $job;
	var $address;
	var $credit;
	var $interests;
	var $image;
	var $birthdate;

	private static $conn = Null;

	function __construct($id=-1) {
		if(self::$conn == Null) {
			self::$conn = mysqli_connect('localhost','root','iti','store');
		}

		if($id!=-1) {
			$query = "select * from users where id=$id limit 1";
			$result = mysqli_query(self::$conn,$query);
			$user = mysqli_fetch_assoc($result);
			$this->id = $user['id'];
			$this->name = $user['name'];
			$this->password = $user['password'];
			$this->image = $user['image'];
			$this->email = $user['email'];
			$this->tel = $user['tel'];
			$this->job = $user['job'];
			$this->address=$user['address'];
			$this->credit=$user['credit'];
			$this->interests=$user['interests'];
		}
	}
	function getUser($email) {
		$query = "select * from user where email='$email' limit 1";
		$result = mysqli_query(self::$conn,$query);
		$user = mysqli_fetch_assoc($result);
		$this->id = $user['id'];
		$this->name = $user['name'];
		$this->password = $user['password'];
		$this->image = $user['image'];
		$this->email = $user['email'];
		$this->tel = $user['tel'];
		$this->job = $user['job'];
		$this->address=$user['address'];
		$this->credit=$user['c_limit'];
		$this->interests=$user['interest'];
	}
	function getUserId($id) {
		$query = "select * from user where id='$id' limit 1";
		$result = mysqli_query(self::$conn,$query);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}

	function checkBeforeLogin($email,$password) {
		$query = "select id from user where email='$email' and password='$password'";
		$result = mysqli_query(self::$conn,$query);
		return (mysqli_num_rows($result)>0)?True:False ;
	}

	function insert() {
		
		$query = "insert into user(id,name,email,password,image,birthdate,job,tel,address,c_limit,interest,active) values(null,'$this->name','$this->email','$this->password','$this->image','$this->birthdate','$this->job','$this->tel','$this->address','$this->credit','$this->interests','$this->active')";
		$result  = mysqli_query(self::$conn,$query);
		
		return mysqli_insert_id(self::$conn);
		//echo $query;
	}
	function updateStatus($id) {
		echo "id = ".$id;
		$query = "update user set active='$this->active' where id=$id";
		$result  = mysqli_query(self::$conn,$query);
		echo $query;
		return mysqli_insert_id(self::$conn);
		
	}
	function updateAdmin($id) {
		echo "id = ".$id;
		$query = "update user set admin='$this->admin' where id=$id";
		$result  = mysqli_query(self::$conn,$query);
		echo $query;
		return mysqli_insert_id(self::$conn);
		
	}
	function updateName($id) {
		echo "id = ".$id;
		$query = "update user set name='$this->name' where id=$id";
		$result  = mysqli_query(self::$conn,$query);
		echo $query;
		return mysqli_insert_id(self::$conn);
		
	}
	function updateemail($id) {
		echo "id = ".$id;
		$query = "update user set email='$this->email' where id=$id";
		$result  = mysqli_query(self::$conn,$query);
		echo $query;
		return mysqli_insert_id(self::$conn);
		
	}
	function updatepassword($id) {
		echo "id = ".$id;
		$query = "update user set password='$this->password' where id=$id";
		$result  = mysqli_query(self::$conn,$query);
		echo $query;
		return mysqli_insert_id(self::$conn);
		
	}

function updatec_limit($id) {
		echo "id = ".$id;
		$query = "update user set c_limit='$this->c_limit' where id=$id";
		$result  = mysqli_query(self::$conn,$query);
		echo $query;
		return mysqli_insert_id(self::$conn);
		
	}
	
	function if_exist($email) {
		$query = "select id from user where email='$email'";
		$result = mysqli_query(self::$conn,$query);
		return (mysqli_num_rows($result)>0)?True:False;
	}
	function if_blocked($email) {
		$query = "select id from user where email='$email' and active='1'";
		$result = mysqli_query(self::$conn,$query);
		return (mysqli_num_rows($result)>0)?True:False;
	}
	function is_admin($id) {
		$query = "select * from user where id='$id' and admin=1";
		$result = mysqli_query(self::$conn,$query);
		return (mysqli_num_rows($result)>0)?True:False;
	}

	function users() {
		$query = "select * from user";
		$result = mysqli_query(self::$conn,$query);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}
	function getUsersOrdercount() {
		$query = "select U.name,U.id AS uid ,COUNT(U.id) AS counts from user U,orders O where  O.user_id=U.id GROUP BY U.name  ORDER BY COUNT(U.id) DESC";
		$result = mysqli_query(self::$conn,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}
	function getUsersOrder($id) {
		$query = "select U.* ,P.name AS Pname,P.image AS Pimage,O.*  from user U,product P,orders O where U.id = '$id' AND O.user_id=U.id AND P.id = O.product_id  ORDER BY U.c_limit";
		$result = mysqli_query(self::$conn,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}

	
}




?>