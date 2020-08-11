<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];


	// Database connection
	$conn = new mysqli('34.67.14.209','webform','password');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName) values(?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successful...";
		$stmt->close();
		$conn->close();
	}
?>
