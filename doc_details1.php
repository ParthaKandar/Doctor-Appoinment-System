<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
  		<li><form class="d-flex" method="post" action="doc_details1.php">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-success" type="submit">Search</button>
      </form></li>
	<li><a href="admin_managing_page.php">Home</a></li>
	<li><a href="javascript:void(0);">About</a></li>
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



<?php
$con = mysqli_connect('localhost','root','','doctor') OR die(mysqli_error());
if($con){
	//echo "connetced";
}
else{
	echo "not connected";
}

$search = $_POST['search'];

if(isset($_POST['submit'])){
$sql = mysqli_query($con,"select * from doc_application where name ='$search'");

?>


<center><table border =2 class="table-striped" style="margin-left: 100px; margin-right: 30px; margin-top: 50px;">
	<tr>
		<td colspan="10" align="center"><h1 style="color: red">Doctor Details</h1></td>
	</tr>
	<tr>
		<th>sl no.</th>
		<th> Id</th>
		<th>name</th>
		<th>mobile</th>
		<th>email</th>
		<th>address</th>
		<th>image</th>
		
		
	</tr>
	<?php
	$sl = 0;
	while($sql_fetch = mysqli_fetch_assoc($sql)){ ?>
		<tr>
			<td><?php echo $sl+1; $sl++ ?></td>
			<td><?php echo $sql_fetch['id']?></td>
			<td><?php echo $sql_fetch['name']?></td>
			<td><?php echo $sql_fetch['mobile']?></td>
			<td><?php echo $sql_fetch['email']?></td>
			<td><?php echo $sql_fetch['address']?></td>
			<td><center><?php echo "<img src='".$sql_fetch['image']."' height ='100' width='100' " ?></center></td>
			
			
		</tr>
	<?php 
}
else{
	echo "no data";
}
} ?>
</table></td>




</body>
</html>