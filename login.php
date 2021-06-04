<!DOCTYPE html>
<html>
<head>
	<title>LogIn</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<style type="text/css">
		nav{
			background-color: orange;
			padding:20px;
			text-align: right;
		}
		nav>a{
			margin-left: 10px;
			text-decoration: none;
			color: #fff;
		}
		nav>a:hover{
			background-color: #B67C0A;
			color: #fff;
			padding: 20px 14px;
			transition: all 0.4s ease-in-out;
		}
		body{
			margin-right: 0;
			padding: 0;
			font-family: montserrat;
			background:#fff;
			height: 100vh;
			overflow:hidden;
		}
		.center{
			position: absolute;
			top: 50%;
			left:50%;
			transform: translate(-50%, -50%);
			width: 400px;
			background: #E1DFDB;
			border-radius: 0px;
		}
		.center h1{
			text-align: center;
			padding: 0 0 15px 0;
			border-bottom: 1px solid silver;
		}
		.center form{
			padding: 0 80px;
			box-sizing: border-box;
			padding-bottom: 20px;
		}
		

	</style>

	<script type="text/javascript">
		let checkuser = () =>{
			let username = document.getElementById('n1').value;
			let userRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if(username == ''|| username == null)
			{
				document.getElementById('n1').classList.add('is-invalid');
				document.getElementById('erroruser').innerHTML = "UserName Required";
				document.getElementById('b1').disabled = true;
			}
			else
			{
				if(userRegex.test(username))
				{
					document.getElementById('n1').classList.remove('is-invalid');
					document.getElementById('erroruser').innerHTML = "";
					document.getElementById('b1').disabled = false;
				}
				else
				{
					document.getElementById('n1').classList.add('is-invalid');
					document.getElementById('erroruser').innerHTML = " use valid username";
					document.getElementById('b1').disabled = true;
				}
			}
		};

		let checkpass = () =>{
			let pass = document.getElementById('p1').value;
			let passRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/;

			if(pass == ''||pass == null)
			{
				document.getElementById('p1').classList.add('is-invalid');
				document.getElementById('errorpass').innerHTML = "Password required";
				document.getElementById('b1').disabled = true;
			}
			else
			{
				if(passRegex.test(pass))
				{
					document.getElementById('p1').classList.remove('is-invalid');
					document.getElementById('errorpass').innerHTML = "";
					document.getElementById('b1').disabled = false;
				}
				else
				{
					document.getElementById('p1').classList.add('is-invalid');
					document.getElementById('errorpass').innerHTML = "Password contains atleast <br><small><ul><li>one uppercase</li><li>one lowercase</li><li> one spical character</li><li>minimum 8 characters and maximum 15 characters</li></ul</small>";
					document.getElementById('b1').disabled = true;
				}
			}
		};
	</script>
</head>
<body>
<header>
  <nav>
	<a href="front_page.php">Home</a>
	<a href="javascript:void(0);">About</a>
	<a href="login.php">Registration</a>
	<a href="javascript:void(0);">Contacts</a>
</nav>
</header>

	<div class="center">
	<h1 style="font-size: 25px; padding-top: 30px;padding-bottom: 30px; background-color: orange;"><b>Doctor Appoinment System</b></h1>
	<form method="post" action="login_php.php">
	<div class="txt_field">
		<label>UserName </label>
		<input type="text" name="email" id="n1" required class="form-control" onkeyup="checkuser()">
		<section id="erroruser" class="text-danger"></section>
		
		
	</div>
	<div class="txt_field">
		<label>Password </label>
		<input type="password" name="password" id="p1" required class="form-control" onkeyup="checkpass()">
		<section id="errorpass" class="text-danger"></section>		
		
	</div><br>
	<center><button class="btn btn-success btn-sm form-control" id="b1" name="submit">LogIn</button></center>
	<div class="pass">Forgot Password ?</div>

	
	<div class="signup_link">
		Not a member ?<a href="doc_reg.php">Sign up </a>
	</div>
</form>
</div>
</body>
</html>