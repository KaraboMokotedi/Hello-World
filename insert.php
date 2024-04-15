<?php
// Retrieve form data from POST request
$formData = json_decode(file_get_contents('php://input'), true);

// Extract form fields
$firstname = $formData['firstname'];
$lastname = $formData['lastname'];

// Connect to Microsoft Access database
// Perform database insert operation

// Respond to client-side JavaScript
header('Content-Type: application/json');
echo json_encode(['success' => true]);
?>
