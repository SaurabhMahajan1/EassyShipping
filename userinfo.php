<?php   

$con = mysqli_connect('localhost', 'root');


if($con){
	echo "connestion successful";
}else{
	echo "not connected";
}

mysqli_select_db($con, 'contactinfo');

$username = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = " insert into userinfo (username, email, subject, message) 
values ('$username','$email ',' $subject','$message')";

mysqli_query($con , $query);


header('location:index.php');

 ?>