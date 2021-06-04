<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
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
	</style>

	<script type="text/javascript">
		let namecheck = () =>{
			let name = document.getElementById('n1').value;
			let nameRegex = /^[A-Za-z]/;

			if(name ==''||name == null)
			{
				document.getElementById('n1').classList.add('is-invalid');
				document.getElementById('errorname').innerHTML = "Name Rrquired";
				document.getElementById('b1').disabled = true;
			}
			else if(name.length <= 3)
			{
				document.getElementById('n1').classList.add('is-invalid');
				document.getElementById('errorname').innerHTML = "Name length must be more than 3 characters";
				document.getElementById('b1').disabled = true;
			}
			else{
				if(nameRegex.test(name))
				{
					document.getElementById('n1').classList.remove('is-invalid');
					document.getElementById('errorname').innerHTML = "";
					document.getElementById('b1').disabled = false;
				}
				else
				{
					document.getElementById('n1').classList.add('is-invalid');
					document.getElementById('errorname').innerHTML = "Put only Characters";
					document.getElementById('b1').disabled = true;
				}

			}
		};

		let mobilecheck = () =>{
			let phone = document.getElementById('m1').value;
			if(phone == '' ||phone == null){
				document.getElementById('m1').classList.add('is-invalid');
				document.getElementById('errormobile').innerHTML = "Phone number required";
				document.getElementById('b1').disabled = true;
			}
			else{
				if(phone.length == 10){
					if(phone.substr(0,1) == '9' || phone.substr(0,1) == '8' || phone.substr(0,1) == '7' || phone.substr(0,1) == '6')
					{
						document.getElementById('m1').classList.remove('is-invalid');
						document.getElementById('errormobile').innerHTML ="";
						document.getElementById('b1').disabled = false;
					}
					else{
						document.getElementById('m1').classList.add('is-invalid');
						document.getElementById('errormobile').innerHTML = "the number doesn't start with 9,8,7,6 please check it carefully";
						document.getElementById('b1').disabled = true;
					}
				}
				else{
					document.getElementById('m1').classList.add('is-invalid');
					document.getElementById('errormobile').innerHTML = "phone no must contain 10 digits";
					document.getElementById('b1').disabled = true;
				}
			}
		};

		let emailcheck = () =>{
			let email = document.getElementById('e1').value;
			let emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; 
			if(email ==''||email == null){
				document.getElementById('e1').classList.add('is-invalid');
				document.getElementById('erroremail').innerHTML  = "Email required";
				document.getElementById('b1').disabled = true;
			}
			else{
				if(emailRegex.test(email)){
					document.getElementById('e1').classList.remove('is-invalid');
				document.getElementById('erroremail').innerHTML  = "";
				document.getElementById('b1').disabled = false;
				}
				else{
					document.getElementById('e1').classList.add('is-invalid');
				document.getElementById('erroremail').innerHTML  = "Email is not correct";
				document.getElementById('b1').disabled = true;
				}

			}
		};

		let passcheck = () =>{
			let pass = document.getElementById('p1').value;
			let passRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/;
			if(pass ==""|| pass==null){
				document.getElementById('p1').classList.add('is-invalid');
				document.getElementById('errorpass').innerHTML = "Password required";
				document.getElementById('b1').disabled = true;
			}
			else{
				if(passRegex.test(pass)){	
					document.getElementById('p1').classList.remove('is-invalid');
					document.getElementById('errorpass').innerHTML = "";
					document.getElementById('b1').disabled = false;
				}
				else{
					document.getElementById('p1').classList.add('is-invalid');
					document.getElementById('errorpass').innerHTML = "Password contains atleast <br><small><ul><li>one uppercase</li><li>one lowercase</li><li> one spical character</li><li>minimum 8 characters and maximum 15 characters</li></ul></small>";
					document.getElementById('b1').disabled = true;
				}

			}
		};

		let confirmpass = () =>{
			let pass1 = document.getElementById('p1').value;
			let pass2 = document.getElementById('cp1').value;
			if(pass2 =='' || pass2 ==null){
				document.getElementById('cp1').classList.add('is-invalid');
				document.getElementById('conpass').innerHTML = "confirm password required";
				document.getElementById('b1').disabled = true;
			}
			else{
				if(pass1 == pass2){
				document.getElementById('cp1').classList.remove('is-invalid');
				document.getElementById('conpass').innerHTML = "";
				document.getElementById('b1').disabled = false;
				}
				else{
				document.getElementById('cp1').classList.add('is-invalid');
				document.getElementById('conpass').innerHTML = "Password mismatch";
				document.getElementById('b1').disabled = true;
				}
			}
		};

		let togglepass = () =>{
			let pass1 = document.getElementById('p1');
    		let pass2 = document.getElementById('cp1');
    		let ch1   = document.getElementById('ck1');


		    if(ch1.checked){
		     pass1.type = pass2.type ='text';
		    }else{
		     pass1.type = pass2.type ='password'; 
		    }
		};

	</script>
</head>
<body>
<header>
  <nav>
	<a href="front_page.php">Home</a>
	<a href="javascript:void(0);">About</a>
	<a href="login.php">LogIn</a>
	<a href="javascript:void(0);">Contacts</a>
</nav>
</header>
<div class="container">
	<header>
		<h1 class="modal-header">Sign Up</h1>
	</header>
	<form method="post" action="doc_reg_php.php" enctype="multipart/form-data">
		<div class="form-group">
			<label>Name : </label>
			<input type="text" name="name" id="n1" required class="form-control" onkeyup="namecheck()" >
			<section id="errorname" class="text-danger"></section>
		</div>
		<div class="form-group">
			<label>Mobile No :</label>
			<input type="number" name="mobile" id="m1" required class="form-control" onkeyup="mobilecheck()">
			<section id="errormobile" class="text-danger"></section>
		</div>
		<div class="form-group">
			<label>Email :</label>
			<input type="email" name="email" id="e1" required class="form-control" onkeyup="emailcheck()">
			<section id="erroremail" class="text-danger"></section>
		</div>
		<div class="form-group">
			<label>Address :</label><br>
			<input type="text" name="address" id="a1" required class="form-control">
		</div>
		<div class="form-group">
			<label for="file">Image:</label>
			<input type="file" name="docimage" id="doc1" required class="form-control">
		</div>
		<div class="form-group">
			<label>Password :</label>
			<input type="password" name="password" id="p1" required class="form-control" onkeyup="passcheck()">
			<section id="errorpass" class="text-danger"></section>			
		</div>
		<div class="form-group">
			<label>Confirm Password :</label>
			<input type="password" name="confirmpassword" id="cp1" required class="form-control" onkeyup="confirmpass()">
			<input type="checkbox" name="checkpassword" id="ck1" onchange="togglepass()">Show/Hide
			<section id="conpass" class="text-danger"></section>
		</div>
		

		<button class="btn btn-success btn-md" id="b1">Create New Account</button>
	</form>
</div>


</body>
</html>