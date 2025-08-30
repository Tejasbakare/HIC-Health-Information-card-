<?php
include("INSERT.php");
include("connection.php");
?>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/insert.css">
	<link rel="stylesheet" type="text/css" href="css/insert.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style>
		body {
			background-image: url('green.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
		}

		form {
			background-image: url('frombg.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
			color:white;
			border-radius: 25px;
		   
			font-size:20px;
			width: 70%;
			
		}
		section.a{
			margin-left:31%;
		}
		
	</style>
</head>
</head>

<body>
	<br><br>
	
	<section class=" a container my-2  p-3">
		
		<form name="myForm" onsubmit="return validpassword() || validaadhar()" class="row g-3" method="post">
			<br><br>
			<div id="fname" class="container my-2 ">
				<br>
				<label class="col-md-4"> First Name : </label>
				<input type="text" class="fname" required name="fname" value="" />
				<br>
			</div>
			<br>
			<div id="mname" class=" container  my-2 ">
				<label class="col-md-4"> Middel Name : </label>
				<input type="text" class="mname" name="mname" /><b><span class="formerror1"> </span></b>
				<br>
			</div>
			<div id="lname" class="container my-2 ">
				<label class="col-md-4"> Last Name : </label>
				<input type="text" class="lname" name="lname" /><b><span class="formerror2"> </span></b>
				<br>
			</div>
			<hr>
			<section class="container my-2 col-12">
				<div class="address">
					<label class="col-md-4"> Address : </label><br>
					<input class="form-control" type="text" id="address" name="address"
						placeholder="Enter your address"> </textarea><span class="formerror"> </span>
				</div>
			</section>
			<!---->
			<section class="container my-2 col-md-4">
				<div class="phone_self" id="phone_self">
					<label>Phone No (self): </label>
					<input type="tel" name="phone_self" />
				</div>
			</section>
			<section class="container my-2 col-md-4">
				<div class="relatives_phone" id="relatives_phone">
					<label >Phone No (relatives) : </label>
					<input type="tel" name="relatives_phone" />
				</div>

			</section>

			<!---->


			<!---->

			<section class="container my-2">
				<div class="email" id="eamil">
					<label class="col-md-4"> Enter email: </label>
					<input class="form-control" type="email" name="email">
				</div>
			</section>

			<section class="container my-2 ">
				<label class="col-md-4" for="exampleInputAadharCard">Enter Aadhar No: </label>
				<input type="text" class="form-control" id="exampleInputAadharCard"
					placeholder="Enter Your Aadhar Card No." name="exampleInputAadharCard"> <span class="cssaadhar"
					id="aadharmessage"> </span>
				<small id="message" class="form-text text-muted"></small>

				<button type="button" class="btn btn-secondary" value="verify" onclick="verify()">Verify</button>

			</section>
			<script>
				// multiplication table
				const d = [
					[0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
					[1, 2, 3, 4, 0, 6, 7, 8, 9, 5],
					[2, 3, 4, 0, 1, 7, 8, 9, 5, 6],
					[3, 4, 0, 1, 2, 8, 9, 5, 6, 7],
					[4, 0, 1, 2, 3, 9, 5, 6, 7, 8],
					[5, 9, 8, 7, 6, 0, 4, 3, 2, 1],
					[6, 5, 9, 8, 7, 1, 0, 4, 3, 2],
					[7, 6, 5, 9, 8, 2, 1, 0, 4, 3],
					[8, 7, 6, 5, 9, 3, 2, 1, 0, 4],
					[9, 8, 7, 6, 5, 4, 3, 2, 1, 0]
				]
				const p = [
					[0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
					[1, 5, 7, 6, 2, 8, 3, 0, 9, 4],
					[5, 8, 0, 3, 7, 9, 6, 1, 4, 2],
					[8, 9, 1, 6, 0, 4, 3, 5, 2, 7],
					[9, 4, 5, 3, 1, 2, 6, 8, 7, 0],
					[4, 2, 8, 6, 5, 7, 3, 9, 0, 1],
					[2, 7, 9, 3, 8, 0, 6, 4, 1, 5],
					[7, 0, 4, 6, 9, 1, 3, 2, 5, 8]
				]

				function validate(aadharNumber) {
					let c = 0
					let invertedArray = aadharNumber.split('').map(Number).reverse()

					invertedArray.forEach((val, i) => {
						c = d[c][p[(i % 8)][val]]
					})

					return (c === 0)
				}

				function verify() {
					var message = document.getElementById("message");
					var aadharNo = document.getElementById("exampleInputAadharCard").value;

					if (validate(aadharNo)) {
						message.innerHTML = 'Your aadhar card no. valid';
					} else {
						message.innerHTML = 'Your aadhar card no. not valid';
					}
				}

			</script>
			<br><br>

			<section class="container my-2 ">
				<label class="col-md-4" for="Blood group">Choose Blood Group:</label>

				<select name="blood" id="Blood">
					<option value=" "> </option>
					<option value="A+"> A+</option>
					<option value="A-"> A-</option>
					<option value="B+"> B+</option>
					<option value="B-"> B-</option>
					<option value="O+"> O+</option>
					<option value="O-"> O-</option>
					<option value="AB+"> AB+</option>
					<option value="AB-"> AB-</option>

				</select>
			</section>

			<section class="container my-2">
				<div class="birthdate" id="birthdate">
					<label class="col-md-4">Birth Date :</label>
					<input type="date" name="birthdate" placeholder="Enter your Birth Date" />
				</div>
			</section>

			<section class="container my-2 ">
				<div class="weight" id="age">
					<label class="col-md-4"> Weight : </label>
					<input type="number" name="weight" placeholder="Enter your weight" />
				</div>
			</section>


			<section class="container my-2 col-12 ">
				<div class="algiracial_medicine">
					<label class="col-md-4"> Algiracial Medicine : </label><br>
					<input class="form-control" type="text" id="algiracial_medicine" name="algiracial_medicine"
						placeholder="Enter allergy"> </textarea><span class="formerror"> </span>
				</div>
			</section>


			<section class="container my-2 col-12">
				<div class="operations">
					<label class="col-md-4"> Operation : </label><br>
					<input class="form-control" type="text" id="operations" name="operations"
						placeholder="Any operation happen in past"> </textarea><span class="formerror"> </span>
				</div>
			</section>

			<section class="container my-2 col-md-4">
				<div class="password">
					<label > Password </label>
					<input type="password" name="password" value="" id="password"
						placeholder="Enter your password" /><span class="spassword" id="passmessage"> </span>
				</div>
			</section>

			<section class="container my-2 col-md-4">
				<div class="cpassword">
					<label > Conform Password : </label>
					<input type="password" name="cpassword" id="cpassword" value="" placeholder="Enter your password" />
					<span class="scpassword" id="passcmessage"> </span>
				</div>
			</section>



			<section class="container my-2 ">
				<input type="submit" class="button btn btn-secondary w-40" value="Submit" name="Submit" />
				<input type="Reset" class="button btn btn-secondary w-40" value="Reset" name="Reset" />
			</section>
			<br><br>
		</form>
	</h6>
	</section>
	<script>

		//aadhar
		function validaadhar() {

			var aadhar = document.getElementById("exampleInputAadharCard").value;



			if (aadhar.length < 12 || aadhar.length > 12) {

				var aadhar = true;
				document.getElementById("aadharmessage").innerHTML = "Aadhar number should be in 12 digits";
				return false;
			}
		}

		//password
		function validpassword() {

			var password = document.getElementById("password").value;
			var cpassword = document.getElementById("cpassword").value;


			if (password.length < 5) {
				var password = true;
				document.getElementById("passmessage").innerHTML = "password length should be greater than 5 digits";
				return false;
			}



			if (cpassword.length < 5) {
				document.getElementById("passcmessage").innerHTML = "password sholud be same";
				return false;
			}

			if (password != cpassword) {

				document.getElementById("passcmessage").innerHTML = "password sholud be same";
				return false;
			}
		}


	</script>

	<!--<hr>
	<center>
		<footer>
			<p>&copy; wwwtejas_onkar | health_info@gmail.com</p>
		</footer>

		<section class="icons">
			<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
					class="bi bi-instagram" viewBox="0 0 16 16">
					<path
						d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
				</svg> </a>
			<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
					class="bi bi-facebook" viewBox="0 0 16 16">
					<path
						d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
				</svg> </a>
		</section>
	</center>
	-->

</html>
