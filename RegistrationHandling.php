

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>




	<h1>Registration File Handling</h1>



		<?php

		$firstName = $lastName = $gender = $emailId = $userNameId =$ =$password =$Recoveryemail"";
		$firstNameErr = $lastNameErr =$gender = $emailIdErr = $UserNameIdErr = $passwordErr =$RecoveryemailErr "";

		if($_SERVER['REQUEST_METHOD'] == "POST") {

			if(empty($_POST['fname'])) {
				$firstNameErr = "Please fill up the firstname";
			}
			else {
				$firstName = $_POST['fname'];
			}

			if(empty($_POST['lname'])) {
				$lastNameErr = "Please fill up the lastname";
			}
			else {

				$lastName = trim($_POST['lname']);
				$lastName = htmlspecialchars($_POST['lname']);
			if(empty($_POST['gender'])) {
				$gender = "Please fill up the gender";
			}
			else {
				$firstName = $_POST['gender'];
			}
			if(empty($_POST['emailId'])) {
				$emailIdErr = "Please fill up the Email";
			}
			else {
				$firstName = $_POST['emailId'];
			}
			if(empty($_POST['UNameId'])) {
				$UserNameIdErr = "Please fill up the Username";
			}
			else {
				$firstName = $_POST['UNameId'];
			}
			if(empty($_POST['pass'])) {
				$passwordErr = "Please Enter password";
			}
		    else {
				$firstName = $_POST['pass'];
			}
			if(empty($_POST['Remail'])) {
				$firstNameErr = "Please recover your mail";
			}
			else {
				$RecoveryemailErr = $_POST['Remail'];
			}

			$f= fopen("data.txt", "a");
			fwrite($f, $firstName. "" .$lastName. "" .$gender."".$emailId."".userNameId."".password."".Recoveryemail.);



			}


		?>

	

	<form>

		<fieldset>
		<legend>Basic Information</legend>

		
		<label for="firstName">First Name:</label>
		<input type="text" name="fname" id="firstName">
		<br>


		<label for="lastName">Last Name:</label>
		<input type="text" name="lname" id="lastName">
		<br>


		
		<label>Gender</label>
		<input type="radio" name="gender" id="male" value="male">
		<label for="male">Male</label>
		<input type="radio" name="gender" id="female" value="female">
		<label for="female">Female</label>

		<br>

		<label for="emailId">Email:</label>
        <input type="email" id="emailId" name="Email">
        <br>


		


	    </fieldset>

	    <fieldset>

		<legend>User Account Information</legend>

		<label for="userNameId">UserName or UserId:</label>
		<input type="text" name="UNameId" id="userNameId">
		<br>

		<label for="password">Password:</label>
		<input type="password" name="pass" id="password">
		<br>

		

		<label for="Recoveryemail"> Recovery Email Address:</label>
        <input type="email" id="Recoveryemail" name="Remail">
        <br>


       
    </fieldset>



        
		

		<input type="submit" value="Register">
			
	</form>


	
</body>
</html>



