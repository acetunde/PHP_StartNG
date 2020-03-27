<?php

if (isset($_POST["submitbtn"]))
{
	$firstname = $_POST["first_name"];
	$lastname = $_POST["last_name"];
	$dateofbirth = $_POST["date_of_birth"];
	$phonenumber = $_POST["phone_number"];
	$email = $_POST["email"];
	if ($_POST["gender"] == "Male"){
		$gender = "Male";}
	elseif ($_POST["gender"] == "Female") {
		$gender = "Female";}
	else $gender = "Not Sure";
	$modeofcontact = $_POST["contactchoice"];
	$yourmessage = $_POST["message"];
	
	$text = "First Name: ". $firstname;
	$text .= "\nLast Name:  ". $lastname;
	$text .= "\nDate of Birth: ".$dateofbirth;
	$text .= "\nPhone Number: ". $phonenumber;
	$text .= "\nEmail: ". $email;
	$text .= "\nGender: ". $gender;
	$text .= "\nPrefered mode of contact is by: ". $modeofcontact;
	$text .= "\nYour comments: ".$yourmessage;
	
	$doctitle = $firstname . $lastname.".txt";
	$newfile = fopen($doctitle, "w");
	fwrite($newfile, $text);
	fclose($newfile);
	
	echo ("The information has been saved as ". $doctitle);
}
	
	
?>

<!DOCTYPE html>
<html>
<head>
<title> PHP - Create and Submit a Contact Form </title>
</head>
<body>
<h3> Please fill the form below</h3>

<form action="#" method="POST">
		<p>
			<label for="firstname"> First Name </label><br/>
			<input type="text" name="first_name" placeholder="Enter Your First Name" required /> <br/>
		</p>
		
        <p> 
			<label for="lastname"> Last Name </label><br/>
			<input type="text" name="last_name" placeholder="Enter Your Last Name" required /> <br/>
		</p>
		
		<p>
			<label for="dob"> Date of Birth </label><br/>
			<input type="date" name="date_of_birth" placeholder="Select your date of birth" /> <br/>
		</p>
		
		<p>
			<label for="phonenumber"> Phone Number </label><br/>
			<input type="text" name="phone_number" placeholder="Enter your phone number"/> <br/>
		</p>
		
		<p>
			<label for="email"> Email </label><br/>
			<input type="email" name="email" placeholder="Enter Your Email" /> <br/>
		</p>
		
		<p>
			<label for="gender">Gender</label>
			<input type="radio" name="gender"/>Female
			<input type="radio" name="gender"/>Male
			<input type="radio" name="gender" checked /> Not Sure
		</p>
      	
		<p>
			<label for="contactchoice"> Preferred mode of contact </label><br/>
			
			<select name="contactchoice">
				<option>Select one...</option>
				<option>Email</option>
				<option>Phone Number</option>
			</select>
		</p>	
		
		<p>
			<label for="email">Your Message </label><br/>
			<textarea name="message" col="5" row="5"> </textarea>
		</p>
		
		<p>
			<input type="checkbox" name="terms" /> By checking this box, you agree to receive our monthly news letter
		</p>

    <button type="submit" name="submitbtn">Submit Form</button>
	
</form>



</body>
</html>

