<?php
// Generate a random number between 0 and 10
$random_number = rand(0, 10);

// Create an array with the random number
$response_data = array(
    'number' => $random_number
);

// Set the content type to JSON
header('Content-Type: application/json');

// Encode the response data as JSON and output it
echo json_encode($response_data);
?>