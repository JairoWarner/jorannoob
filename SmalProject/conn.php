<?php
$servername = "localhost";
$dbname = "webbie";
$username = "root";
$password = "";

try {
    // Creating a new PDO instance to establish a database connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Setting the error mode of the connection to exception for better error handling
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Uncomment the line below if you want to display a success message when the connection is established
    // echo "Connection successful";
} catch (PDOException $e) {
    // Catching any exceptions that occur during the connection process and displaying an error message
    echo "Connection failed: " . $e->getMessage();
}
?>
