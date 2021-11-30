<?php 
	if (isset($_POST['signup_submit'])) {
		$name = $_POST['signup_name'];
		$email = $_POST['signup_email'];
		$password =$_POST['signup_password'];
		$contact =$_POST['signup_mobile_no'];
		$blood_group =$_POST['signup_blood_group'];
		$gender =$_POST['signup_gender'];
		$birthday = $_POST['signup_birthday'];
		$status =$_POST['signup_donating_status'];
		$address =$_POST['signup_address'];

		if (empty($name)||empty($email)||empty($password)||empty($contact)||empty($blood_group)||empty($status)||empty($address)) {

			echo "'*''-marked content must be filled";
		}
		elseif (strlen($password)<8) {

			echo "Password must be atleast of 8 characters";
		}
		else{

			$query = "INSERT INTO donors(d_name,d_email,d_password,d_contact,d_b_g,	d_gender,d_birthday,d_status,d_address) VALUES('{$name}','{$email}','{$password}','{$contact}','{$blood_group}','{$gender}','{$birthday}','{$status}','{$address}')";

			$registration_query = mysqli_query($connection,$query);

		}
	}
 ?>