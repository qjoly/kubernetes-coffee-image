<?php
// Generate a random number between 0 and 10
$random_number = rand(0, 10);

// Get the hostname of the server
$hostname = gethostname();

// Create an array with the random number
$response_data = array(
    'number' => $random_number,
    'hostname' => $hostname
);

// Set the content type to JSON
header('Content-Type: application/json');

// Encode the response data as JSON and output it
echo json_encode($response_data);
?>