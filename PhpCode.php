<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Action</title>
</head>
<body>

	<h1>Registration Form Action</h1>

	<?php 

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$Gender = $_POST['gender'];
$emailId = $_POST['Email'];
$userNameId = $_POST['UNameId'];
$Password = $_POST['pass'];
$RecoveryEmail = $_POST['Remail'];


				echo "Client name is: $firstName $lastName";
				echo "<br>";
				echo "Gender: $Gender";

				$f = fopen("data.txt","a");

fwrite($f, "FIRST NAME= ".$firstName ." ");
fwrite($f, "LAST NAME= ".$lastName ." ");
fwrite($f, "GENDER= ".$Gender ." ");
fwrite($f, "EMAIL= ".$emailId. " ");
fwrite($f, "USER NAME=".$userNameId. " ");
fwrite($f, "PASSWORD=".$Password. " ");
fwrite($f, "RECOVERY MAIL=".$RecoveryEmail. " \n");

 fclose($f);
			
		
	?>

</body>
</html>