<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<style type="text/css">
		
		
		ul.menu{
			padding: 20px;
			background-color: orange;
			text-align: right;
			margin: 0;
			font-family: montserrat;
		}
		ul.menu li{
			list-style-type: none;
			display: inline-block;
			margin-left: 10px;
			position: relative;
		}
		ul.menu li>a{
			color: #fff;
			text-decoration: none;
		}
		ul.menu li>a:hover{
			transition: all 0.4s ease-in-out;
			padding: 20px 14px;
			background-color: #B67C0A;
			color: #fff;
		}
		ul.dropdown{
			max-width: 100px;
			position: absolute;
			background-color: orange;
			padding-left: 0px;
			top: 30px;
			left: 30px;
			display: none;
		}
		ul.dropdown li{
			display: block;
			margin:20px;
		}
		ul.menu li:hover ul.dropdown{
			display: block;

		}
		div{
			margin:0;
			padding: 0;
			box-sizing: border-box;
			list-style:none;
			text-decoration: none;
		

		}
		.wrapper{
			display: flex;
			position: relative;

		}
		.wrapper .sidebar{
			position: fixed;
			width: 250px;
			height: 100%;
			background-color:#FBBF2F;
			padding: 30px 0;
			margin-top: -70px;
		}
		.wrapper .sidebar h2{
			color: #fff;
			text-decoration: uppercase;
			text-align: center;
			margin-bottom: 30px;
		}
		.wrapper .sidebar ul li{
			padding: 15px;
			border-bottom: 1px solid rgba(0,0,0,0.05);
			border-top: 1px solid rgba(225,225,225,0.05);
			list-style-type: none;
		}
		.wrapper .sidebar ul li a{
			color: #fff;
			display: block;
			text-decoration: none;
		}
		.wrapper .sidebar ul li:hover a{
			color: #fff;
			background-color: #DC9F09;
			padding: 15px;
			transition: all 0.4s ease-in-out;
		}
		.wrapper .sidebar ul li:hover ul.dropdown{
			display: block;
		}
		
				
	</style>
</head>
<body>
<header>
  <nav>
  	<ul class="menu">
	<li><a href="dashboard.php">Home</a></li>
	<li><a href="about_us.php">About</a></li>
	<li><a href="#"><?php echo $_SESSION['email'] ?>&#9662;</a>
	<ul class="dropdown">
		<li><a href="javascript:void(0);">Setting</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	</li>
	<li><a href="javascript:void(0);">Contacts</a></li>
</ul>
</nav>
</header>




<script type="text/javascript">alert("welcome") </script><br>

<h2 style="background-color: purple; box-shadow:10px 10px 10px grey; padding: 12px 14px;  color: #fff;">Welcome to Doctor Appoinment System </h2><br>

<?php

$con = mysqli_connect('localhost','root','','doctor') or die(mysqli_error());

if($con){
	//echo "connection successfull";
}
else{
	echo "connection not successfull";
}
$insert = "SELECT COUNT(id) as 'Total doctor' from doc_application";
	$query = mysqli_query($con,$insert) or die(mysqli_error($con));
	while($sql_fetch = mysqli_fetch_assoc($query)){
	 ?>

	 <div class="row justify-content-center container" style="margin-top: 80px;" >
                    <div class="col-lg-4 col-md-12"  ><a href="doc_details.php">
                        <div class="white-box analytics-info" style="background-color: #ccc; height:150px;">
                            <h3 class="box-title" align="center">Total Doctor</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <h1 style="margin-left: 60px;"><li class="ms-auto"><span class="badge badge-primary badge-pill"><?php echo $sql_fetch['Total doctor'] ?></span></li></h1>
                            </ul>
                        </div>
                    <?php } ?>
                    </a></div>




</body>
</html>