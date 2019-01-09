<?php ob_start(); ?>
<?php 
require_once("sessions.php"); 
require_once("db_connection.php");
require_once("functions.php");


if(isset($_POST['submit']) && !empty($_POST['email'])){
	//Process form
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$sql_message = mysql_prep($message);
	$message = nl2br($message);
		
	$emailto = "info@glasshousefarms.co,wbishop@glasshousefarms.co,steve@glasshousefarms.co";
	$subject = "New GlasshouseFarms.co message!";
	// the message
	$message = "<html><body>
				<b>From:</b> $name<br>
				<b>Email:</b> $email<br><br>
				<b>Message:</b><br>
				$message<br><br>

				</body></html>";
	//headers make the mail() work
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	mail($emailto, $subject, $message, $headers);
	
	$name = mysql_prep($name);
	$email = mysql_prep($email);
	// 2. Perform database query
	$query  = "INSERT INTO contacts (";
	$query .= " name, email, message";
	$query .= ") VALUES (";
	$query .= "'{$name}', '{$email}', '{$sql_message}'";
	$query .= ")";
	
	$result = mysqli_query($connection, $query);
	
	if ($result) {
		// Success
		echo "<br/><br/><br/>We successfully got your email, but there was an error! Try pressing the Back button! Sorry about that :(";
		$_SESSION["good_message"] = "Confirmed. We will get back to you asap.";
		redirect_to("../index.php");
	} else {
		//Failure
		$_SESSION["bad_message"] = "Failed to accept email.";
		redirect_to("../index.php");
	}
} else {
	//This can be an accidental GET request
	$_SESSION["bad_message"] = "That is not a valid email! Please try again.";
	redirect_to("../index.php");
}

?>


