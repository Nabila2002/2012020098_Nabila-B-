<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Process the form submission
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	// Perform validation and database operations here

	// Example: Save user data to the database
	// Database configuration
	$servername = "localhost";
	$dbusername = "your_username";
	$dbpassword = "your_password";
	$dbname = "your_database_name";

	// Create a database connection
	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

	// Check the database connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// Example: Insert user data into the database
	$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
	$result = $conn->query($sql);

	if ($result) {
		echo "Registration successful!";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
?>
