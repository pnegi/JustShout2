<?php
	include 'db.php';

	//checking if form is submitted or not
	if (isset($_POST['submit'])) {
		$username = mysqli_real_escape_string ($con, $_POST['username']);
		$message = mysqli_real_escape_string ($con, $_POST['message']);
	}

	//form validation
	if (!isset($username) || $username == '' || $message == '' || !isset($message)) {
		$error = "Error ! Fill Again";
        header("Location:index.php?error=Ahh...Something went wrong !");
	}
	else {
		$query = "INSERT INTO chats (username, message)
				  VALUES ('$username', '$message')";

		if (!mysqli_query($con, $query)) {
			die("Error fialed to insert into database".mysqli_connect_error($con));
		}
		else {
			header("Location: index.php");
			exit();
		}
	}


?>
