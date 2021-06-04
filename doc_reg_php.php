<?php
$con = mysqli_connect('localhost','root','','doctor') or die(mysqli_error());

if($con){
	echo "connection successfull";
}
else{
	echo "connection not successfull";
}

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address']; 
$docimage = $_FILES['docimage']['name'];
$password = $_POST['password'];

$new_image = rand(111,999).'_'.time().'_'.$docimage;
	$upload_path = 'upload/'.$new_image;
	$source_path = $_FILES['docimage']['tmp_name'];
 
if(move_uploaded_file($source_path, $upload_path)){

		$user_insert = mysqli_query($con,"INSERT INTO doc_application VALUES ('','$name','$mobile','$email','$address','$upload_path','$password')") or die(mysqli_error($con));

		if($user_insert){
			header('location:login.php');
			echo "data inserted successfully";
		}
		else {
			echo "not inserted";
		}
	}

?>