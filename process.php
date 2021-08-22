<?php
include_once 'config.php';
if (isset($_POST['submit'])) {

	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$messag = $_POST['message'];
	$sql = "INSERT INTO users (`email`, `subject`, `message`) VALUES ('$email', '$subject', '$message')";
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	} else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
