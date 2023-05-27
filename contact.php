<?php
// Assuming you have a MySQL database
$servername = "localhost";
$username = "hiteker";
$password = "Hiteker#12345@";
$dbname = "mydatabase";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];
$additional = $_POST['additional'];

// Insert the form data into the database
$sql = "INSERT INTO contact_form (first_name, last_name, email, message, additional) VALUES ('$fname', '$lname', '$email', '$message', '$additional')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
