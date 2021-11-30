	<div class="container mt-4">
		<div class="circletag">
    		<img id="circleid" src="images/profileimg.png">
		</div>
	</div>

	<?php 
		/*echo $_SESSION['current_user_id'];
		echo $_SESSION['current_user_name'];
		echo $_SESSION['current_user_password'];
		echo $_SESSION['current_user_email'];
		echo $_SESSION['current_user_contact'];
		echo $_SESSION['current_user_blood_group'];
		echo $_SESSION['current_user_gender'];
		echo $_SESSION['current_user_birthday'];
		echo $_SESSION['current_user_status'];
		echo $_SESSION['current_user_address'];*/

	 ?>
	<div class="container mt-4">
		<form method="post" class="formstyle3">
		 		<div class="form-group">
				    <label for="signup_name"><b>Name</b></label>
				    <input type="text" name="signup_name" class="form-control" id="signup_name" value="<?php echo $_SESSION['current_user_name']; ?>">
				  </div>	
				  <div class="form-group">
				    <label for="exampleInputEmail1"><b>Email</b></label>
				    <input type="email" name="signup_email" class="form-control" id="exampleInputEmail1" value="<?php echo $_SESSION['current_user_email']; ?>">
				  </div>
				 
				  <div class="form-group">
				    <label for="exampleInputPassword1"><b>Password</b></label>
				    <input type="password" name="signup_password" class="form-control" id="exampleInputPassword1" value=" <?php echo $_SESSION['current_user_password']; ?>">
				 
				  </div>
				   <div class="form-group">
				    <label for="signup_mobile_no"><b>Contact no.</b></label>
				    <input type="text" name="signup_mobile_no" class="form-control" id="signup_mobile_no" value="<?php echo $_SESSION['current_user_contact']; ?>">
				  </div>
				  <div class="form-group">
				  	<label for="signup_blood_group"><b>Blood Group :</b></label>
					<select name="signup_blood_group" id="signup_blood_group">
					  <option value="<?php echo $_SESSION['current_user_blood_group']; ?>"><?php echo $_SESSION['current_user_blood_group']; ?></option>
					</select>
				  </div>
				  <div class="form-group">
				  	<label for="signup_gender"><b>Gender :</b></label>
					<select name="signup_gender" id="signup_gender">
					  <option value="<?php echo $_SESSION['current_user_gender']; ?>"><?php echo $_SESSION['current_user_gender']; ?></option>
					</select>
				  </div>
				  <div class="form-group">
				  	<label for="signup_birthday"><b>Date of Birth :</b></label>
				  	<input type="text" name="signup_birthday" id="signup_birthday" value="<?php echo $_SESSION['current_user_birthday']; ?>">
				  </div>
				  <div class="form-group">
				  	<label for="signup_donating_status"><b>Donating Status :</b></label>
				  	<select name="signup_donating_status" id="signup_donating_status">
				  		<option value="<?php echo $_SESSION['current_user_status']; ?>"><?php echo $_SESSION['current_user_status']; ?></option>
				  	</select>
				  </div>
				  <div class="form-group">
				    <label for="signup_address"><b>Current address</b></label>
				    <input type="text" name="signup_address" class="form-control" id="signup_address" value="<?php echo $_SESSION['current_user_address']; ?>">
				  </div>
				  <div align="right"><button class="btn btn-secondary"><a href="home.php?source=editprofile">Edit</a></button>  
		</form>
		<!-- <div class="form-group">
			<input type="submit" class="btn btn-primary btn-block" value="Edit"><a href="home.php?source=editprofile"></a>	
		</div> -->
		</div>
	</div>