<?php 

	$pickup = $_POST['pickup'];
	$drop = $_POST['drop'];
	$trucktype = $_POST['trucktype'];
	$mobile = $_POST['mobile'];
	$distance = $_POST['distance'];
	$date = $_POST['date'];
	$goodtype = $_POST['goods'];
	$weight = $_POST['weight'];

	$conn = new mysqli('localhost','root','','registration');
	if ($conn->connect_error){
		die('Connection Failed : '$conn->connect_error);
	}else{
		/*$stmt = $conn->prepare("insert into bookinginfo(pickup, drop, truck_type, mobile, date, distance, good_type, weight) values(?, ? ,?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssisisi", $pickup, $drop, $trucktype, $mobile, $date, $distance, $goodtype, $weight);*/
		$stmt= $conn->prepare('INSERT INTO `bookinginfo`( `pickup`, `drop`, `truck_type`, `mobile`, `date`, `distance`, `good_type`, `weight`) VALUES ('$pickup','$drop','$trucktype','$mobile','$date','v$distance','$goodtype','$weight')');
		$stmt->execute();
		$stmt->close();
		$conn->close();
	}


 ?>