<?php
// Database connection
$conn = new COM("ADODB.Connection");
$connStr = "Provider=Microsoft.ACE.OLEDB.12.0;Data Source=customers.accdb;";
$conn->open($connStr);

// Get form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
//$gender = $_POST['gender'];
// Insert data into database
$sql = "INSERT INTO table (firstname, lastname) VALUES ('$firstname', '$lastname')";
$conn->execute($sql);

// Close connection
$conn->close();

// Redirect back to the form page
header("Location: index.html");
exit();
?>
