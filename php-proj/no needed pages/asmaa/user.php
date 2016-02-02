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

	function checkBeforeLogin($email,$password) {
		$query = "select id from user where email='$email' and password='$password'";
		$result = mysqli_query(self::$conn,$query);
		return (mysqli_num_rows($result)>0)?True:False ;
	}

	function insert() {
		
		$query = "insert into user(id,name,email,password,image,birthdate,job,tel,address,c_limit,interest) values(null,'$this->name','$this->email','$this->password','$this->image','$this->birthdate','$this->job','$this->tel','$this->address','$this->credit','$this->interests')";
		$result  = mysqli_query(self::$conn,$query);
		
		return mysqli_insert_id(self::$conn);
		//echo $query;
	}

	
	function if_exist($email) {
		$query = "select id from user where email='$email'";
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

	
}




?>