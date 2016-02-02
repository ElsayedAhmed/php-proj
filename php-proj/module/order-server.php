<?php	
	global $conn;
	$query = "select U.* ,P.name AS Pname,P.image AS Pimage,P.quantity,P.price,O.*  from user U,product P,orders O where U.id = '$id' AND O.user_id=U.id AND P.id = O.product_id  ORDER BY U.c_limit";
	$result = mysqli_query($conn,$query);
	$data = [];
	while($row = mysqli_fetch_assoc($result)) 
	{
		$data[] = $row;
	}
	return $data;
?>