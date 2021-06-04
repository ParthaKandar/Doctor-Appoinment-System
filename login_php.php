<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con){
	echo "connection successfull";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con,'doctor');

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = " select * from doc_application where email = '$email' and password = '$password'";
	$query = mysqli_query($con,$sql);

	$row = mysqli_fetch_array($query);
	if($row['email'] == $email && $row['password'] == $password){
		echo "login successfull";
		  $_SESSION['email'] = $email;
		  header('location:dashboard.php');
	}else{
		echo " login failed";
		header('location:login.php');
	}
}
?>