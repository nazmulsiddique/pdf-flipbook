<?php
// Check if it's a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $message = $_POST["message"];
    
    // Perform any necessary server-side processing here
    
    // Simulate a response (you can replace this with your actual response)
    $response = "Form data received successfully.";
    
    // Send a JSON response back to the client
    header('Content-Type: application/json');
    echo json_encode(array('message' => $response));
} else {
    // Handle other types of requests (GET, etc.) if necessary
    // For example, you can return an error message
    echo "Invalid request method.";
}
?>