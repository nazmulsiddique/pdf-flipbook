<?php
// Check if it's a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $fullname = $_POST["fullname"];
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
    $sql = "INSERT INTO catalog (fullname, email, mobile, message, catalog_type) VALUES ('$fullname', '$email', '$mobile', '$message', '$catalog_type')";
    
    if (mysqli_query($conn, $sql)) {
        $response= "New record created successfully";
      } else {
        $response= "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

    // Send a JSON response back to the client
    header('Content-Type: application/json');
    echo json_encode(array('message' => $response));
} else {
    // Handle other types of requests (GET, etc.) if necessary
    // For example, you can return an error message
    echo "Invalid request method.";
}
?>
