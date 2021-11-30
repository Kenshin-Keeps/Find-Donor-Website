<?php include 'db.php'; ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Donor-Find Blood Instantly</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/formstyle.css">
</head>

<body>
	<div class="container-fluid bg">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form class="formstyle" method="post">
					<div align="center"><b>
							<h4>Login Form</h4>
						</b></div>
					<hr class="my-4">

					<!-- LOGIN QUERY  -->

					<?php
					if (isset($_POST['login_submit'])) {
						$email = $_POST['login_email'];
						$password = $_POST['login_password'];

						$email = mysqli_real_escape_string($connection, $email);
						$password = mysqli_real_escape_string($connection, $password);

						if (empty($email) || empty($password)) {
							echo "Email/Password is empty.";
							# code...
						} else {

							/*$query = "SELECT * FROM donors WHERE d_email == '{$email}' AND_password == '{$password}'";
								$check_login_email_password_query = mysqli_query($connection,$query);
			*/
							$query = "SELECT * FROM donors WHERE d_email LIKE '$email' AND d_password LIKE '$password'";

							$check_login_email_password_query = mysqli_query($connection, $query);

							if ($check_login_email_password_query) {
								# code...
								while ($row = mysqli_fetch_assoc($check_login_email_password_query)) {

									# code...
									if ($row['d_email'] === $email && $row['d_password'] === $password) {
										# code...

										/*SET THE LOCATION HERE 
											WHERE TO GO AFTER LOGIN*/
										$_SESSION['current_user_id'] = $row['d_id'];
										$_SESSION['current_user_name'] = $row['d_name'];
										$_SESSION['current_user_password'] = $row['d_password'];
										$_SESSION['current_user_email'] = $row['d_email'];
										$_SESSION['current_user_contact'] = $row['d_contact'];
										$_SESSION['current_user_blood_group'] = $row['d_b_g'];
										$_SESSION['current_user_gender'] = $row['d_gender'];
										$_SESSION['current_user_birthday'] = $row['d_birthday'];
										$_SESSION['current_user_status'] = $row['d_status'];
										$_SESSION['current_user_address'] = $row['d_address'];

										header("Location:home.php");
									} else {
										echo "Email/Password is incorrect.";
									}
								}
							} else {
								echo "Email/Password is incorrect.";
							}
						}
					}

					?>


					<div class="form-group">
						<label for="exampleInputEmail1"><b>Email</b></label>
						<input type="email" name="login_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1"><b>Password</b></label>
						<input type="password" name="login_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Remember Me</label>
					</div>
					<div class="form-group">
						<input type="submit" name="login_submit" class="btn btn-success btn-block" value="Log in">
					</div>
					<div>
						<p class="signup_text">Don't have an account?<a href="signup.php"> <b>Sign Up</b></a></p>
					</div>
				</form>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>