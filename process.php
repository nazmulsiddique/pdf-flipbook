<?php
sleep(3);
header('Content-Type: application/json');
// Check if it's a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $message = $_POST["message"];
    $catalog_type = $_POST["catalog_type"];

    // Database credentials
    $db_host = "localhost:3307";
    $db_user = "root";
    $db_pass = "N@zmul1#";
    $db_name = "canton_fair";

    // Create a database connection
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data into the "catalog" table
    $sql = "INSERT INTO catalog (full_name, email, mobile, message, catalog_type) VALUES ('$full_name', '$email', '$mobile', '$message', '$catalog_type')";
    
    if (mysqli_query($conn, $sql)) {
        $response= "New record created successfully";
      }

    // Send a JSON response back to the client

    echo json_encode(array('success' => $response));
} else {
    // Handle other types of requests (GET, etc.) if necessary
    // For example, you can return an error message
    $response= "Invalid request method.";
    echo json_encode(array('error' => $response));
}
?>
